<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the IntegralAdScienceContextualAvoidance schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema IntegralAdScienceContextualAvoidance.
 */
final class IntegralAdScienceContextualAvoidance extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'IntegralAdScienceContextualAvoidance';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'avoidanceSegments' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 200,
        ],
    ];

    /**
     * Returns The unique identifier of the IAS contextual avoidance segment..
     *
     * @return list<string>|null
     */
    public function getAvoidanceSegments(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('avoidanceSegments');

        return $value;
    }

    /**
     * Sets The unique identifier of the IAS contextual avoidance segment..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAvoidanceSegments(?array $value): self
    {
        $this->setAttribute('avoidanceSegments', $value);

        return $this;
    }
}
