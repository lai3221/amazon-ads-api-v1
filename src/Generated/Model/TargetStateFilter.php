<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the TargetStateFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema TargetStateFilter.
 */
final class TargetStateFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'TargetStateFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => State::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 3,
        ],
    ];

    /**
     * Returns State Enum: State Description --- --- ENABLED The object is set active by user and eligible for delivery. PAUSED The object is stopped by user and not eligible for delivery. ARCHIVED The object is permanently stopped and cannot be reactivated. Terminal end..
     *
     * @return list<State>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<State>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets State Enum: State Description --- --- ENABLED The object is set active by user and eligible for delivery. PAUSED The object is stopped by user and not eligible for delivery. ARCHIVED The object is permanently stopped and cannot be reactivated. Terminal end..
     *
     * @param list<State>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
