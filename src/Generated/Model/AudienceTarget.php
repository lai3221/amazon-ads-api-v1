<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on a specified audience ID.
 *
 * @generated from Amazon Ads API v1 schema AudienceTarget.
 */
final class AudienceTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AudienceTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'acrossGroupOperator' => [
            'type' => 'enum',
            'class' => AcrossGroupOperator::class,
            'required' => false,
            'nullable' => false,
        ],
        'audienceId' => [
            'type' => 'model',
            'class' => MarketplaceStringValue::class,
            'required' => true,
            'nullable' => false,
        ],
        'groupId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'inGroupOperator' => [
            'type' => 'enum',
            'class' => InGroupOperator::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the acrossGroupOperator value.
     *
     * @return AcrossGroupOperator|null
     */
    public function getAcrossGroupOperator(): ?AcrossGroupOperator
    {
        /** @var AcrossGroupOperator|null $value */
        $value = $this->getAttribute('acrossGroupOperator');

        return $value;
    }

    /**
     * Sets the acrossGroupOperator value.
     *
     * @param AcrossGroupOperator|string|null $value New property value.
     * @return $this
     */
    public function setAcrossGroupOperator(AcrossGroupOperator|string|null $value): self
    {
        $this->setAttribute('acrossGroupOperator', $value);

        return $this;
    }

    /**
     * Returns the audienceId value.
     *
     * @return MarketplaceStringValue|null
     */
    public function getAudienceId(): ?MarketplaceStringValue
    {
        /** @var MarketplaceStringValue|null $value */
        $value = $this->getAttribute('audienceId');

        return $value;
    }

    /**
     * Sets the audienceId value.
     *
     * @param MarketplaceStringValue|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAudienceId(MarketplaceStringValue|array|null $value): self
    {
        $this->setAttribute('audienceId', $value);

        return $this;
    }

    /**
     * Returns The string identifying a group of audiences. Only numbers formatted as strings are accepted (e.g. '1'). To add audiences to a new group, choose any string not currently being used on this ad group. To add audiences to an existing group, use the existing gro..
     *
     * @return string|null
     */
    public function getGroupId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('groupId');

        return $value;
    }

    /**
     * Sets The string identifying a group of audiences. Only numbers formatted as strings are accepted (e.g. '1'). To add audiences to a new group, choose any string not currently being used on this ad group. To add audiences to an existing group, use the existing gro..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setGroupId(?string $value): self
    {
        $this->setAttribute('groupId', $value);

        return $this;
    }

    /**
     * Returns the inGroupOperator value.
     *
     * @return InGroupOperator|null
     */
    public function getInGroupOperator(): ?InGroupOperator
    {
        /** @var InGroupOperator|null $value */
        $value = $this->getAttribute('inGroupOperator');

        return $value;
    }

    /**
     * Sets the inGroupOperator value.
     *
     * @param InGroupOperator|string|null $value New property value.
     * @return $this
     */
    public function setInGroupOperator(InGroupOperator|string|null $value): self
    {
        $this->setAttribute('inGroupOperator', $value);

        return $this;
    }
}
