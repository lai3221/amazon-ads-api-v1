<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tools;

use JsonException;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RuntimeException;
use SplFileInfo;

/**
 * Verifies that generated models and operation methods exactly cover the source specification.
 */
final readonly class GeneratedCoverageVerifier
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
     * Creates a verifier for one project, specification, and generated manifest.
     *
     * @param array<string, mixed> $specification Decoded OpenAPI document.
     * @param array<string, mixed> $manifest Decoded generated coverage manifest.
     */
    public function __construct(
        private string $projectRoot,
        private string $specificationPath,
        private array $specification,
        private array $manifest,
    ) {
    }

    /**
     * Runs every coverage and generated-file integrity check.
     */
    public function verify(): void
    {
        $this->verifySpecificationHash();
        $this->verifySchemas();
        $this->verifyOperations();
        $this->verifyResourceApis();
        $this->verifyGeneratedPhpFiles();

        printf(
            "Verified complete coverage: %d schemas, %d resource APIs, and %d operations.\n",
            count($this->manifest['schemas']),
            count($this->manifest['resourceApis']),
            count($this->manifest['operations']),
        );
    }

    /**
     * Ensures the manifest was generated from the exact current OpenAPI bytes.
     */
    private function verifySpecificationHash(): void
    {
        $actualHash = hash_file('sha256', $this->specificationPath);
        $manifestHash = $this->manifest['specification']['sha256'] ?? null;

        if (!is_string($actualHash) || $actualHash !== $manifestHash) {
            throw new RuntimeException('Generated files are stale because the OpenAPI SHA-256 hash changed.');
        }
    }

    /**
     * Ensures every component schema has exactly one generated PHP file.
     */
    private function verifySchemas(): void
    {
        $expected = array_keys($this->specification['components']['schemas'] ?? []);
        $actual = array_keys($this->manifest['schemas'] ?? []);
        sort($expected);
        sort($actual);

        if ($expected !== $actual) {
            throw new RuntimeException($this->differenceMessage('schema', $expected, $actual));
        }

        foreach ($this->manifest['schemas'] as $schemaName => $relativePath) {
            $absolutePath = $this->projectRoot . '/' . $relativePath;
            if (!is_file($absolutePath)) {
                throw new RuntimeException(sprintf('Generated schema file is missing: %s.', $relativePath));
            }

            $contents = file_get_contents($absolutePath);
            $quotedName = preg_quote((string) $schemaName, '/');
            if (!is_string($contents) || preg_match("/OPENAPI_NAME = ['\"]{$quotedName}['\"]/", $contents) !== 1) {
                throw new RuntimeException(sprintf(
                    'Generated schema file %s does not declare the expected OpenAPI name %s.',
                    $relativePath,
                    $schemaName,
                ));
            }
        }
    }

    /**
     * Ensures every OpenAPI operation has one generated method with matching route metadata.
     */
    private function verifyOperations(): void
    {
        $expected = $this->collectSpecificationOperations();
        $actual = [];

        foreach ($this->manifest['operations'] ?? [] as $operation) {
            if (!is_array($operation)) {
                continue;
            }

            $key = $this->operationKey(
                (string) ($operation['operationId'] ?? ''),
                (string) ($operation['method'] ?? ''),
                (string) ($operation['path'] ?? ''),
            );
            $actual[$key] = $operation;
        }

        $expectedKeys = array_keys($expected);
        $actualKeys = array_keys($actual);
        sort($expectedKeys);
        sort($actualKeys);

        if ($expectedKeys !== $actualKeys) {
            throw new RuntimeException($this->differenceMessage('operation', $expectedKeys, $actualKeys));
        }

        foreach ($actual as $operation) {
            $tag = (string) $operation['tag'];
            $apiPath = $this->manifest['resourceApis'][$tag] ?? null;
            if (!is_string($apiPath) || !is_file($this->projectRoot . '/' . $apiPath)) {
                throw new RuntimeException(sprintf('Generated resource API for tag %s is missing.', $tag));
            }

            $contents = file_get_contents($this->projectRoot . '/' . $apiPath);
            $methodName = preg_quote((string) $operation['sdkMethod'], '/');
            $path = preg_quote((string) $operation['path'], '/');
            if (
                !is_string($contents)
                || preg_match('/public function ' . $methodName . '\s*\(/', $contents) !== 1
                || preg_match("/path:\s*['\"]{$path}['\"]/", $contents) !== 1
            ) {
                throw new RuntimeException(sprintf(
                    'Generated operation %s is missing its method or route in %s.',
                    $operation['operationId'],
                    $apiPath,
                ));
            }
        }
    }

    /**
     * Ensures the manifest contains every unique OpenAPI resource tag and API file.
     */
    private function verifyResourceApis(): void
    {
        $expected = [];
        foreach ($this->collectSpecificationOperations() as $operation) {
            $expected[] = $operation['tag'];
        }

        $expected = array_values(array_unique($expected));
        $actual = array_keys($this->manifest['resourceApis'] ?? []);
        sort($expected);
        sort($actual);

        if ($expected !== $actual) {
            throw new RuntimeException($this->differenceMessage('resource API', $expected, $actual));
        }

        foreach ($this->manifest['resourceApis'] as $relativePath) {
            if (!is_string($relativePath) || !is_file($this->projectRoot . '/' . $relativePath)) {
                throw new RuntimeException(sprintf('Generated resource API file is missing: %s.', (string) $relativePath));
            }
        }
    }

    /**
     * Ensures all generated PHP files enable strict types and contain generated documentation.
     */
    private function verifyGeneratedPhpFiles(): void
    {
        $directory = $this->projectRoot . '/src/Generated';
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($directory, RecursiveDirectoryIterator::SKIP_DOTS),
        );

        /** @var SplFileInfo $file */
        foreach ($iterator as $file) {
            if (!$file->isFile() || $file->getExtension() !== 'php') {
                continue;
            }

            $contents = file_get_contents($file->getPathname());
            if (
                !is_string($contents)
                || !str_contains($contents, 'declare(strict_types=1);')
                || !str_contains($contents, '@generated')
            ) {
                throw new RuntimeException(sprintf(
                    'Generated PHP integrity check failed for %s.',
                    $file->getPathname(),
                ));
            }
        }
    }

    /**
     * Collects exact operation identities and tags from the OpenAPI document.
     *
     * @return array<string, array{operationId: string, method: string, path: string, tag: string}>
     */
    private function collectSpecificationOperations(): array
    {
        $operations = [];

        foreach ($this->specification['paths'] ?? [] as $path => $pathItem) {
            if (!is_array($pathItem)) {
                continue;
            }

            foreach (self::HTTP_METHODS as $method) {
                $operation = $pathItem[$method] ?? null;
                if (!is_array($operation)) {
                    continue;
                }

                $operationId = (string) ($operation['operationId'] ?? '');
                $httpMethod = strtoupper($method);
                $key = $this->operationKey($operationId, $httpMethod, (string) $path);
                $operations[$key] = [
                    'operationId' => $operationId,
                    'method' => $httpMethod,
                    'path' => (string) $path,
                    'tag' => (string) ($operation['tags'][0] ?? 'Default'),
                ];
            }
        }

        return $operations;
    }

    /**
     * Creates a stable identity for one OpenAPI operation.
     */
    private function operationKey(string $operationId, string $method, string $path): string
    {
        return $operationId . '|' . strtoupper($method) . '|' . $path;
    }

    /**
     * Builds an actionable mismatch message for expected and generated names.
     *
     * @param list<string> $expected Expected names.
     * @param list<string> $actual Generated names.
     */
    private function differenceMessage(string $label, array $expected, array $actual): string
    {
        $missing = array_values(array_diff($expected, $actual));
        $unexpected = array_values(array_diff($actual, $expected));

        return sprintf(
            'Generated %s coverage mismatch. Missing: [%s]. Unexpected: [%s].',
            $label,
            implode(', ', $missing),
            implode(', ', $unexpected),
        );
    }
}

/**
 * Decodes a JSON object from disk.
 *
 * @return array<string, mixed>
 */
function decodeJsonFile(string $path): array
{
    $json = file_get_contents($path);
    if ($json === false) {
        throw new RuntimeException(sprintf('Unable to read JSON file %s.', $path));
    }

    try {
        $decoded = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    } catch (JsonException $exception) {
        throw new RuntimeException(sprintf('JSON file %s is invalid.', $path), previous: $exception);
    }

    if (!is_array($decoded)) {
        throw new RuntimeException(sprintf('JSON file %s must contain an object.', $path));
    }

    return $decoded;
}

$projectRoot = dirname(__DIR__);
$input = $argv[1] ?? '.openapi/amazon-ads-v1-all.json';
$specificationPath = str_starts_with($input, '/') || preg_match('/^[A-Za-z]:[\\\\\/]/', $input) === 1
    ? $input
    : $projectRoot . '/' . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $input);
$manifestPath = $projectRoot . '/generated-manifest.json';

$verifier = new GeneratedCoverageVerifier(
    projectRoot: $projectRoot,
    specificationPath: $specificationPath,
    specification: decodeJsonFile($specificationPath),
    manifest: decodeJsonFile($manifestPath),
);
$verifier->verify();
