<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests\Feature;

use Lai3221\AmazonAdsApiV1\AmazonAdsClient;
use Lai3221\AmazonAdsApiV1\Generated\Api\CampaignsApi;
use Lai3221\AmazonAdsApiV1\Laravel\Facades\AmazonAds;
use Lai3221\AmazonAdsApiV1\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * Verifies Laravel 11 package discovery, container bindings, and facade access.
 */
final class LaravelIntegrationTest extends TestCase
{
    /**
     * Confirms the service provider resolves a singleton client and generated APIs.
     */
    #[Test]
    public function itResolvesTheClientFromTheLaravelContainer(): void
    {
        $app = $this->app;
        self::assertNotNull($app);
        $client = $app->make(AmazonAdsClient::class);

        self::assertSame($client, $app->make(AmazonAdsClient::class));
        self::assertInstanceOf(CampaignsApi::class, $client->campaigns());
    }

    /**
     * Confirms the Laravel facade resolves the configured SDK client.
     */
    #[Test]
    public function itResolvesGeneratedApisThroughTheFacade(): void
    {
        self::assertInstanceOf(CampaignsApi::class, AmazonAds::campaigns());
    }
}
