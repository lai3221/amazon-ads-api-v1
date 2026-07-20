<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignGoalFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignGoalFilter.
 */
final class CampaignGoalFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignGoalFilter';

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
                'class' => Goal::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 3,
        ],
    ];

    /**
     * Returns Goal Enum: Goal Description --- --- AWARENESS Indicates a goal of driving awareness. CONSIDERATION Indicates a goal of driving consideration. CONVERSIONS Indicates a goal of driving conversions..
     *
     * @return list<Goal>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<Goal>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets Goal Enum: Goal Description --- --- AWARENESS Indicates a goal of driving awareness. CONSIDERATION Indicates a goal of driving consideration. CONVERSIONS Indicates a goal of driving conversions..
     *
     * @param list<Goal>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
