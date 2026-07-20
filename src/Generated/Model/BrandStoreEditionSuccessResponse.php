<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreEditionSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreEditionSuccessResponse.
 */
final class BrandStoreEditionSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreEditionSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'brandStoreEditions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => BrandStoreEdition::class,
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
     * Returns the brandStoreEditions value.
     *
     * @return list<BrandStoreEdition>|null
     */
    public function getBrandStoreEditions(): ?array
    {
        /** @var list<BrandStoreEdition>|null $value */
        $value = $this->getAttribute('brandStoreEditions');

        return $value;
    }

    /**
     * Sets the brandStoreEditions value.
     *
     * @param list<BrandStoreEdition>|null $value New property value.
     * @return $this
     */
    public function setBrandStoreEditions(?array $value): self
    {
        $this->setAttribute('brandStoreEditions', $value);

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
