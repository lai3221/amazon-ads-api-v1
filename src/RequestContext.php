<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1;

/**
 * Defines account-scoped headers for one Amazon Ads API request.
 */
final readonly class RequestContext
{
    /**
     * Creates an immutable request context.
     *
     * @param array<string, string> $extraHeaders Additional non-sensitive request headers.
     */
    public function __construct(
        public ?string $profileId = null,
        public ?string $accountId = null,
        public ?string $managerAccountId = null,
        public ?string $acceptLanguage = null,
        public array $extraHeaders = [],
    ) {
    }

    /**
     * Applies non-null values from an operation context over the defaults.
     */
    public function overlay(?self $override): self
    {
        if ($override === null) {
            return $this;
        }

        return new self(
            profileId: $override->profileId ?? $this->profileId,
            accountId: $override->accountId ?? $this->accountId,
            managerAccountId: $override->managerAccountId ?? $this->managerAccountId,
            acceptLanguage: $override->acceptLanguage ?? $this->acceptLanguage,
            extraHeaders: array_merge($this->extraHeaders, $override->extraHeaders),
        );
    }

    /**
     * Converts the populated context values into Amazon Ads request headers.
     *
     * @return array<string, string>
     */
    public function toHeaders(): array
    {
        $headers = $this->extraHeaders;

        if ($this->profileId !== null) {
            $headers['Amazon-Advertising-API-Scope'] = $this->profileId;
        }

        if ($this->accountId !== null) {
            $headers['Amazon-Ads-AccountId'] = $this->accountId;
        }

        if ($this->managerAccountId !== null) {
            $headers['Amazon-Ads-Manager-AccountId'] = $this->managerAccountId;
        }

        if ($this->acceptLanguage !== null) {
            $headers['Accept-Language'] = $this->acceptLanguage;
        }

        return $headers;
    }
}
