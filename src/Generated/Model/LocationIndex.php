<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LocationIndex schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LocationIndex.
 */
final class LocationIndex extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LocationIndex';

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
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'indexData' => [
            'type' => 'model',
            'class' => IndexValues::class,
            'required' => true,
            'nullable' => false,
        ],
        'indexId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'indexName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'lastUpdatedDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'enum',
            'class' => IndexStatus::class,
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
     * Returns The date time the location index was created..
     *
     * @return \DateTimeImmutable|null
     */
    public function getCreationDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('creationDateTime');

        return $value;
    }

    /**
     * Sets The date time the location index was created..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setCreationDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('creationDateTime', $value);

        return $this;
    }

    /**
     * Returns the indexData value.
     *
     * @return IndexValues|null
     */
    public function getIndexData(): ?IndexValues
    {
        /** @var IndexValues|null $value */
        $value = $this->getAttribute('indexData');

        return $value;
    }

    /**
     * Sets the indexData value.
     *
     * @param IndexValues|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIndexData(IndexValues|array|null $value): self
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

    /**
     * Returns The date time the location index was last updated successfully..
     *
     * @return \DateTimeImmutable|null
     */
    public function getLastUpdatedDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('lastUpdatedDateTime');

        return $value;
    }

    /**
     * Sets The date time the location index was last updated successfully..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setLastUpdatedDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('lastUpdatedDateTime', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return IndexStatus|null
     */
    public function getStatus(): ?IndexStatus
    {
        /** @var IndexStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param IndexStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(IndexStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
