<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Auth;

use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;

/**
 * Supplies a caller-managed access token without refreshing it.
 */
final readonly class StaticAccessTokenProvider implements AccessTokenProvider
{
    /**
     * Creates a provider for a pre-issued access token.
     */
    public function __construct(private string $token)
    {
        if (trim($this->token) === '') {
            throw new ConfigurationException('The static Amazon Ads access token must not be empty.');
        }
    }

    /**
     * Returns the configured access token.
     */
    public function accessToken(): string
    {
        return $this->token;
    }
}
