<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the BrandStorePageUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema BrandStorePageUpdate.
 */
final class BrandStorePageUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'BrandStorePageUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'content' => [
            'type' => 'model',
            'class' => UpdateStorePageContent::class,
            'required' => false,
            'nullable' => false,
        ],
        'editionId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'pageId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'storeEditionPublishId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'storeId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the content value.
     *
     * @return UpdateStorePageContent|null
     */
    public function getContent(): ?UpdateStorePageContent
    {
        /** @var UpdateStorePageContent|null $value */
        $value = $this->getAttribute('content');

        return $value;
    }

    /**
     * Sets the content value.
     *
     * @param UpdateStorePageContent|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContent(UpdateStorePageContent|array|null $value): self
    {
        $this->setAttribute('content', $value);

        return $this;
    }

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
     * Returns Unique identifier for the store page..
     *
     * @return string|null
     */
    public function getPageId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('pageId');

        return $value;
    }

    /**
     * Sets Unique identifier for the store page..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPageId(?string $value): self
    {
        $this->setAttribute('pageId', $value);

        return $this;
    }

    /**
     * Returns Optional identifier for the published version of this page..
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
     * Sets Optional identifier for the published version of this page..
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
