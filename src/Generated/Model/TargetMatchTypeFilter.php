<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetMatchTypeFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetMatchTypeFilter.
 */
final class TargetMatchTypeFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetMatchTypeFilter';

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
                'class' => MatchType::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns MatchType Enum: MatchType Description --- --- KEYWORDS RELATED TO GIFTS Search terms related to gifts. KEYWORDS RELATED TO PEER BRANDS PRODUCT CATEGORY Search terms that shoppers often use when searching for and interacting with products from other brands i..
     *
     * @return list<MatchType>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<MatchType>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets MatchType Enum: MatchType Description --- --- KEYWORDS RELATED TO GIFTS Search terms related to gifts. KEYWORDS RELATED TO PEER BRANDS PRODUCT CATEGORY Search terms that shoppers often use when searching for and interacting with products from other brands i..
     *
     * @param list<MatchType>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
