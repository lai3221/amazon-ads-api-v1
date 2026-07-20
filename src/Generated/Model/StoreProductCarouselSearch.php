<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreProductCarouselSearch schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreProductCarouselSearch.
 */
final class StoreProductCarouselSearch extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductCarouselSearch';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'node' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreProductCarouselSearchType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Node identifier for search..
     *
     * @return string|null
     */
    public function getNode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('node');

        return $value;
    }

    /**
     * Sets Node identifier for search..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNode(?string $value): self
    {
        $this->setAttribute('node', $value);

        return $this;
    }

    /**
     * Returns the type value.
     *
     * @return StoreProductCarouselSearchType|null
     */
    public function getType(): ?StoreProductCarouselSearchType
    {
        /** @var StoreProductCarouselSearchType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreProductCarouselSearchType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreProductCarouselSearchType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
