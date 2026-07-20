<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Auth;

/**
 * Contains tokens returned by a Login with Amazon authorization-code exchange.
 */
final readonly class LoginWithAmazonTokenSet
{
    /**
     * Creates an immutable Login with Amazon token set.
     */
    public function __construct(
        public string $accessToken,
        public ?string $refreshToken,
        public int $expiresIn,
        public string $tokenType,
    ) {
    }
}
