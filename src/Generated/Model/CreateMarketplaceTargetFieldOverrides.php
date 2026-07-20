<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateMarketplaceTargetFieldOverrides schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateMarketplaceTargetFieldOverrides.
 */
final class CreateMarketplaceTargetFieldOverrides extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMarketplaceTargetFieldOverrides';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
        'targetDetails' => [
            'type' => 'model',
            'class' => CreateOverridableTargets::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

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
     * Returns Open ended labels with a key value pair applied to the target..
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
     * Sets Open ended labels with a key value pair applied to the target..
     *
     * @param list<CreateTag>|null $value New property value.
     * @return $this
     */
    public function setTags(?array $value): self
    {
        $this->setAttribute('tags', $value);

        return $this;
    }

    /**
     * Returns the targetDetails value.
     *
     * @return CreateOverridableTargets|null
     */
    public function getTargetDetails(): ?CreateOverridableTargets
    {
        /** @var CreateOverridableTargets|null $value */
        $value = $this->getAttribute('targetDetails');

        return $value;
    }

    /**
     * Sets the targetDetails value.
     *
     * @param CreateOverridableTargets|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetDetails(CreateOverridableTargets|array|null $value): self
    {
        $this->setAttribute('targetDetails', $value);

        return $this;
    }
}
