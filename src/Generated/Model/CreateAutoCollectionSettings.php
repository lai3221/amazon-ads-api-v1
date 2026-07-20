<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Settings for automatically generated collections.
 *
 * @generated from Amazon Ads API v1 schema CreateAutoCollectionSettings.
 */
final class CreateAutoCollectionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAutoCollectionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productExclusions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateAdvertisedProducts::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'sharedSettings' => [
            'type' => 'model',
            'class' => CreateSharedCollectionSettings::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Products to exclude from auto collection..
     *
     * @return list<CreateAdvertisedProducts>|null
     */
    public function getProductExclusions(): ?array
    {
        /** @var list<CreateAdvertisedProducts>|null $value */
        $value = $this->getAttribute('productExclusions');

        return $value;
    }

    /**
     * Sets Products to exclude from auto collection..
     *
     * @param list<CreateAdvertisedProducts>|null $value New property value.
     * @return $this
     */
    public function setProductExclusions(?array $value): self
    {
        $this->setAttribute('productExclusions', $value);

        return $this;
    }

    /**
     * Returns the sharedSettings value.
     *
     * @return CreateSharedCollectionSettings|null
     */
    public function getSharedSettings(): ?CreateSharedCollectionSettings
    {
        /** @var CreateSharedCollectionSettings|null $value */
        $value = $this->getAttribute('sharedSettings');

        return $value;
    }

    /**
     * Sets the sharedSettings value.
     *
     * @param CreateSharedCollectionSettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSharedSettings(CreateSharedCollectionSettings|array|null $value): self
    {
        $this->setAttribute('sharedSettings', $value);

        return $this;
    }
}
