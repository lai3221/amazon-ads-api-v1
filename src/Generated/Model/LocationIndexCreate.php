<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LocationIndexCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LocationIndexCreate.
 */
final class LocationIndexCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LocationIndexCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'countryCode' => [
            'type' => 'enum',
            'class' => CountryCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'indexData' => [
            'type' => 'model',
            'class' => CreateIndexValues::class,
            'required' => true,
            'nullable' => false,
        ],
        'indexName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the countryCode value.
     *
     * @return CountryCode|null
     */
    public function getCountryCode(): ?CountryCode
    {
        /** @var CountryCode|null $value */
        $value = $this->getAttribute('countryCode');

        return $value;
    }

    /**
     * Sets the countryCode value.
     *
     * @param CountryCode|string|null $value New property value.
     * @return $this
     */
    public function setCountryCode(CountryCode|string|null $value): self
    {
        $this->setAttribute('countryCode', $value);

        return $this;
    }

    /**
     * Returns the indexData value.
     *
     * @return CreateIndexValues|null
     */
    public function getIndexData(): ?CreateIndexValues
    {
        /** @var CreateIndexValues|null $value */
        $value = $this->getAttribute('indexData');

        return $value;
    }

    /**
     * Sets the indexData value.
     *
     * @param CreateIndexValues|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIndexData(CreateIndexValues|array|null $value): self
    {
        $this->setAttribute('indexData', $value);

        return $this;
    }

    /**
     * Returns The name of the location index..
     *
     * @return string|null
     */
    public function getIndexName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('indexName');

        return $value;
    }

    /**
     * Sets The name of the location index..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setIndexName(?string $value): self
    {
        $this->setAttribute('indexName', $value);

        return $this;
    }
}
