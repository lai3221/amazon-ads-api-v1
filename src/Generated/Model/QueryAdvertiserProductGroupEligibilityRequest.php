<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdvertiserProductGroupEligibilityRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdvertiserProductGroupEligibilityRequest.
 */
final class QueryAdvertiserProductGroupEligibilityRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdvertiserProductGroupEligibilityRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 10,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'statusFilter' => [
            'type' => 'model',
            'class' => AdvertiserProductGroupEligibilityAdvertiserProductGroupEligibilityStatusFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

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

    /**
     * Returns the statusFilter value.
     *
     * @return AdvertiserProductGroupEligibilityAdvertiserProductGroupEligibilityStatusFilter|null
     */
    public function getStatusFilter(): ?AdvertiserProductGroupEligibilityAdvertiserProductGroupEligibilityStatusFilter
    {
        /** @var AdvertiserProductGroupEligibilityAdvertiserProductGroupEligibilityStatusFilter|null $value */
        $value = $this->getAttribute('statusFilter');

        return $value;
    }

    /**
     * Sets the statusFilter value.
     *
     * @param AdvertiserProductGroupEligibilityAdvertiserProductGroupEligibilityStatusFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStatusFilter(AdvertiserProductGroupEligibilityAdvertiserProductGroupEligibilityStatusFilter|array|null $value): self
    {
        $this->setAttribute('statusFilter', $value);

        return $this;
    }
}
