<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Only applicable for Web supply.
 *
 * @generated from Amazon Ads API v1 schema NewsGuardBrandGuardTrustedNewsTargeting.
 */
final class NewsGuardBrandGuardTrustedNewsTargeting extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'NewsGuardBrandGuardTrustedNewsTargeting';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'targetingList' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => NewsGuardBrandGuardTrustedNewsTargetingType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 15,
        ],
    ];

    /**
     * Returns The unique identifiers of trusted news targets..
     *
     * @return list<NewsGuardBrandGuardTrustedNewsTargetingType>|null
     */
    public function getTargetingList(): ?array
    {
        /** @var list<NewsGuardBrandGuardTrustedNewsTargetingType>|null $value */
        $value = $this->getAttribute('targetingList');

        return $value;
    }

    /**
     * Sets The unique identifiers of trusted news targets..
     *
     * @param list<NewsGuardBrandGuardTrustedNewsTargetingType>|null $value New property value.
     * @return $this
     */
    public function setTargetingList(?array $value): self
    {
        $this->setAttribute('targetingList', $value);

        return $this;
    }
}
