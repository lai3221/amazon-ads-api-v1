<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tools;

use JsonException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;
use SplFileInfo;

/**
 * Generates the complete Laravel SDK surface from the Amazon Ads API v1 specification.
 */
final class AmazonAdsSdkGenerator
{
    /**
     * HTTP methods supported by OpenAPI path items.
     *
     * @var list<string>
     */
    private const HTTP_METHODS = [
        'get',
        'post',
        'put',
        'patch',
        'delete',
        'head',
        'options',
        'trace',
    ];

    /**
     * PHP keywords that cannot safely be emitted as class names.
     *
     * @var list<string>
     */
    private const PHP_RESERVED_WORDS = [
        'abstract',
        'and',
        'array',
        'as',
        'break',
        'callable',
        'case',
        'catch',
        'class',
        'clone',
        'const',
        'continue',
        'declare',
        'default',
        'die',
        'do',
        'echo',
        'else',
        'elseif',
        'empty',
        'enddeclare',
        'endfor',
        'endforeach',
        'endif',
        'endswitch',
        'endwhile',
        'enum',
        'eval',
        'exit',
        'extends',
        'final',
        'finally',
        'fn',
        'for',
        'foreach',
        'function',
        'global',
        'goto',
        'if',
        'implements',
        'include',
        'include_once',
        'instanceof',
        'insteadof',
        'interface',
        'isset',
        'list',
        'match',
        'namespace',
        'new',
        'or',
        'print',
        'private',
        'protected',
        'public',
        'readonly',
        'require',
        'require_once',
        'return',
        'static',
        'switch',
        'throw',
        'trait',
        'try',
        'unset',
        'use',
        'var',
        'while',
        'xor',
        'yield',
    ];

    /**
     * Decoded OpenAPI document.
     *
     * @var array<string, mixed>
     */
    private array $specification;

    /**
     * Component schemas keyed by their exact OpenAPI names.
     *
     * @var array<string, array<string, mixed>>
     */
    private array $schemas;

    /**
     * Generated PHP class names keyed by exact OpenAPI schema name.
     *
     * @var array<string, string>
     */
    private array $schemaClassNames = [];

    /**
     * Generated resource API class names keyed by OpenAPI tag.
     *
     * @var array<string, string>
     */
    private array $apiClassNames = [];

    /**
     * Creates a generator for one decoded OpenAPI document.
     *
     * @param array<string, mixed> $specification Decoded OpenAPI document.
     */
    public function __construct(
        private readonly string $projectRoot,
        private readonly string $specificationPath,
        array $specification,
    ) {
        $this->specification = $specification;
        $this->schemas = is_array($specification['components']['schemas'] ?? null)
            ? $specification['components']['schemas']
            : [];
    }

    /**
     * Generates models, resource APIs, registries, accessors, documentation, and a manifest.
     */
    public function generate(): void
    {
        $this->assertSupportedSpecification();
        $this->buildNameMaps();
        $this->clearGeneratedDirectory();

        $modelFiles = $this->generateModels();
        $operations = $this->collectOperations();
        $apiFiles = $this->generateApis($operations);
        $this->generateApiAccessors();
        $this->generateLaravelFacade();
        $this->generateSchemaRegistry();
        $this->generateApiRegistry($operations);
        $this->generateApiReference($operations);
        $this->generateManifest($operations, $modelFiles, $apiFiles);

        printf(
            "Generated %d schemas, %d resource APIs, and %d operations from %s.\n",
            count($this->schemas),
            count($this->apiClassNames),
            count($operations),
            $this->relativePath($this->specificationPath),
        );
    }

    /**
     * Ensures the document is an OpenAPI 3 document with paths and component schemas.
     */
    private function assertSupportedSpecification(): void
    {
        $openApiVersion = $this->specification['openapi'] ?? null;
        if (!is_string($openApiVersion) || !str_starts_with($openApiVersion, '3.')) {
            throw new RuntimeException('The SDK generator requires an OpenAPI 3.x specification.');
        }

        if ($this->schemas === []) {
            throw new RuntimeException('The OpenAPI specification contains no component schemas.');
        }

        if (!is_array($this->specification['paths'] ?? null)) {
            throw new RuntimeException('The OpenAPI specification contains no paths object.');
        }
    }

    /**
     * Creates deterministic, collision-free PHP names for all schemas and resource tags.
     */
    private function buildNameMaps(): void
    {
        $usedSchemaNames = [];
        foreach (array_keys($this->schemas) as $schemaName) {
            $className = $this->className((string) $schemaName);
            $lookup = strtolower($className);

            if (isset($usedSchemaNames[$lookup])) {
                throw new RuntimeException(sprintf(
                    'Schemas %s and %s normalize to the same PHP class name %s.',
                    $usedSchemaNames[$lookup],
                    $schemaName,
                    $className,
                ));
            }

            $usedSchemaNames[$lookup] = $schemaName;
            $this->schemaClassNames[$schemaName] = $className;
        }

        foreach ($this->collectOperations() as $operation) {
            $tag = $operation['tag'];
            if (!isset($this->apiClassNames[$tag])) {
                $this->apiClassNames[$tag] = $this->className($tag) . 'Api';
            }
        }

        ksort($this->schemaClassNames);
        ksort($this->apiClassNames);
    }

    /**
     * Removes only the deterministic src/Generated output directory.
     */
    private function clearGeneratedDirectory(): void
    {
        $target = $this->projectRoot . '/src/Generated';
        $normalizedRoot = str_replace('\\', '/', rtrim($this->projectRoot, '/\\'));
        $normalizedTarget = str_replace('\\', '/', $target);

        if ($normalizedTarget !== $normalizedRoot . '/src/Generated') {
            throw new RuntimeException('Refusing to clear an unexpected generated output path.');
        }

        if (!is_dir($target)) {
            return;
        }

        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($target, RecursiveDirectoryIterator::SKIP_DOTS),
            RecursiveIteratorIterator::CHILD_FIRST,
        );

        /** @var SplFileInfo $item */
        foreach ($iterator as $item) {
            if ($item->isDir()) {
                rmdir($item->getPathname());
            } else {
                unlink($item->getPathname());
            }
        }

