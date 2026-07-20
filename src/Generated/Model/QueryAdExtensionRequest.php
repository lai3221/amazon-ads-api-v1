<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdExtensionRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdExtensionRequest.
 */
final class QueryAdExtensionRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdExtensionRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adExtensionIdFilter' => [
            'type' => 'model',
            'class' => AdExtensionAdExtensionIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adExtensionStatusFilter' => [
            'type' => 'model',
            'class' => AdExtensionAdExtensionStatusFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adExtensionTypeFilter' => [
            'type' => 'model',
            'class' => AdExtensionAdExtensionTypeFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adGroupIdFilter' => [
            'type' => 'model',
            'class' => AdExtensionAdGroupIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adIdFilter' => [
            'type' => 'model',
            'class' => AdExtensionAdIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'adProductFilter' => [
            'type' => 'model',
            'class' => AdExtensionAdProductFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 1,
            'maximum' => 1000,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'stateFilter' => [
            'type' => 'model',
            'class' => AdExtensionStateFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adExtensionIdFilter value.
     *
     * @return AdExtensionAdExtensionIdFilter|null
     */
    public function getAdExtensionIdFilter(): ?AdExtensionAdExtensionIdFilter
    {
        /** @var AdExtensionAdExtensionIdFilter|null $value */
        $value = $this->getAttribute('adExtensionIdFilter');

        return $value;
    }

    /**
     * Sets the adExtensionIdFilter value.
     *
     * @param AdExtensionAdExtensionIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdExtensionIdFilter(AdExtensionAdExtensionIdFilter|array|null $value): self
    {
        $this->setAttribute('adExtensionIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adExtensionStatusFilter value.
     *
     * @return AdExtensionAdExtensionStatusFilter|null
     */
    public function getAdExtensionStatusFilter(): ?AdExtensionAdExtensionStatusFilter
    {
        /** @var AdExtensionAdExtensionStatusFilter|null $value */
        $value = $this->getAttribute('adExtensionStatusFilter');

        return $value;
    }

    /**
     * Sets the adExtensionStatusFilter value.
     *
     * @param AdExtensionAdExtensionStatusFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdExtensionStatusFilter(AdExtensionAdExtensionStatusFilter|array|null $value): self
    {
        $this->setAttribute('adExtensionStatusFilter', $value);

        return $this;
    }

    /**
     * Returns the adExtensionTypeFilter value.
     *
     * @return AdExtensionAdExtensionTypeFilter|null
     */
    public function getAdExtensionTypeFilter(): ?AdExtensionAdExtensionTypeFilter
    {
        /** @var AdExtensionAdExtensionTypeFilter|null $value */
        $value = $this->getAttribute('adExtensionTypeFilter');

        return $value;
    }

    /**
     * Sets the adExtensionTypeFilter value.
     *
     * @param AdExtensionAdExtensionTypeFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdExtensionTypeFilter(AdExtensionAdExtensionTypeFilter|array|null $value): self
    {
        $this->setAttribute('adExtensionTypeFilter', $value);

        return $this;
    }

    /**
     * Returns the adGroupIdFilter value.
     *
     * @return AdExtensionAdGroupIdFilter|null
     */
    public function getAdGroupIdFilter(): ?AdExtensionAdGroupIdFilter
    {
        /** @var AdExtensionAdGroupIdFilter|null $value */
        $value = $this->getAttribute('adGroupIdFilter');

        return $value;
    }

    /**
     * Sets the adGroupIdFilter value.
     *
     * @param AdExtensionAdGroupIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdGroupIdFilter(AdExtensionAdGroupIdFilter|array|null $value): self
    {
        $this->setAttribute('adGroupIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adIdFilter value.
     *
     * @return AdExtensionAdIdFilter|null
     */
    public function getAdIdFilter(): ?AdExtensionAdIdFilter
    {
        /** @var AdExtensionAdIdFilter|null $value */
        $value = $this->getAttribute('adIdFilter');

        return $value;
    }

    /**
     * Sets the adIdFilter value.
     *
     * @param AdExtensionAdIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdIdFilter(AdExtensionAdIdFilter|array|null $value): self
    {
        $this->setAttribute('adIdFilter', $value);

        return $this;
    }

    /**
     * Returns the adProductFilter value.
     *
     * @return AdExtensionAdProductFilter|null
     */
    public function getAdProductFilter(): ?AdExtensionAdProductFilter
    {
        /** @var AdExtensionAdProductFilter|null $value */
        $value = $this->getAttribute('adProductFilter');

        return $value;
    }

    /**
     * Sets the adProductFilter value.
     *
     * @param AdExtensionAdProductFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdProductFilter(AdExtensionAdProductFilter|array|null $value): self
    {
        $this->setAttribute('adProductFilter', $value);

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

    /**
     * Returns the stateFilter value.
     *
     * @return AdExtensionStateFilter|null
     */
    public function getStateFilter(): ?AdExtensionStateFilter
    {
        /** @var AdExtensionStateFilter|null $value */
        $value = $this->getAttribute('stateFilter');

        return $value;
    }

    /**
     * Sets the stateFilter value.
     *
     * @param AdExtensionStateFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStateFilter(AdExtensionStateFilter|array|null $value): self
    {
        $this->setAttribute('stateFilter', $value);

        return $this;
    }
}
