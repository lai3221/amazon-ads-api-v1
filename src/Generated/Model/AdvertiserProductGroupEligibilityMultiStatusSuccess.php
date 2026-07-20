<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserProductGroupEligibilityMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserProductGroupEligibilityMultiStatusSuccess.
 */
final class AdvertiserProductGroupEligibilityMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserProductGroupEligibilityMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserProductGroupEligibility' => [
            'type' => 'model',
            'class' => AdvertiserProductGroupEligibility::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 4,
        ],
    ];

    /**
     * Returns the advertiserProductGroupEligibility value.
     *
     * @return AdvertiserProductGroupEligibility|null
     */
    public function getAdvertiserProductGroupEligibility(): ?AdvertiserProductGroupEligibility
    {
        /** @var AdvertiserProductGroupEligibility|null $value */
        $value = $this->getAttribute('advertiserProductGroupEligibility');

        return $value;
    }

    /**
     * Sets the advertiserProductGroupEligibility value.
     *
     * @param AdvertiserProductGroupEligibility|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserProductGroupEligibility(AdvertiserProductGroupEligibility|array|null $value): self
    {
        $this->setAttribute('advertiserProductGroupEligibility', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
