<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserProductGroupEligibility schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserProductGroupEligibility.
 */
final class AdvertiserProductGroupEligibility extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserProductGroupEligibility';

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
        'advertiserAccountId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'advertiserProductGroupEligibilityId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'rejectedReasonDetail' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => RejectedReasonDetail::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 2,
        ],
        'status' => [
            'type' => 'enum',
            'class' => AdvertiserProductGroupEligibilityStatus::class,
            'required' => true,
            'nullable' => false,
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
     * Returns The identifier of the advertiser account in the eligibility request..
     *
     * @return string|null
     */
    public function getAdvertiserAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertiserAccountId');

        return $value;
    }

    /**
     * Sets The identifier of the advertiser account in the eligibility request..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccountId(?string $value): self
    {
        $this->setAttribute('advertiserAccountId', $value);

        return $this;
    }

    /**
     * Returns The unique identifer for the advertiser product group eligibility request..
     *
     * @return string|null
     */
    public function getAdvertiserProductGroupEligibilityId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('advertiserProductGroupEligibilityId');

        return $value;
    }

    /**
     * Sets The unique identifer for the advertiser product group eligibility request..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdvertiserProductGroupEligibilityId(?string $value): self
    {
        $this->setAttribute('advertiserProductGroupEligibilityId', $value);

        return $this;
    }

    /**
     * Returns Timestamp of when the eligibility request resource was created..
     *
     * @return \DateTimeImmutable|null
     */
    public function getCreationDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('creationDateTime');

        return $value;
    }

    /**
     * Sets Timestamp of when the eligibility request resource was created..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setCreationDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('creationDateTime', $value);

        return $this;
    }

    /**
     * Returns The details explaining the rejected eligibility request status..
     *
     * @return list<RejectedReasonDetail>|null
     */
    public function getRejectedReasonDetail(): ?array
    {
        /** @var list<RejectedReasonDetail>|null $value */
        $value = $this->getAttribute('rejectedReasonDetail');

        return $value;
    }

    /**
     * Sets The details explaining the rejected eligibility request status..
     *
     * @param list<RejectedReasonDetail>|null $value New property value.
     * @return $this
     */
    public function setRejectedReasonDetail(?array $value): self
    {
        $this->setAttribute('rejectedReasonDetail', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return AdvertiserProductGroupEligibilityStatus|null
     */
    public function getStatus(): ?AdvertiserProductGroupEligibilityStatus
    {
        /** @var AdvertiserProductGroupEligibilityStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param AdvertiserProductGroupEligibilityStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(AdvertiserProductGroupEligibilityStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
