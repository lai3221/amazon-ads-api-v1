<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdvertiserProductGroupEligibilityRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdvertiserProductGroupEligibilityRequest.
 */
final class CreateAdvertiserProductGroupEligibilityRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdvertiserProductGroupEligibilityRequest';

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
                'class' => AdvertiserProductGroupEligibilityCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the advertiserProductGroupEligibilities value.
     *
     * @return list<AdvertiserProductGroupEligibilityCreate>|null
     */
    public function getAdvertiserProductGroupEligibilities(): ?array
    {
        /** @var list<AdvertiserProductGroupEligibilityCreate>|null $value */
        $value = $this->getAttribute('advertiserProductGroupEligibilities');

        return $value;
    }

    /**
     * Sets the advertiserProductGroupEligibilities value.
     *
     * @param list<AdvertiserProductGroupEligibilityCreate>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserProductGroupEligibilities(?array $value): self
    {
        $this->setAttribute('advertiserProductGroupEligibilities', $value);

        return $this;
    }
}
