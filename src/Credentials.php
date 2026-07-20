<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1;

use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;

/**
 * Stores the credentials used to authorize Amazon Ads API requests.
 */
final readonly class Credentials
{
    /**
     * Creates an immutable credential set.
     */
    public function __construct(
        public string $clientId,
        public ?string $clientSecret = null,
        public ?string $refreshToken = null,
    ) {
        if (trim($this->clientId) === '') {
            throw new ConfigurationException('Amazon Ads client ID must not be empty.');
        }
    }

    /**
     * Ensures the credentials can perform a Login with Amazon token refresh.
     */
    public function assertRefreshable(): void
    {
        if ($this->clientSecret === null || trim($this->clientSecret) === '') {
            throw new ConfigurationException('Amazon Ads client secret is required to refresh an access token.');
        }

        if ($this->refreshToken === null || trim($this->refreshToken) === '') {
            throw new ConfigurationException('Amazon Ads refresh token is required to refresh an access token.');
        }
    }
}
