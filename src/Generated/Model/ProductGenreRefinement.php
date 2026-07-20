<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ProductGenreRefinement schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ProductGenreRefinement.
 */
final class ProductGenreRefinement extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ProductGenreRefinement';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productGenreId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'productGenreIdResolved' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The product genre ID to target..
     *
     * @return string|null
     */
    public function getProductGenreId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productGenreId');

        return $value;
    }

    /**
     * Sets The product genre ID to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductGenreId(?string $value): self
    {
        $this->setAttribute('productGenreId', $value);

        return $this;
    }

    /**
     * Returns The resolved product genre to target..
     *
     * @return string|null
     */
    public function getProductGenreIdResolved(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productGenreIdResolved');

        return $value;
    }

    /**
     * Sets The resolved product genre to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductGenreIdResolved(?string $value): self
    {
        $this->setAttribute('productGenreIdResolved', $value);

        return $this;
    }
}
