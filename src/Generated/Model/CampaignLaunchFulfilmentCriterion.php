<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignLaunchFulfilmentCriterion schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignLaunchFulfilmentCriterion.
 */
final class CampaignLaunchFulfilmentCriterion extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignLaunchFulfilmentCriterion';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'endDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'startDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'enum',
            'class' => CriterionStatus::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The deadline by which advertisers must create the corresponding campaign in order to qualify for the promotion offer..
     *
     * @return \DateTimeImmutable|null
     */
    public function getEndDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('endDateTime');

        return $value;
    }

    /**
     * Sets The deadline by which advertisers must create the corresponding campaign in order to qualify for the promotion offer..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setEndDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('endDateTime', $value);

        return $this;
    }

    /**
     * Returns The date from which advertisers must create the corresponding campaign in order to qualify for the promotion offer..
     *
     * @return \DateTimeImmutable|null
     */
    public function getStartDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('startDateTime');

        return $value;
    }

    /**
     * Sets The date from which advertisers must create the corresponding campaign in order to qualify for the promotion offer..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setStartDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('startDateTime', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return CriterionStatus|null
     */
    public function getStatus(): ?CriterionStatus
    {
        /** @var CriterionStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param CriterionStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(CriterionStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
