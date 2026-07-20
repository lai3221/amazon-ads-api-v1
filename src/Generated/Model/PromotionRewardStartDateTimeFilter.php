<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the PromotionRewardStartDateTimeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema PromotionRewardStartDateTimeFilter.
 */
final class PromotionRewardStartDateTimeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromotionRewardStartDateTimeFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'datetime',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<\DateTimeImmutable>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<\DateTimeImmutable>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<\DateTimeImmutable>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
