<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdRequest.
 */
final class CreateAdRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdRequest';

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
                'class' => AdCreate::class,
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
     * @return list<AdCreate>|null
     */
    public function getAds(): ?array
    {
        /** @var list<AdCreate>|null $value */
        $value = $this->getAttribute('ads');

        return $value;
    }

    /**
     * Sets the ads value.
     *
     * @param list<AdCreate>|null $value New property value.
     * @return $this
     */
    public function setAds(?array $value): self
    {
        $this->setAttribute('ads', $value);

        return $this;
    }
}
