<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateMarketplaceCampaignFieldOverrides schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateMarketplaceCampaignFieldOverrides.
 */
final class CreateMarketplaceCampaignFieldOverrides extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMarketplaceCampaignFieldOverrides';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
        'optimizations' => [
            'type' => 'model',
            'class' => CreateCampaignOptimizations::class,
            'required' => false,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'enum',
            'class' => State::class,
            'required' => false,
            'nullable' => false,
        ],
        'tags' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateTag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
    ];

    /**
     * Returns The end date time for the campaign..
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
     * Sets The end date time for the campaign..
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
     * Returns The name of the campaign..
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
     * Sets The name of the campaign..
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
     * Returns the optimizations value.
     *
     * @return CreateCampaignOptimizations|null
     */
    public function getOptimizations(): ?CreateCampaignOptimizations
    {
        /** @var CreateCampaignOptimizations|null $value */
        $value = $this->getAttribute('optimizations');

        return $value;
    }

    /**
     * Sets the optimizations value.
     *
     * @param CreateCampaignOptimizations|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setOptimizations(CreateCampaignOptimizations|array|null $value): self
    {
        $this->setAttribute('optimizations', $value);

        return $this;
    }

    /**
     * Returns The start date time for the campaign..
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
     * Sets The start date time for the campaign..
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
     * Returns the state value.
     *
     * @return State|null
     */
    public function getState(): ?State
    {
        /** @var State|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param State|string|null $value New property value.
     * @return $this
     */
    public function setState(State|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns Open ended labels with a key value pair applied to the campaign..
     *
     * @return list<CreateTag>|null
     */
    public function getTags(): ?array
    {
        /** @var list<CreateTag>|null $value */
        $value = $this->getAttribute('tags');

        return $value;
    }

    /**
     * Sets Open ended labels with a key value pair applied to the campaign..
     *
     * @param list<CreateTag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }
}
