<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreEditionPublishVersion schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreEditionPublishVersion.
 */
final class BrandStoreEditionPublishVersion extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreEditionPublishVersion';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'editionId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'pages' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => StorePageVersion::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5000,
        ],
        'publishState' => [
            'type' => 'enum',
            'class' => StorePublishState::class,
            'required' => true,
            'nullable' => false,
        ],
        'publishStatus' => [
            'type' => 'enum',
            'class' => StorePublishStatus::class,
            'required' => true,
            'nullable' => false,
        ],
        'storeEditionPublishId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'storeId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Reference to the store edition..
     *
     * @return string|null
     */
    public function getEditionId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('editionId');

        return $value;
    }

    /**
     * Sets Reference to the store edition..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEditionId(?string $value): self
    {
        $this->setAttribute('editionId', $value);

        return $this;
    }

    /**
     * Returns Collection of page versions included in this publish version..
     *
     * @return list<StorePageVersion>|null
     */
    public function getPages(): ?array
    {
        /** @var list<StorePageVersion>|null $value */
        $value = $this->getAttribute('pages');

        return $value;
    }

    /**
     * Sets Collection of page versions included in this publish version..
     *
     * @param list<StorePageVersion>|null $value New property value.
     * @return $this
     */
    public function setPages(?array $value): self
    {
        $this->setAttribute('pages', $value);

        return $this;
    }

    /**
     * Returns the publishState value.
     *
     * @return StorePublishState|null
     */
    public function getPublishState(): ?StorePublishState
    {
        /** @var StorePublishState|null $value */
        $value = $this->getAttribute('publishState');

        return $value;
    }

    /**
     * Sets the publishState value.
     *
     * @param StorePublishState|string|null $value New property value.
     * @return $this
     */
    public function setPublishState(StorePublishState|string|null $value): self
    {
        $this->setAttribute('publishState', $value);

        return $this;
    }

    /**
     * Returns the publishStatus value.
     *
     * @return StorePublishStatus|null
     */
    public function getPublishStatus(): ?StorePublishStatus
    {
        /** @var StorePublishStatus|null $value */
        $value = $this->getAttribute('publishStatus');

        return $value;
    }

    /**
     * Sets the publishStatus value.
     *
     * @param StorePublishStatus|string|null $value New property value.
     * @return $this
     */
    public function setPublishStatus(StorePublishStatus|string|null $value): self
    {
        $this->setAttribute('publishStatus', $value);

        return $this;
    }

    /**
     * Returns Unique identifier for the publish version..
     *
     * @return string|null
     */
    public function getStoreEditionPublishId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('storeEditionPublishId');

        return $value;
    }

    /**
     * Sets Unique identifier for the publish version..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStoreEditionPublishId(?string $value): self
    {
        $this->setAttribute('storeEditionPublishId', $value);

        return $this;
    }

    /**
     * Returns Identifier of the associated store..
     *
     * @return string|null
     */
    public function getStoreId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('storeId');

        return $value;
    }

    /**
     * Sets Identifier of the associated store..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStoreId(?string $value): self
    {
        $this->setAttribute('storeId', $value);

        return $this;
    }
}
