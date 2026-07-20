<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignFee schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignFee.
 */
final class CampaignFee extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignFee';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'feeType' => [
            'type' => 'enum',
            'class' => CampaignFeeType::class,
            'required' => true,
            'nullable' => false,
        ],
        'feeValue' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'feeValueType' => [
            'type' => 'enum',
            'class' => CampaignFeeValueType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the feeType value.
     *
     * @return CampaignFeeType|null
     */
    public function getFeeType(): ?CampaignFeeType
    {
        /** @var CampaignFeeType|null $value */
        $value = $this->getAttribute('feeType');

        return $value;
    }

    /**
     * Sets the feeType value.
     *
     * @param CampaignFeeType|string|null $value New property value.
     * @return $this
     */
    public function setFeeType(CampaignFeeType|string|null $value): self
    {
        $this->setAttribute('feeType', $value);

        return $this;
    }

    /**
     * Returns A service fee that is subtracted from the campaign budget as a percent of budget. This setting can’t be changed after an ad group has been added to a campaign..
     *
     * @return int|float|null
     */
    public function getFeeValue(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('feeValue');

        return $value;
    }

    /**
     * Sets A service fee that is subtracted from the campaign budget as a percent of budget. This setting can’t be changed after an ad group has been added to a campaign..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setFeeValue(int|float|null $value): self
    {
        $this->setAttribute('feeValue', $value);

        return $this;
    }

    /**
     * Returns the feeValueType value.
     *
     * @return CampaignFeeValueType|null
     */
    public function getFeeValueType(): ?CampaignFeeValueType
    {
        /** @var CampaignFeeValueType|null $value */
        $value = $this->getAttribute('feeValueType');

        return $value;
    }

    /**
     * Sets the feeValueType value.
     *
     * @param CampaignFeeValueType|string|null $value New property value.
     * @return $this
     */
    public function setFeeValueType(CampaignFeeValueType|string|null $value): self
    {
        $this->setAttribute('feeValueType', $value);

        return $this;
    }
}
