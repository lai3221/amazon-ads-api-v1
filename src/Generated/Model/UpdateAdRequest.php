<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAdRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAdRequest.
 */
final class UpdateAdRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAdRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ads' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdUpdate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the ads value.
     *
     * @return list<AdUpdate>|null
     */
    public function getAds(): ?array
    {
        /** @var list<AdUpdate>|null $value */
        $value = $this->getAttribute('ads');

        return $value;
    }

    /**
     * Sets the ads value.
     *
     * @param list<AdUpdate>|null $value New property value.
     * @return $this
     */
    public function setAds(?array $value): self
    {
        $this->setAttribute('ads', $value);

        return $this;
    }
}