        rmdir($target);
    }

    /**
     * Generates every component schema as an object model, string enum, or oneOf model.
     *
     * @return array<string, string> Generated file paths keyed by OpenAPI schema name.
     */
    private function generateModels(): array
    {
        $files = [];

        foreach ($this->schemas as $schemaName => $schema) {
            if (!is_array($schema)) {
                throw new RuntimeException(sprintf('Schema %s is not an object.', $schemaName));
            }

            $className = $this->schemaClassNames[$schemaName];
            $relativePath = 'src/Generated/Model/' . $className . '.php';

            if (isset($schema['enum']) && ($schema['type'] ?? null) === 'string') {
                $contents = $this->renderEnum($schemaName, $className, $schema);
            } elseif (isset($schema['oneOf']) && is_array($schema['oneOf'])) {
                $contents = $this->renderUnion($schemaName, $className, $schema);
            } else {
                $contents = $this->renderObjectModel($schemaName, $className, $schema);
            }

            $this->write($relativePath, $contents);
            $files[$schemaName] = $relativePath;
        }

        return $files;
    }

    /**
     * Renders one string enum component as a PHP backed enum.
     *
     * @param array<string, mixed> $schema OpenAPI component schema.
     */
    private function renderEnum(string $schemaName, string $className, array $schema): string
    {
        $description = $this->summary(
            $schema['description'] ?? null,
            sprintf('Represents the %s values defined by Amazon Ads API v1.', $schemaName),
        );
        $cases = [];
        $usedCases = [];

        foreach ($schema['enum'] as $index => $value) {
            if (!is_string($value)) {
                throw new RuntimeException(sprintf('Enum %s contains a non-string value.', $schemaName));
            }

            $caseName = $this->enumCaseName($value, (int) $index);
            $baseCaseName = $caseName;
            $suffix = 2;
            while (isset($usedCases[strtolower($caseName)])) {
                $caseName = $baseCaseName . '_' . $suffix;
                $suffix++;
            }

            $usedCases[strtolower($caseName)] = true;
            $cases[] = sprintf("    case %s = '%s';", $caseName, $this->quote($value));
        }

        $caseCode = implode("\n", $cases);

        return <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * {$description}
 *
 * @generated from Amazon Ads API v1 schema {$schemaName}.
 */
enum {$className}: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = '{$this->quote($schemaName)}';

{$caseCode}

    /**
     * Returns every serialized OpenAPI enum value.
     *
     * @return list<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}

PHP;
    }

    /**
     * Renders one object component with generated attribute definitions and accessors.
     *
     * @param array<string, mixed> $schema OpenAPI component schema.
     */
    private function renderObjectModel(string $schemaName, string $className, array $schema): string
    {
        $description = $this->summary(
            $schema['description'] ?? null,
            sprintf('Represents the %s schema from Amazon Ads API v1.', $schemaName),
        );
        $properties = is_array($schema['properties'] ?? null) ? $schema['properties'] : [];
        $required = is_array($schema['required'] ?? null) ? $schema['required'] : [];
        $definitions = [];
        $methods = [];

        foreach ($properties as $propertyName => $propertySchema) {
            if (!is_array($propertySchema)) {
                continue;
            }

            $definition = $this->typeDefinition($propertySchema);
            $definition['required'] = in_array($propertyName, $required, true);
            $definition['nullable'] = ($propertySchema['nullable'] ?? false) === true;

            foreach (['minItems', 'maxItems', 'minimum', 'maximum', 'minLength', 'maxLength'] as $constraint) {
                if (isset($propertySchema[$constraint])) {
                    $definition[$constraint] = $propertySchema[$constraint];
                }
            }

            $definitions[$propertyName] = $definition;
            $methods[] = $this->renderPropertyAccessors($propertyName, $propertySchema, $definition);
        }

        $definitionCode = $this->exportDefinitions($definitions, 1);
        $methodCode = $methods === [] ? '' : "\n\n" . implode("\n\n", $methods);

        return <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * {$description}
 *
 * @generated from Amazon Ads API v1 schema {$schemaName}.
 */
final class {$className} extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = '{$this->quote($schemaName)}';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = {$definitionCode};{$methodCode}
}

PHP;
    }

    /**
     * Renders getter and fluent setter methods for one object property.
     *
     * @param array<string, mixed> $propertySchema OpenAPI property schema.
     * @param array<string, mixed> $definition Generated type definition.
     */
    private function renderPropertyAccessors(
        string $propertyName,
        array $propertySchema,
        array $definition,
    ): string {
        $methodSuffix = $this->methodSuffix($propertyName);
        $getterNativeType = $this->getterNativeType($definition);
        $getterDocType = $this->getterDocType($definition);
        $setterNativeType = $this->setterNativeType($definition);
        $setterDocType = $this->setterDocType($definition);
        $propertyDescription = $this->summary(
            $propertySchema['description'] ?? null,
            sprintf('the %s value', $propertyName),
        );
        $quotedProperty = $this->quote($propertyName);

        return <<<PHP
    /**
     * Returns {$propertyDescription}.
     *
     * @return {$getterDocType}|null
     */
    public function get{$methodSuffix}(): {$getterNativeType}
    {
        /** @var {$getterDocType}|null \$value */
        \$value = \$this->getAttribute('{$quotedProperty}');

        return \$value;
    }

    /**
     * Sets {$propertyDescription}.
     *
     * @param {$setterDocType}|null \$value New property value.
     * @return \$this
     */
    public function set{$methodSuffix}({$setterNativeType} \$value): self
    {
        \$this->setAttribute('{$quotedProperty}', \$value);

        return \$this;
    }
PHP;
    }

    /**
     * Renders one OpenAPI oneOf component as a union model.
     *
     * @param array<string, mixed> $schema OpenAPI component schema.
     */
    private function renderUnion(string $schemaName, string $className, array $schema): string
    {
        $description = $this->summary(
            $schema['description'] ?? null,
            sprintf('Represents the %s oneOf schema from Amazon Ads API v1.', $schemaName),
        );
        $variants = [];

        foreach ($schema['oneOf'] as $index => $variant) {
            if (!is_array($variant)) {
                continue;
            }

            $variantDefinition = [
                'title' => is_string($variant['title'] ?? null) ? $variant['title'] : 'variant_' . ($index + 1),
                'required' => is_array($variant['required'] ?? null) ? array_values($variant['required']) : [],
            ];

            if (is_string($variant['$ref'] ?? null)) {
                $variantDefinition['className'] = $this->classForReference($variant['$ref']);
            }

            $variants[] = $variantDefinition;
        }

        $variantCode = $this->exportDefinitions($variants, 1);

        return <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractUnion;

/**
 * {$description}
 *
 * Supply the selected oneOf JSON shape as an associative array or generated model.
 *
 * @generated from Amazon Ads API v1 schema {$schemaName}.
 */
final class {$className} extends AbstractUnion
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = '{$this->quote($schemaName)}';

    /**
     * Generated oneOf definitions used for validation.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = {$variantCode};
}

PHP;
    }

    /**
     * Generates every resource API class and operation method.
     *
     * @param list<array<string, mixed>> $operations Collected OpenAPI operations.
     * @return array<string, string> Generated API file paths keyed by OpenAPI tag.
     */
    private function generateApis(array $operations): array
    {
        $grouped = [];
        foreach ($operations as $operation) {
            $grouped[$operation['tag']][] = $operation;
        }

        ksort($grouped);
        $files = [];

        foreach ($grouped as $tag => $tagOperations) {
            $className = $this->apiClassNames[$tag];
            $relativePath = 'src/Generated/Api/' . $className . '.php';
            $this->write($relativePath, $this->renderApi($tag, $className, $tagOperations));
            $files[$tag] = $relativePath;
        }

        return $files;
    }

    /**
     * Renders one resource API class with all operations assigned to its tag.
     *
     * @param list<array<string, mixed>> $operations Operations assigned to the resource.
     */
    private function renderApi(string $tag, string $className, array $operations): string
    {
        $imports = [
            'Lai3221\\AmazonAdsApiV1\\Api\\AbstractApi',
            'Lai3221\\AmazonAdsApiV1\\ApiResponse',
            'Lai3221\\AmazonAdsApiV1\\RequestContext',
        ];
        $methods = [];

        foreach ($operations as $operation) {
            foreach ($this->referencedSchemaClassesForOperation($operation) as $modelClass) {
                $imports[] = 'Lai3221\\AmazonAdsApiV1\\Generated\\Model\\' . $modelClass;
            }

            $methods[] = $this->renderOperationMethod($operation);
        }

        $imports = array_values(array_unique($imports));
        $imports = $this->sortImports($imports);
        $importCode = implode("\n", array_map(
            static fn (string $import): string => 'use ' . $import . ';',
            $imports,
        ));
        $methodCode = implode("\n\n", $methods);

        return <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Api;

{$importCode}

/**
 * Provides all {$tag} operations from the Amazon Ads API v1 full specification.
 *
 * @generated from Amazon Ads API v1 tag {$tag}.
 */
final class {$className} extends AbstractApi
{
{$methodCode}
}

PHP;
    }

    /**
     * Renders one strongly documented generated operation method.
     *
     * @param array<string, mixed> $operation Collected OpenAPI operation.
     */
    private function renderOperationMethod(array $operation): string
    {
        $requestBody = $operation['requestBody'];
        $requestSchema = is_array($requestBody)
            ? $requestBody['content']['application/json']['schema'] ?? null
            : null;
        $requestClass = is_array($requestSchema) && is_string($requestSchema['$ref'] ?? null)
            ? $this->classForReference($requestSchema['$ref'])
            : null;
        $requestRequired = is_array($requestBody) && ($requestBody['required'] ?? false) === true;

        $requiredParameters = [];
        $optionalParameters = [];
        $queryAssignments = [];
        $docParameters = [];

        if ($requestClass !== null && $requestRequired) {
            $requiredParameters[] = $requestClass . '|array $request';
            $docParameters[] = sprintf(
                '     * @param %s|array<string, mixed> $request Operation request body.',
                $requestClass,
            );
        }

        foreach ($operation['parameters'] as $parameter) {
            if (($parameter['in'] ?? null) !== 'query') {
                continue;
            }

            $parameterName = (string) ($parameter['name'] ?? 'parameter');
            $variableName = $this->variableName($parameterName);
            $schema = is_array($parameter['schema'] ?? null) ? $parameter['schema'] : [];
            $required = ($parameter['required'] ?? false) === true;
            $nativeType = $this->apiParameterNativeType($schema, !$required);
            $docType = $this->apiParameterDocType($schema, !$required);
            $signature = $nativeType . ' $' . $variableName . ($required ? '' : ' = null');

            if ($required) {
                $requiredParameters[] = $signature;
            } else {
                $optionalParameters[] = $signature;
            }

            $description = $this->summary(
                $parameter['description'] ?? null,
                sprintf('The %s query parameter.', $parameterName),
            );
            $docParameters[] = sprintf(
                '     * @param %s%s $%s %s',
                $docType,
                $required ? '' : '|null',
                $variableName,
                ucfirst($description),
            );
            $queryAssignments[] = sprintf("                '%s' => $%s,", $this->quote($parameterName), $variableName);
        }

        if ($requestClass !== null && !$requestRequired) {
            $optionalParameters[] = $requestClass . '|array|null $request = null';
            $docParameters[] = sprintf(
                '     * @param %s|array<string, mixed>|null $request Optional operation request body.',
                $requestClass,
            );
        }

        $optionalParameters[] = '?RequestContext $context = null';
        $docParameters[] = '     * @param RequestContext|null $context Optional per-request account and profile headers.';

        $signatureParameters = array_merge($requiredParameters, $optionalParameters);
        $signature = $this->formatSignatureParameters($signatureParameters);
        $queryCode = $queryAssignments === []
            ? '[]'
            : "[\n" . implode("\n", $queryAssignments) . "\n            ]";
        $bodyCode = $requestClass === null ? 'null' : '$request';
        $requiredHeaders = array_values(array_map(
            static fn (array $parameter): string => (string) $parameter['name'],
            array_filter(
                $operation['parameters'],
                static fn (array $parameter): bool => ($parameter['in'] ?? null) === 'header'
                    && ($parameter['required'] ?? false) === true,
            ),
        ));
        $requiredHeaderCode = $this->exportSimpleArray($requiredHeaders, 3);

        $responseTypeEntries = [];
        $successResponseClass = null;
        foreach ($operation['responses'] as $status => $response) {
            $schema = is_array($response)
                ? $response['content']['application/json']['schema'] ?? null
                : null;
            if (!is_array($schema) || !is_string($schema['$ref'] ?? null)) {
                continue;
            }

            $className = $this->classForReference($schema['$ref']);
            $responseTypeEntries[] = sprintf("                '%s' => %s::class,", $this->quote((string) $status), $className);
            if ($successResponseClass === null && preg_match('/^2[0-9][0-9]$/', (string) $status) === 1) {
                $successResponseClass = $className;
            }
        }

        $responseTypeCode = $responseTypeEntries === []
            ? '[]'
            : "[\n" . implode("\n", $responseTypeEntries) . "\n            ]";
        $successResponseClass ??= 'mixed';
        $description = $this->summary(
            $operation['summary'] ?? $operation['description'] ?? null,
            sprintf('Calls the %s operation.', $operation['operationId']),
        );
        $requiredHeadersText = $requiredHeaders === [] ? 'none' : implode(', ', $requiredHeaders);
        $scopes = $operation['scopes'] === [] ? 'none declared' : implode(', ', $operation['scopes']);
        $docParameterCode = implode("\n", $docParameters);
        $methodName = $operation['methodName'];
        $httpMethod = strtoupper($operation['httpMethod']);
        $path = $this->quote($operation['path']);

        return <<<PHP
    /**
     * {$description}
     *
     * Required OpenAPI headers: {$requiredHeadersText}.
     * Declared OAuth scopes: {$scopes}.
     *
{$docParameterCode}
     * @return ApiResponse<{$successResponseClass}> Hydrated successful response.
     */
    public function {$methodName}(
{$signature}
    ): ApiResponse {
        return \$this->transport->request(
            method: '{$httpMethod}',
            path: '{$path}',
            query: {$queryCode},
            body: {$bodyCode},
            context: \$context,
            requiredHeaders: {$requiredHeaderCode},
            responseTypes: {$responseTypeCode},
        );
    }
PHP;
    }

    /**
     * Generates explicit AmazonAdsClient accessor methods for every resource API.
     */
    private function generateApiAccessors(): void
    {
        $imports = [];
        $methods = [];

        foreach ($this->apiClassNames as $tag => $className) {
            $imports[] = 'use Lai3221\\AmazonAdsApiV1\\Generated\\Api\\' . $className . ';';
            $methodName = $this->resourceAccessorName($tag);
            $methods[] = <<<PHP
    /**
     * Returns the generated {$tag} resource API.
     */
    public function {$methodName}(): {$className}
    {
        return \$this->api({$className}::class);
    }
PHP;
        }

        $imports = $this->sortImports($imports);
        $importCode = implode("\n", $imports);
        $methodCode = implode("\n\n", $methods);

        $contents = <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Concerns;

{$importCode}

/**
 * Adds explicit accessors for every generated Amazon Ads API v1 resource.
 *
 * @generated from all OpenAPI operation tags.
 */
trait HasGeneratedApis
{
{$methodCode}
}

PHP;

        $this->write('src/Generated/Concerns/HasGeneratedApis.php', $contents);
    }

    /**
     * Generates Laravel facade method metadata for every resource API.
     */
    private function generateLaravelFacade(): void
    {
        $imports = [
            'use Illuminate\\Support\\Facades\\Facade;',
            'use Lai3221\\AmazonAdsApiV1\\AmazonAdsClient;',
        ];
        $methods = [];

        foreach ($this->apiClassNames as $tag => $className) {
            $imports[] = 'use Lai3221\\AmazonAdsApiV1\\Generated\\Api\\' . $className . ';';
            $methodName = $this->resourceAccessorName($tag);
            $methods[] = sprintf(
                ' * @method static %s %s() Returns the generated %s resource API.',
                $className,
                $methodName,
                $tag,
            );
        }

        $importCode = implode("\n", $this->sortImports($imports));
        $methodCode = implode("\n", $methods);
        $contents = <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Laravel\Facades;

{$importCode}

/**
 * Declares every generated resource accessor available through the Laravel facade.
 *
{$methodCode}
 *
 * @generated from all OpenAPI operation tags.
 */
abstract class GeneratedAmazonAdsFacade extends Facade
{
    /**
     * Returns the service container key resolved by the facade.
     */
    protected static function getFacadeAccessor(): string
    {
        return AmazonAdsClient::class;
    }
}

PHP;

        $this->write('src/Generated/Laravel/Facades/GeneratedAmazonAdsFacade.php', $contents);
    }

    /**
     * Generates a schema-name-to-class registry for runtime discovery.
     */
    private function generateSchemaRegistry(): void
    {
        $entries = [];
        foreach ($this->schemaClassNames as $schemaName => $className) {
            $entries[] = sprintf(
                "        '%s' => \\Lai3221\\AmazonAdsApiV1\\Generated\\Model\\%s::class,",
                $this->quote($schemaName),
                $className,
            );
        }

        $entryCode = implode("\n", $entries);
        $hash = hash_file('sha256', $this->specificationPath);
        if (!is_string($hash)) {
            throw new RuntimeException('Unable to hash the OpenAPI specification.');
        }

        $contents = <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated;

/**
 * Maps exact Amazon OpenAPI schema names to generated PHP classes.
 *
 * @generated from the Amazon Ads API v1 full specification.
 */
final class SchemaRegistry
{
    /**
     * SHA-256 hash of the source OpenAPI document used for generation.
     */
    public const SPECIFICATION_SHA256 = '{$hash}';

    /**
     * Generated schema classes keyed by exact OpenAPI component name.
     *
     * @var array<string, class-string>
     */
    public const SCHEMAS = [
{$entryCode}
    ];

    /**
     * Returns a generated class for an exact OpenAPI schema name.
     *
     * @return class-string|null
     */
    public static function classFor(string \$schemaName): ?string
    {
        return self::SCHEMAS[\$schemaName] ?? null;
    }

    /**
     * Returns the number of generated component schemas.
     */
    public static function count(): int
    {
        return count(self::SCHEMAS);
    }
}

PHP;

        $this->write('src/Generated/SchemaRegistry.php', $contents);
    }

    /**
     * Generates a registry containing every resource tag and operation route.
     *
     * @param list<array<string, mixed>> $operations Collected OpenAPI operations.
     */
    private function generateApiRegistry(array $operations): void
    {
        $apiEntries = [];
        foreach ($this->apiClassNames as $tag => $className) {
            $apiEntries[] = sprintf(
                "        '%s' => \\Lai3221\\AmazonAdsApiV1\\Generated\\Api\\%s::class,",
                $this->quote($tag),
                $className,
            );
        }

        $operationEntries = [];
        foreach ($operations as $operation) {
            $operationEntries[] = sprintf(
                "        '%s' => ['method' => '%s', 'path' => '%s', 'tag' => '%s', 'sdkMethod' => '%s'],",
                $this->quote($operation['operationId']),
                strtoupper($operation['httpMethod']),
                $this->quote($operation['path']),
                $this->quote($operation['tag']),
                $this->quote($operation['methodName']),
            );
        }

        $apiEntryCode = implode("\n", $apiEntries);
        $operationEntryCode = implode("\n", $operationEntries);

        $contents = <<<PHP
<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;

/**
 * Describes every generated Amazon Ads API v1 resource and operation.
 *
 * @generated from the Amazon Ads API v1 full specification.
 */
final class ApiRegistry
{
    /**
     * Resource API classes keyed by exact OpenAPI tag.
     *
     * @var array<string, class-string<AbstractApi>>
     */
    public const APIS = [
{$apiEntryCode}
    ];

    /**
     * Route metadata keyed by exact OpenAPI operationId.
     *
     * @var array<string, array{method: string, path: string, tag: string, sdkMethod: string}>
     */
    public const OPERATIONS = [
{$operationEntryCode}
    ];

    /**
     * Returns the generated resource API class for an OpenAPI tag.
     *
     * @return class-string<AbstractApi>|null
     */
    public static function apiForTag(string \$tag): ?string
    {
        return self::APIS[\$tag] ?? null;
    }

    /**
     * Returns the number of generated OpenAPI operations.
     */
    public static function operationCount(): int
    {
        return count(self::OPERATIONS);
    }
}

PHP;

        $this->write('src/Generated/ApiRegistry.php', $contents);
    }

    /**
     * Generates a human-readable Markdown index of all resource methods.
     *
     * @param list<array<string, mixed>> $operations Collected OpenAPI operations.
     */
    private function generateApiReference(array $operations): void
    {
        $rows = [];
        foreach ($operations as $operation) {
            $responseClass = $this->successResponseClass($operation) ?? 'mixed';
            $rows[] = sprintf(
                '| `%s` | `%s::%s()` | `%s` | `%s` | `%s` |',
                str_replace('|', '\\|', $operation['tag']),
                $this->apiClassNames[$operation['tag']],
                $operation['methodName'],
                strtoupper($operation['httpMethod']),
                str_replace('|', '\\|', $operation['path']),
                $responseClass,
            );
        }

        $hash = hash_file('sha256', $this->specificationPath);
        $contents = "# Generated API reference\n\n"
            . "This index is generated from the Amazon Ads API v1 full specification. Do not edit it manually.\n\n"
            . "- Specification SHA-256: `{$hash}`\n"
            . '- Resource APIs: ' . count($this->apiClassNames) . "\n"
            . '- Operations: ' . count($operations) . "\n"
            . '- Component schemas: ' . count($this->schemas) . "\n\n"
            . "| Resource tag | SDK method | HTTP method | Path | Success model |\n"
            . "|---|---|---:|---|---|\n"
            . implode("\n", $rows) . "\n";

        $this->write('docs/API_REFERENCE.md', $contents);
    }

    /**
     * Writes the exact generated coverage manifest used by CI verification.
     *
     * @param list<array<string, mixed>> $operations Collected OpenAPI operations.
     * @param array<string, string> $modelFiles Generated model files keyed by schema name.
     * @param array<string, string> $apiFiles Generated API files keyed by tag.
     */
    private function generateManifest(array $operations, array $modelFiles, array $apiFiles): void
    {
        $operationManifest = [];
        foreach ($operations as $operation) {
            $operationManifest[] = [
                'operationId' => $operation['operationId'],
                'method' => strtoupper($operation['httpMethod']),
                'path' => $operation['path'],
                'tag' => $operation['tag'],
                'sdkMethod' => $operation['methodName'],
                'apiClass' => $this->apiClassNames[$operation['tag']],
            ];
        }

        $manifest = [
            'generator' => 'tools/generate-sdk.php',
            'specification' => [
                'path' => $this->relativePath($this->specificationPath),
                'sha256' => hash_file('sha256', $this->specificationPath),
                'openapi' => $this->specification['openapi'] ?? null,
                'version' => $this->specification['info']['version'] ?? null,
            ],
            'counts' => [
                'schemas' => count($modelFiles),
                'resourceApis' => count($apiFiles),
                'operations' => count($operationManifest),
            ],
            'schemas' => $modelFiles,
            'resourceApis' => $apiFiles,
            'operations' => $operationManifest,
        ];

        try {
            $json = json_encode($manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new RuntimeException('Unable to encode the generated SDK manifest.', previous: $exception);
        }

        $this->write('generated-manifest.json', $json . "\n");
    }

    /**
     * Collects and resolves every OpenAPI operation in deterministic order.
     *
     * @return list<array<string, mixed>>
     */
    private function collectOperations(): array
    {
        $operations = [];
        $paths = $this->specification['paths'];
        ksort($paths);

        foreach ($paths as $path => $pathItem) {
            if (!is_array($pathItem)) {
                continue;
            }

            foreach (self::HTTP_METHODS as $httpMethod) {
                $operation = $pathItem[$httpMethod] ?? null;
                if (!is_array($operation)) {
                    continue;
                }

                $operationId = $operation['operationId'] ?? null;
                if (!is_string($operationId) || $operationId === '') {
                    throw new RuntimeException(sprintf('%s %s has no operationId.', strtoupper($httpMethod), $path));
                }

                $tag = is_string($operation['tags'][0] ?? null) ? $operation['tags'][0] : 'Default';
                $parameters = array_merge(
                    is_array($pathItem['parameters'] ?? null) ? $pathItem['parameters'] : [],
                    is_array($operation['parameters'] ?? null) ? $operation['parameters'] : [],
                );
                $resolvedParameters = [];

                foreach ($parameters as $parameter) {
                    if (is_array($parameter)) {
                        $resolvedParameters[] = $this->resolveParameter($parameter);
                    }
                }

                $scopes = [];
                foreach (is_array($operation['security'] ?? null) ? $operation['security'] : [] as $requirement) {
                    if (!is_array($requirement)) {
                        continue;
                    }

                    foreach ($requirement as $requirementScopes) {
                        if (is_array($requirementScopes)) {
                            $scopes = array_merge($scopes, array_filter($requirementScopes, 'is_string'));
                        }
                    }
                }

                $operations[] = [
                    'operationId' => $operationId,
                    'methodName' => $this->operationMethodName($operationId),
                    'httpMethod' => $httpMethod,
                    'path' => (string) $path,
                    'tag' => $tag,
                    'summary' => $operation['summary'] ?? null,
                    'description' => $operation['description'] ?? null,
                    'parameters' => $resolvedParameters,
                    'requestBody' => is_array($operation['requestBody'] ?? null) ? $operation['requestBody'] : null,
                    'responses' => is_array($operation['responses'] ?? null) ? $operation['responses'] : [],
                    'scopes' => array_values(array_unique($scopes)),
                ];
            }
        }

        usort($operations, static function (array $left, array $right): int {
            return [$left['tag'], $left['operationId'], $left['path']]
                <=> [$right['tag'], $right['operationId'], $right['path']];
        });

        $usedMethods = [];
        foreach ($operations as $operation) {
            $key = strtolower($operation['tag'] . '::' . $operation['methodName']);
            if (isset($usedMethods[$key])) {
                throw new RuntimeException(sprintf(
                    'Operations %s and %s generate the same SDK method %s::%s.',
                    $usedMethods[$key],
                    $operation['operationId'],
                    $operation['tag'],
                    $operation['methodName'],
                ));
            }

            $usedMethods[$key] = $operation['operationId'];
        }

        return $operations;
    }

    /**
     * Resolves an inline or reusable OpenAPI parameter object.
     *
     * @param array<string, mixed> $parameter Inline or referenced parameter.
     * @return array<string, mixed>
     */
    private function resolveParameter(array $parameter): array
    {
        $reference = $parameter['$ref'] ?? null;
        if (!is_string($reference)) {
            return $parameter;
        }

        $name = basename(str_replace('#/components/parameters/', '', $reference));
        $resolved = $this->specification['components']['parameters'][$name] ?? null;

        if (!is_array($resolved)) {
            throw new RuntimeException(sprintf('Unable to resolve OpenAPI parameter reference %s.', $reference));
        }

        return $resolved;
    }

    /**
     * Returns all generated model classes referenced by an operation signature or response map.
     *
     * @param array<string, mixed> $operation Collected OpenAPI operation.
     * @return list<string>
     */
    private function referencedSchemaClassesForOperation(array $operation): array
    {
        $classes = [];
        $requestSchema = $operation['requestBody']['content']['application/json']['schema'] ?? null;
        if (is_array($requestSchema) && is_string($requestSchema['$ref'] ?? null)) {
            $classes[] = $this->classForReference($requestSchema['$ref']);
        }

        foreach ($operation['parameters'] as $parameter) {
            $schema = $parameter['schema'] ?? null;
            if (is_array($schema) && is_string($schema['$ref'] ?? null)) {
                $classes[] = $this->classForReference($schema['$ref']);
            }
        }

        foreach ($operation['responses'] as $response) {
            $schema = is_array($response)
                ? $response['content']['application/json']['schema'] ?? null
                : null;
            if (is_array($schema) && is_string($schema['$ref'] ?? null)) {
                $classes[] = $this->classForReference($schema['$ref']);
            }
        }

        return array_values(array_unique($classes));
    }

    /**
     * Returns the first declared successful response model class for an operation.
     *
     * @param array<string, mixed> $operation Collected OpenAPI operation.
     */
    private function successResponseClass(array $operation): ?string
    {
        foreach ($operation['responses'] as $status => $response) {
            if (preg_match('/^2[0-9][0-9]$/', (string) $status) !== 1 || !is_array($response)) {
                continue;
            }

            $schema = $response['content']['application/json']['schema'] ?? null;
            if (is_array($schema) && is_string($schema['$ref'] ?? null)) {
                return $this->classForReference($schema['$ref']);
            }
        }

        return null;
    }

    /**
     * Creates a generated hydration definition for an OpenAPI schema fragment.
     *
     * @param array<string, mixed> $schema OpenAPI schema fragment.
     * @return array<string, mixed>
     */
    private function typeDefinition(array $schema): array
    {
        if (is_string($schema['$ref'] ?? null)) {
            $schemaName = $this->schemaNameForReference($schema['$ref']);
            $target = $this->schemas[$schemaName];

            return [
                'type' => isset($target['enum']) ? 'enum' : 'model',
                'className' => $this->schemaClassNames[$schemaName],
            ];
        }

        $type = $schema['type'] ?? null;

        if ($type === 'array') {
            return [
                'type' => 'array',
                'items' => $this->typeDefinition(is_array($schema['items'] ?? null) ? $schema['items'] : []),
            ];
        }

        if ($type === 'string' && in_array($schema['format'] ?? null, ['date', 'date-time'], true)) {
            return ['type' => 'datetime'];
        }

        return [
            'type' => match ($type) {
                'string' => 'string',
                'integer' => 'integer',
                'number' => 'number',
                'boolean' => 'boolean',
                'object' => 'object',
                default => 'mixed',
            },
        ];
    }

    /**
     * Returns a nullable PHP return type for a generated model getter.
     *
     * @param array<string, mixed> $definition Generated type definition.
     */
    private function getterNativeType(array $definition): string
    {
        return match ($definition['type'] ?? 'mixed') {
            'model', 'enum' => '?' . $definition['className'],
            'array', 'object' => '?array',
            'datetime' => '?\\DateTimeImmutable',
            'string' => '?string',
            'integer' => '?int',
            'number' => 'int|float|null',
            'boolean' => '?bool',
            default => 'mixed',
        };
    }

    /**
     * Returns a PHPDoc return type for a generated model getter.
     *
     * @param array<string, mixed> $definition Generated type definition.
     */
    private function getterDocType(array $definition): string
    {
        return match ($definition['type'] ?? 'mixed') {
            'model', 'enum' => (string) $definition['className'],
            'array' => 'list<' . $this->getterDocType(
                is_array($definition['items'] ?? null) ? $definition['items'] : ['type' => 'mixed'],
            ) . '>',
            'object' => 'array<string, mixed>',
            'datetime' => '\\DateTimeImmutable',
            'string' => 'string',
            'integer' => 'int',
            'number' => 'int|float',
            'boolean' => 'bool',
            default => 'mixed',
        };
    }

    /**
     * Returns a PHP parameter type accepted by a generated model setter.
     *
     * @param array<string, mixed> $definition Generated type definition.
     */
    private function setterNativeType(array $definition): string
    {
        return match ($definition['type'] ?? 'mixed') {
            'model' => $definition['className'] . '|array|null',
            'enum' => $definition['className'] . '|string|null',
            'array', 'object' => '?array',
            'datetime' => '\\DateTimeInterface|string|null',
            'string' => '?string',
            'integer' => '?int',
            'number' => 'int|float|null',
            'boolean' => '?bool',
            default => 'mixed',
        };
    }

    /**
     * Returns a PHPDoc parameter type accepted by a generated model setter.
     *
     * @param array<string, mixed> $definition Generated type definition.
     */
    private function setterDocType(array $definition): string
    {
        return match ($definition['type'] ?? 'mixed') {
            'model' => $definition['className'] . '|array<string, mixed>',
            'enum' => $definition['className'] . '|string',
            'datetime' => '\\DateTimeInterface|string',
            default => $this->getterDocType($definition),
        };
    }

    /**
     * Returns a PHP type for an API query parameter.
     *
     * @param array<string, mixed> $schema OpenAPI parameter schema.
     */
    private function apiParameterNativeType(array $schema, bool $nullable): string
    {
        $definition = $this->typeDefinition($schema);
        $type = match ($definition['type'] ?? 'mixed') {
            'model' => $definition['className'] . '|array',
            'enum' => $definition['className'] . '|string',
            'array', 'object' => 'array',
            'datetime' => '\\DateTimeInterface|string',
            'string' => 'string',
            'integer' => 'int',
            'number' => 'int|float',
            'boolean' => 'bool',
            default => 'mixed',
        };

        return $nullable && $type !== 'mixed' ? $type . '|null' : $type;
    }

    /**
     * Returns a PHPDoc type for an API query parameter.
     *
     * @param array<string, mixed> $schema OpenAPI parameter schema.
     */
    private function apiParameterDocType(array $schema, bool $nullable): string
    {
        $definition = $this->typeDefinition($schema);

        return match ($definition['type'] ?? 'mixed') {
            'model' => $definition['className'] . '|array<string, mixed>',
            'enum' => $definition['className'] . '|string',
            'array' => 'list<' . $this->getterDocType(
                is_array($definition['items'] ?? null) ? $definition['items'] : ['type' => 'mixed'],
            ) . '>',
            'object' => 'array<string, mixed>',
            'datetime' => '\\DateTimeInterface|string',
            'string' => 'string',
            'integer' => 'int',
            'number' => 'int|float',
            'boolean' => 'bool',
            default => 'mixed',
        };
    }

    /**
     * Exports generated definitions while preserving PHP class constant references.
     *
     * @param array<mixed> $value Definition data.
     */
    private function exportDefinitions(array $value, int $indentLevel): string
    {
        if ($value === []) {
            return '[]';
        }

        $indent = str_repeat('    ', $indentLevel);
        $childIndent = str_repeat('    ', $indentLevel + 1);
        $isList = array_is_list($value);
        $lines = [];

        foreach ($value as $key => $item) {
            $prefix = $isList ? '' : "'" . $this->quote((string) $key) . "' => ";

            if ($key === 'className' && is_string($item)) {
                $prefix = $isList ? '' : "'class' => ";
                $exported = $item . '::class';
            } elseif (is_array($item)) {
                $exported = $this->exportDefinitions($item, $indentLevel + 1);
            } else {
                $exported = $this->exportScalar($item);
            }

            $lines[] = $childIndent . $prefix . $exported . ',';
        }

        return "[\n" . implode("\n", $lines) . "\n" . $indent . ']';
    }

    /**
     * Exports a list of scalar strings as formatted PHP code.
     *
     * @param list<string> $values Scalar values.
     */
    private function exportSimpleArray(array $values, int $indentLevel): string
    {
        if ($values === []) {
            return '[]';
        }

        $indent = str_repeat('    ', $indentLevel);
        $childIndent = str_repeat('    ', $indentLevel + 1);
        $lines = array_map(
            fn (string $value): string => $childIndent . "'" . $this->quote($value) . "',",
            $values,
        );

        return "[\n" . implode("\n", $lines) . "\n" . $indent . ']';
    }

    /**
     * Exports one scalar value as PHP source code.
     */
    private function exportScalar(mixed $value): string
    {
        return match (true) {
            is_string($value) => "'" . $this->quote($value) . "'",
            is_int($value), is_float($value) => (string) $value,
            is_bool($value) => $value ? 'true' : 'false',
            $value === null => 'null',
            default => throw new RuntimeException('Unable to export a non-scalar generated definition value.'),
        };
    }

    /**
     * Formats method parameters on separate PSR-12-compatible lines.
     *
     * @param list<string> $parameters PHP parameter declarations.
     */
    private function formatSignatureParameters(array $parameters): string
    {
        return implode("\n", array_map(
            static fn (string $parameter): string => '        ' . $parameter . ',',
            $parameters,
        ));
    }

    /**
     * Sorts imports with namespace separators before longer sibling class names.
     *
     * @param list<string> $imports Import names or complete use statements.
     * @return list<string>
     */
    private function sortImports(array $imports): array
    {
        usort($imports, static fn (string $left, string $right): int => strnatcasecmp(
            str_replace('\\', "\0", $left),
            str_replace('\\', "\0", $right),
        ));

        return $imports;
    }

    /**
     * Converts an OpenAPI schema name into a safe PHP class name.
     */
    private function className(string $name): string
    {
        $parts = preg_split('/[^A-Za-z0-9]+/', $name, -1, PREG_SPLIT_NO_EMPTY);
        $className = $parts === false || $parts === []
            ? 'GeneratedSchema'
            : implode('', array_map(static fn (string $part): string => ucfirst($part), $parts));

        if (preg_match('/^[0-9]/', $className) === 1) {
            $className = 'Schema' . $className;
        }

        if (in_array(strtolower($className), self::PHP_RESERVED_WORDS, true)) {
            $className .= 'Value';
        }

        return $className;
    }

    /**
     * Converts an enum value into a safe PHP enum case name.
     */
    private function enumCaseName(string $value, int $index): string
    {
        $withBoundaries = preg_replace('/(?<=[a-z0-9])(?=[A-Z])/', '_', $value) ?? $value;
        $caseName = strtoupper(preg_replace('/[^A-Za-z0-9]+/', '_', $withBoundaries) ?? '');
        $caseName = trim($caseName, '_');

        if ($caseName === '') {
            $caseName = 'VALUE_' . ($index + 1);
        }

        if (preg_match('/^[0-9]/', $caseName) === 1) {
            $caseName = 'VALUE_' . $caseName;
        }

        return $caseName;
    }

    /**
     * Converts an OpenAPI property name into a generated accessor suffix.
     */
    private function methodSuffix(string $propertyName): string
    {
        return $this->className($propertyName);
    }

    /**
     * Converts an OpenAPI query parameter name into a safe PHP variable name.
     */
    private function variableName(string $parameterName): string
    {
        $className = $this->className($parameterName);
        $variable = lcfirst($className);

        return in_array(strtolower($variable), self::PHP_RESERVED_WORDS, true)
            ? $variable . 'Value'
            : $variable;
    }

    /**
     * Converts an operationId into its generated lower-camel-case method name.
     */
    private function operationMethodName(string $operationId): string
    {
        $clean = preg_replace('/^AdsApiv1/', '', $operationId) ?? $operationId;
        $suffix = $this->className($clean);

        return lcfirst($suffix);
    }

    /**
     * Converts a resource tag into its AmazonAdsClient accessor method name.
     */
    private function resourceAccessorName(string $tag): string
    {
        return lcfirst($this->className($tag));
    }

    /**
     * Returns the generated class for a local OpenAPI schema reference.
     */
    private function classForReference(string $reference): string
    {
        $schemaName = $this->schemaNameForReference($reference);

        return $this->schemaClassNames[$schemaName];
    }

    /**
     * Extracts and validates a local component schema reference.
     */
    private function schemaNameForReference(string $reference): string
    {
        $prefix = '#/components/schemas/';
        if (!str_starts_with($reference, $prefix)) {
            throw new RuntimeException(sprintf('External schema reference %s is not supported.', $reference));
        }

        $schemaName = str_replace(['~1', '~0'], ['/', '~'], substr($reference, strlen($prefix)));
        if (!isset($this->schemas[$schemaName])) {
            throw new RuntimeException(sprintf('Unable to resolve OpenAPI schema reference %s.', $reference));
        }

        return $schemaName;
    }

    /**
     * Produces a concise single-paragraph English comment from OpenAPI text.
     */
    private function summary(mixed $description, string $fallback): string
    {
        if (!is_string($description) || trim($description) === '') {
            return $fallback;
        }

        $paragraphs = preg_split('/\R\s*\R/', trim($description));
        $text = is_array($paragraphs) && isset($paragraphs[0]) ? $paragraphs[0] : $description;
        $text = preg_replace('/\[[^\]]+\]\([^\)]+\)/', '$1', $text) ?? $text;
        $text = preg_replace('/[`*_#>|]+/', ' ', $text) ?? $text;
        $text = strip_tags($text);
        $text = preg_replace('/\s+/', ' ', $text) ?? $text;
        $text = str_replace('*/', '* /', trim($text));

        if ($text === '' || str_starts_with($text, '---')) {
            return $fallback;
        }

        if (strlen($text) > 260) {
            $text = rtrim(substr($text, 0, 257)) . '...';
        }

        return rtrim($text, " .\t\n\r\0\x0B") . '.';
    }

    /**
     * Escapes a value for inclusion in a generated single-quoted PHP string.
     */
    private function quote(string $value): string
    {
        return str_replace(['\\', "'"], ['\\\\', "\\'"], $value);
    }

    /**
     * Writes a generated file using normalized LF line endings.
     */
    private function write(string $relativePath, string $contents): void
    {
        $absolutePath = $this->projectRoot . '/' . str_replace('/', DIRECTORY_SEPARATOR, $relativePath);
        $directory = dirname($absolutePath);

        if (!is_dir($directory) && !mkdir($directory, 0777, true) && !is_dir($directory)) {
            throw new RuntimeException(sprintf('Unable to create generated directory %s.', $directory));
        }

        $normalized = str_replace("\r\n", "\n", $contents);
        if (file_put_contents($absolutePath, $normalized) === false) {
            throw new RuntimeException(sprintf('Unable to write generated file %s.', $absolutePath));
        }
    }

    /**
     * Returns a project-relative path when the file is inside the repository.
     */
    private function relativePath(string $path): string
    {
        $root = str_replace('\\', '/', rtrim($this->projectRoot, '/\\')) . '/';
        $normalized = str_replace('\\', '/', $path);

        return str_starts_with($normalized, $root) ? substr($normalized, strlen($root)) : $normalized;
    }
}

/**
 * Loads and validates the requested OpenAPI JSON document.
 *
 * @return array<string, mixed>
 */
function loadSpecification(string $path): array
{
    $json = file_get_contents($path);
    if ($json === false) {
        throw new RuntimeException(sprintf('Unable to read OpenAPI specification %s.', $path));
    }

    try {
        $specification = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $exception) {
        throw new RuntimeException('The OpenAPI specification is not valid JSON.', previous: $exception);
    }

    if (!is_array($specification)) {
        throw new RuntimeException('The OpenAPI specification must decode to an object.');
    }

    return $specification;
}

$projectRoot = dirname(__DIR__);
$input = $argv[1] ?? '.openapi/amazon-ads-v1-all.json';
$specificationPath = str_starts_with($input, '/') || preg_match('/^[A-Za-z]:[\\\\\/]/', $input) === 1
    ? $input
    : $projectRoot . '/' . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $input);

$generator = new AmazonAdsSdkGenerator(
    projectRoot: $projectRoot,
    specificationPath: $specificationPath,
    specification: loadSpecification($specificationPath),
);
$generator->generate();
