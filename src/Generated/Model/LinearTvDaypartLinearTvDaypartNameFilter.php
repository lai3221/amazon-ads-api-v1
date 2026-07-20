<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvDaypartLinearTvDaypartNameFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypartLinearTvDaypartNameFilter.
 */
final class LinearTvDaypartLinearTvDaypartNameFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypartLinearTvDaypartNameFilter';

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
                'class' => LinearTvDaypartName::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
    ];

    /**
     * Returns Name Enum: Name Description --- --- EARLY FRINGE The time period in the early evening, typically from 4:30 PM to 7:30 PM, leading into prime time. This daypart often features local news, syndicated programming, and game shows. LATE FRINGE The time period fo..
     *
     * @return list<LinearTvDaypartName>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<LinearTvDaypartName>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets Name Enum: Name Description --- --- EARLY FRINGE The time period in the early evening, typically from 4:30 PM to 7:30 PM, leading into prime time. This daypart often features local news, syndicated programming, and game shows. LATE FRINGE The time period fo..
     *
     * @param list<LinearTvDaypartName>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }
}
