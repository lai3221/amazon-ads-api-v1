<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the MarketplaceTargetFieldOverrides schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema MarketplaceTargetFieldOverrides.
 */
final class MarketplaceTargetFieldOverrides extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'MarketplaceTargetFieldOverrides';

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
                'class' => Tag::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 50,
        ],
        'targetDetails' => [
            'type' => 'model',
            'class' => OverridableTargets::class,
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
     * @return list<Tag>|null
     */
    public function getTags(): ?array
    {
        /** @var list<Tag>|null $value */
        $value = $this->getAttribute('tags');

        return $value;
    }

    /**
     * Sets Open ended labels with a key value pair applied to the target..
     *
     * @param list<Tag>|null $value New property value.
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
     * @return OverridableTargets|null
     */
    public function getTargetDetails(): ?OverridableTargets
    {
        /** @var OverridableTargets|null $value */
        $value = $this->getAttribute('targetDetails');

        return $value;
    }

    /**
     * Sets the targetDetails value.
     *
     * @param OverridableTargets|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setTargetDetails(OverridableTargets|array|null $value): self
    {
        $this->setAttribute('targetDetails', $value);

        return $this;
    }
}
