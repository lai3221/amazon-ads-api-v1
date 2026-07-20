<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests\Unit;

use Lai3221\AmazonAdsApiV1\Generated\ApiRegistry;
use Lai3221\AmazonAdsApiV1\Generated\SchemaRegistry;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use ReflectionClass;

/**
 * Verifies that generated registries expose the full committed specification surface.
 */
final class GeneratedCoverageTest extends TestCase
{
    /**
     * Confirms the generated counts and specification hash are current.
     */
    #[Test]
    public function itMatchesTheFullOpenapiSpecification(): void
    {
        $specificationPath = dirname(__DIR__, 2) . '/.openapi/amazon-ads-v1-all.json';

        self::assertSame(1270, SchemaRegistry::count());
        self::assertCount(34, ApiRegistry::APIS);
        self::assertSame(73, ApiRegistry::operationCount());
        self::assertSame(hash_file('sha256', $specificationPath), SchemaRegistry::SPECIFICATION_SHA256);
    }

    /**
     * Confirms every registered schema class can be autoloaded.
     */
    #[Test]
    public function itAutoloadsEveryGeneratedSchema(): void
    {
        foreach (SchemaRegistry::SCHEMAS as $schemaName => $className) {
            self::assertTrue(
                class_exists($className) || enum_exists($className),
                sprintf('Generated schema %s cannot be autoloaded as %s.', $schemaName, $className),
            );
        }
    }

    /**
     * Confirms every operation registry entry points to a documented public method.
     */
    #[Test]
    public function itExposesEveryRegisteredOperationMethod(): void
    {
        foreach (ApiRegistry::OPERATIONS as $operationId => $metadata) {
            $apiClass = ApiRegistry::APIS[$metadata['tag']];
            $reflection = new ReflectionClass($apiClass);

            self::assertTrue(
                $reflection->hasMethod($metadata['sdkMethod']),
                sprintf('Operation %s has no generated method.', $operationId),
            );
            self::assertNotFalse($reflection->getMethod($metadata['sdkMethod'])->getDocComment());
        }
    }
}
