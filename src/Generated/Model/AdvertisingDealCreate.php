<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealCreate.
 */
final class AdvertisingDealCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealCreate';

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
        'creativeRequirements' => [
            'type' => 'model',
            'class' => CreateCreativeRequirements::class,
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
        'terms' => [
            'type' => 'model',
            'class' => CreateAdvertisingDealTerms::class,
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
     * Returns the creativeRequirements value.
     *
     * @return CreateCreativeRequirements|null
     */
    public function getCreativeRequirements(): ?CreateCreativeRequirements
    {
        /** @var CreateCreativeRequirements|null $value */
        $value = $this->getAttribute('creativeRequirements');

        return $value;
    }

    /**
     * Sets the creativeRequirements value.
     *
     * @param CreateCreativeRequirements|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreativeRequirements(CreateCreativeRequirements|array|null $value): self
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
     * Returns the terms value.
     *
     * @return CreateAdvertisingDealTerms|null
     */
    public function getTerms(): ?CreateAdvertisingDealTerms
    {
        /** @var CreateAdvertisingDealTerms|null $value */
        $value = $this->getAttribute('terms');

        return $value;
    }

    /**
     * Sets the terms value.
     *
     * @param CreateAdvertisingDealTerms|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTerms(CreateAdvertisingDealTerms|array|null $value): self
    {
        $this->setAttribute('terms', $value);

        return $this;
    }
}
