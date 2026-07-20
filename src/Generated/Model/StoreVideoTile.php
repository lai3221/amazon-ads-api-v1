<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreVideoTile schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreVideoTile.
 */
final class StoreVideoTile extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreVideoTile';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'commonProperties' => [
            'type' => 'model',
            'class' => CommonTileProperties::class,
            'required' => true,
            'nullable' => false,
        ],
        'content' => [
            'type' => 'model',
            'class' => StoreVideoContent::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the commonProperties value.
     *
     * @return CommonTileProperties|null
     */
    public function getCommonProperties(): ?CommonTileProperties
    {
        /** @var CommonTileProperties|null $value */
        $value = $this->getAttribute('commonProperties');

        return $value;
    }

    /**
     * Sets the commonProperties value.
     *
     * @param CommonTileProperties|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCommonProperties(CommonTileProperties|array|null $value): self
    {
        $this->setAttribute('commonProperties', $value);

        return $this;
    }

    /**
     * Returns the content value.
     *
     * @return StoreVideoContent|null
     */
    public function getContent(): ?StoreVideoContent
    {
        /** @var StoreVideoContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreVideoContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreVideoContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }
}
