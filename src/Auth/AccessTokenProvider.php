<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Auth;

/**
 * Supplies a valid Login with Amazon access token to the HTTP transport.
 */
interface AccessTokenProvider
{
    /**
     * Returns an access token without the Bearer prefix.
     */
    public function accessToken(): string;
}
