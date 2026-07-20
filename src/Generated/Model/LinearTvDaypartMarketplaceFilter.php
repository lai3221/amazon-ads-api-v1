<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvDaypartMarketplaceFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypartMarketplaceFilter.
 */
final class LinearTvDaypartMarketplaceFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypartMarketplaceFilter';

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
                'class' => Marketplace::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<Marketplace>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<Marketplace>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<Marketplace>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
