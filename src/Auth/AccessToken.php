<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Auth;

use DateTimeImmutable;

/**
 * Represents a short-lived Login with Amazon access token.
 */
final readonly class AccessToken
{
    /**
     * Creates an access token with its absolute expiration time.
     */
    public function __construct(
        public string $value,
        public DateTimeImmutable $expiresAt,
    ) {
    }

    /**
     * Determines whether the token is expired or within the safety window.
     */
    public function isExpired(int $leewaySeconds = 60): bool
    {
        return $this->expiresAt->getTimestamp() <= time() + $leewaySeconds;
    }
}
