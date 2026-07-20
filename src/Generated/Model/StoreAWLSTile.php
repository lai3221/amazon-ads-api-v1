<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreAWLSTile schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreAWLSTile.
 */
final class StoreAWLSTile extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreAWLSTile';

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
            'class' => StoreAWLSTileContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'externalWidgetId' => [
            'type' => 'string',
            'required' => true,
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
     * @return StoreAWLSTileContent|null
     */
    public function getContent(): ?StoreAWLSTileContent
    {
        /** @var StoreAWLSTileContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param StoreAWLSTileContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(StoreAWLSTileContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }

    /**
     * Returns External widget identifier..
     *
     * @return string|null
     */
    public function getExternalWidgetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('externalWidgetId');

        return $value;
    }

    /**
     * Sets External widget identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setExternalWidgetId(?string $value): self
    {
        $this->setAttribute('externalWidgetId', $value);

        return $this;
    }
}
