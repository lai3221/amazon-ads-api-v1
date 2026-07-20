<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1;

use Lai3221\AmazonAdsApiV1\Exception\ConfigurationException;

/**
 * Identifies an Amazon Ads API production region.
 */
enum Region: string
{
    case NORTH_AMERICA = 'NA';
    case EUROPE = 'EU';
    case FAR_EAST = 'FE';

    /**
     * Returns the production API endpoint for this region.
     */
    public function endpoint(): string
    {
        return match ($this) {
            self::NORTH_AMERICA => 'https://advertising-api.amazon.com',
            self::EUROPE => 'https://advertising-api-eu.amazon.com',
            self::FAR_EAST => 'https://advertising-api-fe.amazon.com',
        };
    }

    /**
     * Creates a region from a configuration value or throws a clear exception.
     */
    public static function fromConfig(string $value): self
    {
        $region = self::tryFrom(strtoupper(trim($value)));

        if ($region === null) {
            throw new ConfigurationException(
                sprintf('Unsupported Amazon Ads region "%s". Expected NA, EU, or FE.', $value),
            );
        }

        return $region;
    }
}
