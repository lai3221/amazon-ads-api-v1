<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1;

use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;

/**
 * Configures regional routing, default headers, timeouts, and retry behavior.
 */
final readonly class SdkConfiguration
{
    /**
     * Creates an immutable SDK configuration.
     */
    public function __construct(
        public Region $region = Region::NORTH_AMERICA,
        public RequestContext $defaultContext = new RequestContext(),
        public float $timeout = 30.0,
        public float $connectTimeout = 10.0,
        public int $maxRetries = 3,
        public int $retryBaseDelayMilliseconds = 250,
        public string $userAgent = 'lai3221-amazon-ads-api-v1/1.0',
    ) {
        if ($this->timeout <= 0 || $this->connectTimeout <= 0) {
            throw new ConfigurationException('Amazon Ads HTTP timeouts must be greater than zero.');
        }

        if ($this->maxRetries < 0 || $this->retryBaseDelayMilliseconds < 0) {
            throw new ConfigurationException('Amazon Ads retry settings must not be negative.');
        }
    }
}
