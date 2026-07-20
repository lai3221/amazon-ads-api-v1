<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionCodeRedemptionMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionCodeRedemptionMultiStatusSuccess.
 */
final class PromotionCodeRedemptionMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionCodeRedemptionMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 4,
        ],
        'promotionCodeRedemption' => [
            'type' => 'model',
            'class' => PromotionCodeRedemption::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }

    /**
     * Returns the promotionCodeRedemption value.
     *
     * @return PromotionCodeRedemption|null
     */
    public function getPromotionCodeRedemption(): ?PromotionCodeRedemption
    {
        /** @var PromotionCodeRedemption|null $value */
        $value = $this->getAttribute('promotionCodeRedemption');

        return $value;
    }

    /**
     * Sets the promotionCodeRedemption value.
     *
     * @param PromotionCodeRedemption|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setPromotionCodeRedemption(PromotionCodeRedemption|array|null $value): self
    {
        $this->setAttribute('promotionCodeRedemption', $value);

        return $this;
    }
}
