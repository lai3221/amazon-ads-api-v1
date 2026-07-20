<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDeal schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDeal.
 */
final class AdvertisingDeal extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDeal';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProduct' => [
            'type' => 'enum',
            'class' => DSPAdProduct::class,
            'required' => true,
            'nullable' => false,
        ],
        'advertisingDealId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'creativeRequirements' => [
            'type' => 'model',
            'class' => CreativeRequirements::class,
            'required' => false,
            'nullable' => false,
        ],
        'customPublisherDescription' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'dealType' => [
            'type' => 'enum',
            'class' => AdvertisingDealType::class,
            'required' => true,
            'nullable' => false,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'exchangeDealId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'exchangeId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'model',
            'class' => AdvertisingDealStatus::class,
            'required' => true,
            'nullable' => false,
        ],
        'terms' => [
            'type' => 'model',
            'class' => AdvertisingDealTerms::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adProduct value.
     *
     * @return DSPAdProduct|null
     */
    public function getAdProduct(): ?DSPAdProduct
    {
        /** @var DSPAdProduct|null $value */
        $value = $this->getAttribute('adProduct');

        return $value;
    }

    /**
     * Sets the adProduct value.
     *
     * @param DSPAdProduct|string|null $value New property value.
     * @return $this
     */
    public function setAdProduct(DSPAdProduct|string|null $value): self
    {
        $this->setAttribute('adProduct', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for a deal..
     *
     * @return string|null
     */
    public function getAdvertisingDealId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertisingDealId');

        return $value;
    }

    /**
     * Sets A unique identifier for a deal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertisingDealId(?string $value): self
    {
        $this->setAttribute('advertisingDealId', $value);

        return $this;
    }

    /**
     * Returns The date time that the deal was created..
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
     * Sets The date time that the deal was created..
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
     * Returns the creativeRequirements value.
     *
     * @return CreativeRequirements|null
     */
    public function getCreativeRequirements(): ?CreativeRequirements
    {
        /** @var CreativeRequirements|null $value */
        $value = $this->getAttribute('creativeRequirements');

        return $value;
    }

    /**
     * Sets the creativeRequirements value.
     *
     * @param CreativeRequirements|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreativeRequirements(CreativeRequirements|array|null $value): self
    {
        $this->setAttribute('creativeRequirements', $value);

        return $this;
    }

    /**
     * Returns Custom description of the publisher providing inventory for this deal..
     *
     * @return string|null
     */
    public function getCustomPublisherDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('customPublisherDescription');

        return $value;
    }

    /**
     * Sets Custom description of the publisher providing inventory for this deal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCustomPublisherDescription(?string $value): self
    {
        $this->setAttribute('customPublisherDescription', $value);

        return $this;
    }

    /**
     * Returns the dealType value.
     *
     * @return AdvertisingDealType|null
     */
    public function getDealType(): ?AdvertisingDealType
    {
        /** @var AdvertisingDealType|null $value */
        $value = $this->getAttribute('dealType');

        return $value;
    }

    /**
     * Sets the dealType value.
     *
     * @param AdvertisingDealType|string|null $value New property value.
     * @return $this
     */
    public function setDealType(AdvertisingDealType|string|null $value): self
    {
        $this->setAttribute('dealType', $value);

        return $this;
    }

    /**
     * Returns The end date time for the deal..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endDateTime');

        return $value;
    }

    /**
     * Sets The end date time for the deal..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endDateTime', $value);

        return $this;
    }

    /**
     * Returns A unique external identifier provided by Exchange/SSP for a Deal..
     *
     * @return string|null
     */
    public function getExchangeDealId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('exchangeDealId');

        return $value;
    }

    /**
     * Sets A unique external identifier provided by Exchange/SSP for a Deal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setExchangeDealId(?string $value): self
    {
        $this->setAttribute('exchangeDealId', $value);

        return $this;
    }

    /**
     * Returns The exchange/SSP that provides the deal..
     *
     * @return string|null
     */
    public function getExchangeId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('exchangeId');

        return $value;
    }

    /**
     * Sets The exchange/SSP that provides the deal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setExchangeId(?string $value): self
    {
        $this->setAttribute('exchangeId', $value);

        return $this;
    }

    /**
     * Returns The name of the deal..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets The name of the deal..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns The start date time for the deal..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startDateTime');

        return $value;
    }

    /**
     * Sets The start date time for the deal..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return AdvertisingDealStatus|null
     */
    public function getStatus(): ?AdvertisingDealStatus
    {
        /** @var AdvertisingDealStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param AdvertisingDealStatus|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStatus(AdvertisingDealStatus|array|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }

    /**
     * Returns the terms value.
     *
     * @return AdvertisingDealTerms|null
     */
    public function getTerms(): ?AdvertisingDealTerms
    {
        /** @var AdvertisingDealTerms|null $value */
        $value = $this->getAttribute('terms');

        return $value;
    }

    /**
     * Sets the terms value.
     *
     * @param AdvertisingDealTerms|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTerms(AdvertisingDealTerms|array|null $value): self
    {
        $this->setAttribute('terms', $value);

        return $this;
    }
}
