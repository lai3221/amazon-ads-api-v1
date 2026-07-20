<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdAssociationRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdAssociationRequest.
 */
final class QueryAdAssociationRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdAssociationRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adAssociationIdFilter' => [
            'type' => 'model',
            'class' => AdAssociationAdAssociationIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adGroupIdFilter' => [
            'type' => 'model',
            'class' => AdAssociationAdGroupIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adIdFilter' => [
            'type' => 'model',
            'class' => AdAssociationAdIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adAssociationIdFilter value.
     *
     * @return AdAssociationAdAssociationIdFilter|null
     */
    public function getAdAssociationIdFilter(): ?AdAssociationAdAssociationIdFilter
    {
        /** @var AdAssociationAdAssociationIdFilter|null $value */
        $value = $this->getAttribute('adAssociationIdFilter');

        return $value;
    }

    /**
     * Sets the adAssociationIdFilter value.
     *
     * @param AdAssociationAdAssociationIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdAssociationIdFilter(AdAssociationAdAssociationIdFilter|array|null $value): self
    {
        $this->setAttribute('adAssociationIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adGroupIdFilter value.
     *
     * @return AdAssociationAdGroupIdFilter|null
     */
    public function getAdGroupIdFilter(): ?AdAssociationAdGroupIdFilter
    {
        /** @var AdAssociationAdGroupIdFilter|null $value */
        $value = $this->getAttribute('adGroupIdFilter');

        return $value;
    }

    /**
     * Sets the adGroupIdFilter value.
     *
     * @param AdAssociationAdGroupIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdGroupIdFilter(AdAssociationAdGroupIdFilter|array|null $value): self
    {
        $this->setAttribute('adGroupIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adIdFilter value.
     *
     * @return AdAssociationAdIdFilter|null
     */
    public function getAdIdFilter(): ?AdAssociationAdIdFilter
    {
        /** @var AdAssociationAdIdFilter|null $value */
        $value = $this->getAttribute('adIdFilter');

        return $value;
    }

    /**
     * Sets the adIdFilter value.
     *
     * @param AdAssociationAdIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdIdFilter(AdAssociationAdIdFilter|array|null $value): self
    {
        $this->setAttribute('adIdFilter', $value);

        return $this;
    }

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
}
