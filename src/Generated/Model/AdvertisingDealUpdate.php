<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertisingDealUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealUpdate.
 */
final class AdvertisingDealUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertisingDealId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'creativeRequirements' => [
            'type' => 'model',
            'class' => UpdateCreativeRequirements::class,
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
            'required' => false,
            'nullable' => false,
        ],
        'endDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'terms' => [
            'type' => 'model',
            'class' => UpdateAdvertisingDealTerms::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

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
     * Returns the creativeRequirements value.
     *
     * @return UpdateCreativeRequirements|null
     */
    public function getCreativeRequirements(): ?UpdateCreativeRequirements
    {
        /** @var UpdateCreativeRequirements|null $value */
        $value = $this->getAttribute('creativeRequirements');

        return $value;
    }

    /**
     * Sets the creativeRequirements value.
     *
     * @param UpdateCreativeRequirements|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCreativeRequirements(UpdateCreativeRequirements|array|null $value): self
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
     * @return UpdateAdvertisingDealTerms|null
     */
    public function getTerms(): ?UpdateAdvertisingDealTerms
    {
        /** @var UpdateAdvertisingDealTerms|null $value */
        $value = $this->getAttribute('terms');

        return $value;
    }

    /**
     * Sets the terms value.
     *
     * @param UpdateAdvertisingDealTerms|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTerms(UpdateAdvertisingDealTerms|array|null $value): self
    {
        $this->setAttribute('terms', $value);

        return $this;
    }
}
