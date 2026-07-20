<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserProductGroupEligibilityCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserProductGroupEligibilityCreate.
 */
final class AdvertiserProductGroupEligibilityCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserProductGroupEligibilityCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adProductGroup' => [
            'type' => 'enum',
            'class' => AdProductGroup::class,
            'required' => true,
            'nullable' => false,
        ],
        'rejectedReasonDetail' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateRejectedReasonDetail::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
    ];

    /**
     * Returns the adProductGroup value.
     *
     * @return AdProductGroup|null
     */
    public function getAdProductGroup(): ?AdProductGroup
    {
        /** @var AdProductGroup|null $value */
        $value = $this->getAttribute('adProductGroup');

        return $value;
    }

    /**
     * Sets the adProductGroup value.
     *
     * @param AdProductGroup|string|null $value New property value.
     * @return $this
     */
    public function setAdProductGroup(AdProductGroup|string|null $value): self
    {
        $this->setAttribute('adProductGroup', $value);

        return $this;
    }

    /**
     * Returns The details explaining the rejected eligibility request status..
     *
     * @return list<CreateRejectedReasonDetail>|null
     */
    public function getRejectedReasonDetail(): ?array
    {
        /** @var list<CreateRejectedReasonDetail>|null $value */
        $value = $this->getAttribute('rejectedReasonDetail');

        return $value;
    }

    /**
     * Sets The details explaining the rejected eligibility request status..
     *
     * @param list<CreateRejectedReasonDetail>|null $value New property value.
     * @return $this
     */
    public function setRejectedReasonDetail(?array $value): self
    {
        $this->setAttribute('rejectedReasonDetail', $value);

        return $this;
    }
}
