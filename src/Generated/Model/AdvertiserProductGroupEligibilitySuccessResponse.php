<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserProductGroupEligibilitySuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserProductGroupEligibilitySuccessResponse.
 */
final class AdvertiserProductGroupEligibilitySuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserProductGroupEligibilitySuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserProductGroupEligibilities' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertiserProductGroupEligibility::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 10,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the advertiserProductGroupEligibilities value.
     *
     * @return list<AdvertiserProductGroupEligibility>|null
     */
    public function getAdvertiserProductGroupEligibilities(): ?array
    {
        /** @var list<AdvertiserProductGroupEligibility>|null $value */
        $value = $this->getAttribute('advertiserProductGroupEligibilities');

        return $value;
    }

    /**
     * Sets the advertiserProductGroupEligibilities value.
     *
     * @param list<AdvertiserProductGroupEligibility>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserProductGroupEligibilities(?array $value): self
    {
        $this->setAttribute('advertiserProductGroupEligibilities', $value);

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
