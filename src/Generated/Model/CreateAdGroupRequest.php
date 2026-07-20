<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdGroupRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdGroupRequest.
 */
final class CreateAdGroupRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdGroupRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroups' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdGroupCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the adGroups value.
     *
     * @return list<AdGroupCreate>|null
     */
    public function getAdGroups(): ?array
    {
        /** @var list<AdGroupCreate>|null $value */
        $value = $this->getAttribute('adGroups');

        return $value;
    }

    /**
     * Sets the adGroups value.
     *
     * @param list<AdGroupCreate>|null $value New property value.
     * @return $this
     */
    public function setAdGroups(?array $value): self
    {
        $this->setAttribute('adGroups', $value);

        return $this;
    }
}
