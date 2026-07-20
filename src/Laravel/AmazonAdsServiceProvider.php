<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Laravel;

use GuzzleHttp\Client;
use Illuminate\Contracts\Cache\Repository as CacheRepository;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Support\ServiceProvider;
use Lai3221\AmazonAdsApiV1\AmazonAdsClient;
use Lai3221\AmazonAdsApiV1\Auth\AccessTokenProvider;
use Lai3221\AmazonAdsApiV1\Auth\LoginWithAmazonTokenProvider;
use Lai3221\AmazonAdsApiV1\Auth\StaticAccessTokenProvider;
use Lai3221\AmazonAdsApiV1\Contracts\Transport;
use Lai3221\AmazonAdsApiV1\Credentials;
use Lai3221\AmazonAdsApiV1\Http\HttpTransport;
use Lai3221\AmazonAdsApiV1\Region;
use Lai3221\AmazonAdsApiV1\RequestContext;
use Lai3221\AmazonAdsApiV1\SdkConfiguration;
use Lai3221\AmazonAdsApiV1\Support\Serializer;
use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;

/**
 * Registers the Amazon Ads API v1 SDK with a Laravel 11 application.
 */
final class AmazonAdsServiceProvider extends ServiceProvider
{
    /**
     * Registers configuration, credentials, authentication, transport, and client singletons.
     */
    public function register(): void
    {
        $this->mergeConfigFrom($this->configPath(), 'amazon-ads');

        $this->app->singleton(Credentials::class, function ($app): Credentials {
            $config = $app->make(ConfigRepository::class);

            return new Credentials(
                clientId: (string) $config->get('amazon-ads.client_id', ''),
                clientSecret: $this->nullableString($config->get('amazon-ads.client_secret')),
                refreshToken: $this->nullableString($config->get('amazon-ads.refresh_token')),
            );
        });

        $this->app->singleton(SdkConfiguration::class, function ($app): SdkConfiguration {
            $config = $app->make(ConfigRepository::class);

            return new SdkConfiguration(
                region: Region::fromConfig((string) $config->get('amazon-ads.region', 'NA')),
                defaultContext: new RequestContext(
                    profileId: $this->nullableString($config->get('amazon-ads.profile_id')),
                    accountId: $this->nullableString($config->get('amazon-ads.account_id')),
                    managerAccountId: $this->nullableString($config->get('amazon-ads.manager_account_id')),
                    acceptLanguage: $this->nullableString($config->get('amazon-ads.accept_language')),
                ),
                timeout: (float) $config->get('amazon-ads.timeout', 30),
                connectTimeout: (float) $config->get('amazon-ads.connect_timeout', 10),
                maxRetries: (int) $config->get('amazon-ads.max_retries', 3),
                retryBaseDelayMilliseconds: (int) $config->get('amazon-ads.retry_base_delay_ms', 250),
            );
        });

        $this->app->singleton(Serializer::class);

        $this->app->singleton(AccessTokenProvider::class, function ($app): AccessTokenProvider {
            $config = $app->make(ConfigRepository::class);
            $accessToken = $this->nullableString($config->get('amazon-ads.access_token'));

            if ($accessToken !== null) {
                return new StaticAccessTokenProvider($accessToken);
            }

            $cache = null;
            if ((bool) $config->get('amazon-ads.token_cache', true)) {
                $cache = new LaravelCacheAdapter($app->make(CacheRepository::class));
            }

            return new LoginWithAmazonTokenProvider(
                http: new Client(),
                credentials: $app->make(Credentials::class),
                cache: $cache,
            );
        });

        $this->app->singleton(Transport::class, function ($app): Transport {
            $configuration = $app->make(SdkConfiguration::class);
            $logger = $app->bound(LoggerInterface::class)
                ? $app->make(LoggerInterface::class)
                : new NullLogger();

            return new HttpTransport(
                http: new Client(),
                tokens: $app->make(AccessTokenProvider::class),
                credentials: $app->make(Credentials::class),
                configuration: $configuration,
                serializer: $app->make(Serializer::class),
                logger: $logger,
            );
        });

        $this->app->singleton(AmazonAdsClient::class, fn ($app): AmazonAdsClient => new AmazonAdsClient(
            $app->make(Transport::class),
        ));
    }

    /**
     * Publishes the SDK configuration file for application customization.
     */
    public function boot(): void
    {
        $this->publishes([
            $this->configPath() => config_path('amazon-ads.php'),
        ], 'amazon-ads-config');
    }

    /**
     * Returns the absolute path to the package configuration file.
     */
    private function configPath(): string
    {
        return dirname(__DIR__, 2) . '/config/amazon-ads.php';
    }

    /**
     * Converts optional Laravel configuration values into nullable strings.
     */
    private function nullableString(mixed $value): ?string
    {
        return is_string($value) && trim($value) !== '' ? $value : null;
    }
}
