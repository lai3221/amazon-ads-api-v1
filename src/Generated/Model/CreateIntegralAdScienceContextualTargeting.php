<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateIntegralAdScienceContextualTargeting schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateIntegralAdScienceContextualTargeting.
 */
final class CreateIntegralAdScienceContextualTargeting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateIntegralAdScienceContextualTargeting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'topicalSegments' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 200,
        ],
        'verticalSegments' => [
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
     * Returns The unique identifier of the IAS contextual topical targeting segment..
     *
     * @return list<string>|null
     */
    public function getTopicalSegments(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('topicalSegments');

        return $value;
    }

    /**
     * Sets The unique identifier of the IAS contextual topical targeting segment..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setTopicalSegments(?array $value): self
    {
        $this->setAttribute('topicalSegments', $value);

        return $this;
    }

    /**
     * Returns The unique identifier of the IAS contextual vertical targeting segment..
     *
     * @return list<string>|null
     */
    public function getVerticalSegments(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('verticalSegments');

        return $value;
    }

    /**
     * Sets The unique identifier of the IAS contextual vertical targeting segment..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setVerticalSegments(?array $value): self
    {
        $this->setAttribute('verticalSegments', $value);

        return $this;
    }
}
