<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LocationIndexUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LocationIndexUpdate.
 */
final class LocationIndexUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LocationIndexUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'indexData' => [
            'type' => 'model',
            'class' => UpdateIndexValues::class,
            'required' => false,
            'nullable' => false,
        ],
        'indexId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the indexData value.
     *
     * @return UpdateIndexValues|null
     */
    public function getIndexData(): ?UpdateIndexValues
    {
        /** @var UpdateIndexValues|null $value */
        $value = $this->getAttribute('indexData');

        return $value;
    }

    /**
     * Sets the indexData value.
     *
     * @param UpdateIndexValues|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIndexData(UpdateIndexValues|array|null $value): self
    {
        $this->setAttribute('indexData', $value);

        return $this;
    }

    /**
     * Returns The identifier of the location index..
     *
     * @return string|null
     */
    public function getIndexId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('indexId');

        return $value;
    }

    /**
     * Sets The identifier of the location index..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setIndexId(?string $value): self
    {
        $this->setAttribute('indexId', $value);

        return $this;
    }
}
