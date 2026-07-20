<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateNewsGuardBrandGuardMisinformationSafety schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateNewsGuardBrandGuardMisinformationSafety.
 */
final class CreateNewsGuardBrandGuardMisinformationSafety extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateNewsGuardBrandGuardMisinformationSafety';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'avoidanceList' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => NewsGuardBrandGuardMisinformationSafetyType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
    ];

    /**
     * Returns The unique identifiers of misinformation targets..
     *
     * @return list<NewsGuardBrandGuardMisinformationSafetyType>|null
     */
    public function getAvoidanceList(): ?array
    {
        /** @var list<NewsGuardBrandGuardMisinformationSafetyType>|null $value */
        $value = $this->getAttribute('avoidanceList');

        return $value;
    }

    /**
     * Sets The unique identifiers of misinformation targets..
     *
     * @param list<NewsGuardBrandGuardMisinformationSafetyType>|null $value New property value.
     * @return $this
     */
    public function setAvoidanceList(?array $value): self
    {
        $this->setAttribute('avoidanceList', $value);

        return $this;
    }
}
