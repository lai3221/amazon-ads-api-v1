<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests\Unit;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Lai3221\AmazonAdsApiV1\Auth\LoginWithAmazonOAuth;
use Lai3221\AmazonAdsApiV1\Auth\LoginWithAmazonTokenProvider;
use Lai3221\AmazonAdsApiV1\Credentials;
use Lai3221\AmazonAdsApiV1\Tests\Support\ArrayCache;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

/**
 * Verifies Login with Amazon authorization and refresh-token behavior.
 */
final class AuthenticationTest extends TestCase
{
    /**
     * Confirms refreshed access tokens are reused through the configured cache.
     */
    #[Test]
    public function itRefreshesAndCachesAnAccessToken(): void
    {
        $cache = new ArrayCache();
        $credentials = new Credentials('client-id', 'client-secret', 'refresh-token');
        $http = $this->mockHttp([
            new Response(200, ['Content-Type' => 'application/json'], json_encode([
                'access_token' => 'refreshed-access-token',
                'expires_in' => 3600,
                'token_type' => 'bearer',
            ], JSON_THROW_ON_ERROR)),
        ]);

        $provider = new LoginWithAmazonTokenProvider($http, $credentials, $cache);

        self::assertSame('refreshed-access-token', $provider->accessToken());

        $cachedProvider = new LoginWithAmazonTokenProvider($this->mockHttp([]), $credentials, $cache);
        self::assertSame('refreshed-access-token', $cachedProvider->accessToken());
    }

    /**
     * Confirms the OAuth helper builds and exchanges an authorization-code flow.
     */
    #[Test]
    public function itBuildsAndExchangesAnAuthorizationCodeFlow(): void
    {
        $oauth = new LoginWithAmazonOAuth(
            http: $this->mockHttp([
                new Response(200, ['Content-Type' => 'application/json'], json_encode([
                    'access_token' => 'access-token',
                    'refresh_token' => 'refresh-token',
                    'expires_in' => 3600,
                    'token_type' => 'bearer',
                ], JSON_THROW_ON_ERROR)),
            ]),
            clientId: 'client-id',
            clientSecret: 'client-secret',
            redirectUri: 'https://example.test/callback',
        );

        $url = $oauth->authorizationUrl(['advertising::campaign_management'], 'state-value');
        $tokens = $oauth->exchangeAuthorizationCode('authorization-code');

        self::assertStringContainsString('client_id=client-id', $url);
        self::assertStringContainsString('state=state-value', $url);
        self::assertSame('access-token', $tokens->accessToken);
        self::assertSame('refresh-token', $tokens->refreshToken);
    }

    /**
     * Creates a Guzzle client backed by a deterministic mock response queue.
     *
     * @param list<Response> $responses Mock HTTP responses.
     */
    private function mockHttp(array $responses): Client
    {
        return new Client([
            'handler' => HandlerStack::create(new MockHandler($responses)),
        ]);
    }
}
