<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests;

use Lai3221\AmazonAdsApiV1\Laravel\AmazonAdsServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

/**
 * Provides the Laravel package test environment.
 */
abstract class TestCase extends Orchestra
{
    /**
     * Returns the package providers loaded by Orchestra Testbench.
     *
     * @param mixed $app Testbench application instance.
     * @return list<class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [AmazonAdsServiceProvider::class];
    }

    /**
     * Defines safe static credentials for container resolution tests.
     *
     * @param mixed $app Testbench application instance.
     */
    protected function defineEnvironment($app): void
    {
        $app['config']->set('amazon-ads.client_id', 'test-client-id');
        $app['config']->set('amazon-ads.access_token', 'test-access-token');
        $app['config']->set('amazon-ads.region', 'NA');
        $app['config']->set('amazon-ads.token_cache', false);
    }
}
