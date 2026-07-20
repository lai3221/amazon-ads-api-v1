<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreatePromotionCodeRedemptionRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreatePromotionCodeRedemptionRequest.
 */
final class CreatePromotionCodeRedemptionRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreatePromotionCodeRedemptionRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'promotionCodeRedemptions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => PromotionCodeRedemptionCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 5,
        ],
    ];

    /**
     * Returns the promotionCodeRedemptions value.
     *
     * @return list<PromotionCodeRedemptionCreate>|null
     */
    public function getPromotionCodeRedemptions(): ?array
    {
        /** @var list<PromotionCodeRedemptionCreate>|null $value */
        $value = $this->getAttribute('promotionCodeRedemptions');

        return $value;
    }

    /**
     * Sets the promotionCodeRedemptions value.
     *
     * @param list<PromotionCodeRedemptionCreate>|null $value New property value.
     * @return $this
     */
    public function setPromotionCodeRedemptions(?array $value): self
    {
        $this->setAttribute('promotionCodeRedemptions', $value);

        return $this;
    }
}
