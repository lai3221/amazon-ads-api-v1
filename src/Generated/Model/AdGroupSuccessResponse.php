<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroupSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroupSuccessResponse.
 */
final class AdGroupSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupSuccessResponse';

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
                'class' => AdGroup::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adGroups value.
     *
     * @return list<AdGroup>|null
     */
    public function getAdGroups(): ?array
    {
        /** @var list<AdGroup>|null $value */
        $value = $this->getAttribute('adGroups');

        return $value;
    }

    /**
     * Sets the adGroups value.
     *
     * @param list<AdGroup>|null $value New property value.
     * @return $this
     */
    public function setAdGroups(?array $value): self
    {
        $this->setAttribute('adGroups', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }
}
