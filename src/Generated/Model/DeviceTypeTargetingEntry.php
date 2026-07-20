<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A device type targeting entry. All entries must share the same negative value.
 *
 * @generated from Amazon Ads API v1 schema DeviceTypeTargetingEntry.
 */
final class DeviceTypeTargetingEntry extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeviceTypeTargetingEntry';

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
        'groupId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'negative' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
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
     * Returns Identifies the group this entry belongs to. Entries sharing the same groupId are OR'd together..
     *
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('groupId');

        return $value;
    }

    /**
     * Sets Identifies the group this entry belongs to. Entries sharing the same groupId are OR'd together..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGroupId(?string $value): self
    {
        $this->setAttribute('groupId', $value);

        return $this;
    }

    /**
     * Returns When true, this entry is a negative (exclusion) target. Defaults to false when omitted..
     *
     * @return bool|null
     */
    public function getNegative(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('negative');

        return $value;
    }

    /**
     * Sets When true, this entry is a negative (exclusion) target. Defaults to false when omitted..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setNegative(?bool $value): self
    {
        $this->setAttribute('negative', $value);

        return $this;
    }
}
