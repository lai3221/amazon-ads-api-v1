<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStoreEdition schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStoreEdition.
 */
final class BrandStoreEdition extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStoreEdition';

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
        'editionName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'storeEditionSchedule' => [
            'type' => 'model',
            'class' => StoreEditionSchedule::class,
            'required' => false,
            'nullable' => false,
        ],
        'storeId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Unique identifier for the edition within the store..
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
     * Sets Unique identifier for the edition within the store..
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
     * Returns Name of the store edition..
     *
     * @return string|null
     */
    public function getEditionName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('editionName');

        return $value;
    }

    /**
     * Sets Name of the store edition..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEditionName(?string $value): self
    {
        $this->setAttribute('editionName', $value);

        return $this;
    }

    /**
     * Returns the storeEditionSchedule value.
     *
     * @return StoreEditionSchedule|null
     */
    public function getStoreEditionSchedule(): ?StoreEditionSchedule
    {
        /** @var StoreEditionSchedule|null $value */
        $value = $this->getAttribute('storeEditionSchedule');

        return $value;
    }

    /**
     * Sets the storeEditionSchedule value.
     *
     * @param StoreEditionSchedule|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStoreEditionSchedule(StoreEditionSchedule|array|null $value): self
    {
        $this->setAttribute('storeEditionSchedule', $value);

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
