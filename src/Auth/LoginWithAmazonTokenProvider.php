<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Auth;

use DateTimeImmutable;
use GuzzleHttp\ClientInterface;
use JsonException;
use Lai3221\AmazonAdsApiV1\Credentials;
use Lai3221\AmazonAdsApiV1\Exception\AuthenticationException;
use Psr\SimpleCache\CacheInterface;
use Throwable;

/**
 * Refreshes and caches Login with Amazon access tokens.
 */
final class LoginWithAmazonTokenProvider implements AccessTokenProvider
{
    private const TOKEN_URL = 'https://api.amazon.com/auth/o2/token';

    private ?AccessToken $currentToken = null;

    /**
     * Creates a refresh-token-backed access token provider.
     */
    public function __construct(
        private readonly ClientInterface $http,
        private readonly Credentials $credentials,
        private readonly ?CacheInterface $cache = null,
    ) {
        $this->credentials->assertRefreshable();
    }

    /**
     * Returns a valid token, using memory, shared cache, or a token refresh.
     */
    public function accessToken(): string
    {
        if ($this->currentToken !== null && !$this->currentToken->isExpired()) {
            return $this->currentToken->value;
        }

        $cached = $this->readCachedToken();
        if ($cached !== null && !$cached->isExpired()) {
            $this->currentToken = $cached;

            return $cached->value;
        }

        $token = $this->refresh();
        $this->currentToken = $token;
        $this->writeCachedToken($token);

        return $token->value;
    }

    /**
     * Exchanges the configured refresh token for a new access token.
     */
    private function refresh(): AccessToken
    {
        try {
            $response = $this->http->request('POST', self::TOKEN_URL, [
                'form_params' => [
                    'grant_type' => 'refresh_token',
                    'refresh_token' => $this->credentials->refreshToken,
                    'client_id' => $this->credentials->clientId,
                    'client_secret' => $this->credentials->clientSecret,
                ],
                'headers' => [
                    'Accept' => 'application/json',
                ],
                'http_errors' => false,
            ]);
        } catch (Throwable $exception) {
            throw new AuthenticationException(
                'Unable to connect to Login with Amazon while refreshing the access token.',
                previous: $exception,
            );
        }

        $payload = $this->decodePayload((string) $response->getBody());

        if ($response->getStatusCode() >= 400) {
            $message = (string) ($payload['error_description'] ?? $payload['error'] ?? 'Unknown authentication error.');

            throw new AuthenticationException('Login with Amazon rejected the token refresh: ' . $message);
        }

        $token = $payload['access_token'] ?? null;
        if (!is_string($token) || $token === '') {
            throw new AuthenticationException('Login with Amazon returned no access token.');
        }

        $expiresIn = max(1, (int) ($payload['expires_in'] ?? 3600));

        return new AccessToken(
            value: $token,
            expiresAt: (new DateTimeImmutable())->modify(sprintf('+%d seconds', $expiresIn)),
        );
    }

    /**
     * Decodes a Login with Amazon JSON response.
     *
     * @return array<string, mixed>
     */
    private function decodePayload(string $json): array
    {
        try {
            $payload = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new AuthenticationException(
                'Login with Amazon returned an invalid JSON response.',
                previous: $exception,
            );
        }

        return is_array($payload) ? $payload : [];
    }

    /**
     * Reads a reusable token from the optional shared cache.
     */
    private function readCachedToken(): ?AccessToken
    {
        if ($this->cache === null) {
            return null;
        }

        try {
            $cached = $this->cache->get($this->cacheKey());
        } catch (Throwable) {
            return null;
        }

        if (!is_array($cached) || !is_string($cached['token'] ?? null) || !is_int($cached['expires_at'] ?? null)) {
            return null;
        }

        return new AccessToken(
            value: $cached['token'],
            expiresAt: (new DateTimeImmutable())->setTimestamp($cached['expires_at']),
        );
    }

    /**
     * Writes a refreshed token to the optional shared cache.
     */
    private function writeCachedToken(AccessToken $token): void
    {
        if ($this->cache === null) {
            return;
        }

        $ttl = max(1, $token->expiresAt->getTimestamp() - time() - 60);

        try {
            $this->cache->set($this->cacheKey(), [
                'token' => $token->value,
                'expires_at' => $token->expiresAt->getTimestamp(),
            ], $ttl);
        } catch (Throwable) {
            // A cache outage must not prevent authenticated API requests.
        }
    }

    /**
     * Returns a credential-specific cache key without exposing credential data.
     */
    private function cacheKey(): string
    {
        return 'amazon_ads_api_v1_lwa_' . hash(
            'sha256',
            $this->credentials->clientId . '|' . $this->credentials->refreshToken,
        );
    }
}
