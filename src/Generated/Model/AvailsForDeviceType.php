<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Avails breakdown for a specific device type.
 *
 * @generated from Amazon Ads API v1 schema AvailsForDeviceType.
 */
final class AvailsForDeviceType extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AvailsForDeviceType';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'deviceType' => [
            'type' => 'enum',
            'class' => DeviceType::class,
            'required' => true,
            'nullable' => false,
        ],
        'impressionOpportunities' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
    ];

    /**
     * Returns the deviceType value.
     *
     * @return DeviceType|null
     */
    public function getDeviceType(): ?DeviceType
    {
        /** @var DeviceType|null $value */
        $value = $this->getAttribute('deviceType');

        return $value;
    }

    /**
     * Sets the deviceType value.
     *
     * @param DeviceType|string|null $value New property value.
     * @return $this
     */
    public function setDeviceType(DeviceType|string|null $value): self
    {
        $this->setAttribute('deviceType', $value);

        return $this;
    }

    /**
     * Returns The number of impression opportunities per day per device..
     *
     * @return int|null
     */
    public function getImpressionOpportunities(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('impressionOpportunities');

        return $value;
    }

    /**
     * Sets The number of impression opportunities per day per device..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setImpressionOpportunities(?int $value): self
    {
        $this->setAttribute('impressionOpportunities', $value);

        return $this;
    }
}
