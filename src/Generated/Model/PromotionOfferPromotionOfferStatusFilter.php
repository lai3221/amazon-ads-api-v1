<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionOfferPromotionOfferStatusFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionOfferPromotionOfferStatusFilter.
 */
final class PromotionOfferPromotionOfferStatusFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionOfferPromotionOfferStatusFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => PromotionOfferStatus::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 4,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<PromotionOfferStatus>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<PromotionOfferStatus>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<PromotionOfferStatus>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
