<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateFee schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateFee.
 */
final class CreateFee extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateFee';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'addToBudgetSpentAmount' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'feeType' => [
            'type' => 'enum',
            'class' => FeeType::class,
            'required' => true,
            'nullable' => false,
        ],
        'feeValue' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'thirdPartyProvider' => [
            'type' => 'enum',
            'class' => FeesThirdPartyProvider::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Applies only to THIRD PARTY APPLIED FEE. When set to true, third-party applied fees are are added on top of the total ad group budget spent amount in reports..
     *
     * @return bool|null
     */
    public function getAddToBudgetSpentAmount(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('addToBudgetSpentAmount');

        return $value;
    }

    /**
     * Sets Applies only to THIRD PARTY APPLIED FEE. When set to true, third-party applied fees are are added on top of the total ad group budget spent amount in reports..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setAddToBudgetSpentAmount(?bool $value): self
    {
        $this->setAttribute('addToBudgetSpentAmount', $value);

        return $this;
    }

    /**
     * Returns the feeType value.
     *
     * @return FeeType|null
     */
    public function getFeeType(): ?FeeType
    {
        /** @var FeeType|null $value */
        $value = $this->getAttribute('feeType');

        return $value;
    }

    /**
     * Sets the feeType value.
     *
     * @param FeeType|string|null $value New property value.
     * @return $this
     */
    public function setFeeType(FeeType|string|null $value): self
    {
        $this->setAttribute('feeType', $value);

        return $this;
    }

    /**
     * Returns The fee amount expressed as the feeValueType. AMAZON AUDIENCE FEE AND THIRD PARTY AUDIENCE FEE is in the currency of the marketplace. All other CPM based fees are in the currency of the advertiser. For percentages, 100 represents 100%..
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
     * Sets The fee amount expressed as the feeValueType. AMAZON AUDIENCE FEE AND THIRD PARTY AUDIENCE FEE is in the currency of the marketplace. All other CPM based fees are in the currency of the advertiser. For percentages, 100 represents 100%..
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
     * Returns the thirdPartyProvider value.
     *
     * @return FeesThirdPartyProvider|null
     */
    public function getThirdPartyProvider(): ?FeesThirdPartyProvider
    {
        /** @var FeesThirdPartyProvider|null $value */
        $value = $this->getAttribute('thirdPartyProvider');

        return $value;
    }

    /**
     * Sets the thirdPartyProvider value.
     *
     * @param FeesThirdPartyProvider|string|null $value New property value.
     * @return $this
     */
    public function setThirdPartyProvider(FeesThirdPartyProvider|string|null $value): self
    {
        $this->setAttribute('thirdPartyProvider', $value);

        return $this;
    }
}
