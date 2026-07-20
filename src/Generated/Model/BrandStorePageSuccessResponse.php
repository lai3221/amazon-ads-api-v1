<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStorePageSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStorePageSuccessResponse.
 */
final class BrandStorePageSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStorePageSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStorePages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandStorePage::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the brandStorePages value.
     *
     * @return list<BrandStorePage>|null
     */
    public function getBrandStorePages(): ?array
    {
        /** @var list<BrandStorePage>|null $value */
        $value = $this->getAttribute('brandStorePages');

        return $value;
    }

    /**
     * Sets the brandStorePages value.
     *
     * @param list<BrandStorePage>|null $value New property value.
     * @return $this
     */
    public function setBrandStorePages(?array $value): self
    {
        $this->setAttribute('brandStorePages', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }
}
