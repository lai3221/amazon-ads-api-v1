<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreCustomCodeTile schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreCustomCodeTile.
 */
final class CreateStoreCustomCodeTile extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreCustomCodeTile';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'commonProperties' => [
            'type' => 'model',
            'class' => CreateCommonTileProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => CreateStoreCustomCodeContent::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the commonProperties value.
     *
     * @return CreateCommonTileProperties|null
     */
    public function getCommonProperties(): ?CreateCommonTileProperties
    {
        /** @var CreateCommonTileProperties|null $value */
        $value = $this->getAttribute('commonProperties');

        return $value;
    }

    /**
     * Sets the commonProperties value.
     *
     * @param CreateCommonTileProperties|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCommonProperties(CreateCommonTileProperties|array|null $value): self
    {
        $this->setAttribute('commonProperties', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return CreateStoreCustomCodeContent|null
     */
    public function getContent(): ?CreateStoreCustomCodeContent
    {
        /** @var CreateStoreCustomCodeContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param CreateStoreCustomCodeContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(CreateStoreCustomCodeContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }
}
