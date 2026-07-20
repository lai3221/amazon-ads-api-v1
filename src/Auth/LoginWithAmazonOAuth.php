<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Auth;

use GuzzleHttp\ClientInterface;
use JsonException;
use Lai3221\AmazonAdsApiV1\Exception\AuthenticationException;
use Throwable;

/**
 * Builds Login with Amazon authorization URLs and exchanges authorization codes.
 */
final readonly class LoginWithAmazonOAuth
{
    private const AUTHORIZATION_URL = 'https://www.amazon.com/ap/oa';

    private const TOKEN_URL = 'https://api.amazon.com/auth/o2/token';

    /**
     * Creates an OAuth helper for one Login with Amazon application.
     */
    public function __construct(
        private ClientInterface $http,
        private string $clientId,
        private string $clientSecret,
        private string $redirectUri,
    ) {
    }

    /**
     * Builds the URL that starts a Login with Amazon authorization-code flow.
     *
     * @param list<string> $scopes OAuth scopes requested from the user.
     */
    public function authorizationUrl(
        array $scopes = ['advertising::campaign_management'],
        ?string $state = null,
    ): string {
        $query = [
            'client_id' => $this->clientId,
            'scope' => implode(' ', $scopes),
            'response_type' => 'code',
            'redirect_uri' => $this->redirectUri,
        ];

        if ($state !== null) {
            $query['state'] = $state;
        }

        return self::AUTHORIZATION_URL . '?' . http_build_query($query, '', '&', PHP_QUERY_RFC3986);
    }

    /**
     * Exchanges an authorization code for access and refresh tokens.
     */
    public function exchangeAuthorizationCode(string $code): LoginWithAmazonTokenSet
    {
        try {
            $response = $this->http->request('POST', self::TOKEN_URL, [
                'form_params' => [
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                    'redirect_uri' => $this->redirectUri,
                    'client_id' => $this->clientId,
                    'client_secret' => $this->clientSecret,
                ],
                'headers' => ['Accept' => 'application/json'],
                'http_errors' => false,
            ]);
        } catch (Throwable $exception) {
            throw new AuthenticationException(
                'Unable to connect to Login with Amazon while exchanging the authorization code.',
                previous: $exception,
            );
        }

        try {
            $payload = json_decode((string) $response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $exception) {
            throw new AuthenticationException(
                'Login with Amazon returned invalid JSON during the authorization-code exchange.',
                previous: $exception,
            );
        }

        if (!is_array($payload) || $response->getStatusCode() >= 400) {
            $message = is_array($payload)
                ? (string) ($payload['error_description'] ?? $payload['error'] ?? 'Unknown authentication error.')
                : 'Unknown authentication error.';

            throw new AuthenticationException('Login with Amazon rejected the authorization code: ' . $message);
        }

        if (!is_string($payload['access_token'] ?? null)) {
            throw new AuthenticationException('Login with Amazon returned no access token.');
        }

        return new LoginWithAmazonTokenSet(
            accessToken: $payload['access_token'],
            refreshToken: is_string($payload['refresh_token'] ?? null) ? $payload['refresh_token'] : null,
            expiresIn: (int) ($payload['expires_in'] ?? 3600),
            tokenType: (string) ($payload['token_type'] ?? 'bearer'),
        );
    }
}
