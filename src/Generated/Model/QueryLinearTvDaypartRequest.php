<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryLinearTvDaypartRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryLinearTvDaypartRequest.
 */
final class QueryLinearTvDaypartRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryLinearTvDaypartRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'marketplaceFilter' => [
            'type' => 'model',
            'class' => LinearTvDaypartMarketplaceFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 20,
        ],
        'nameFilter' => [
            'type' => 'model',
            'class' => LinearTvDaypartLinearTvDaypartNameFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the marketplaceFilter value.
     *
     * @return LinearTvDaypartMarketplaceFilter|null
     */
    public function getMarketplaceFilter(): ?LinearTvDaypartMarketplaceFilter
    {
        /** @var LinearTvDaypartMarketplaceFilter|null $value */
        $value = $this->getAttribute('marketplaceFilter');

        return $value;
    }

    /**
     * Sets the marketplaceFilter value.
     *
     * @param LinearTvDaypartMarketplaceFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceFilter(LinearTvDaypartMarketplaceFilter|array|null $value): self
    {
        $this->setAttribute('marketplaceFilter', $value);

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
     * Returns the nameFilter value.
     *
     * @return LinearTvDaypartLinearTvDaypartNameFilter|null
     */
    public function getNameFilter(): ?LinearTvDaypartLinearTvDaypartNameFilter
    {
        /** @var LinearTvDaypartLinearTvDaypartNameFilter|null $value */
        $value = $this->getAttribute('nameFilter');

        return $value;
    }

    /**
     * Sets the nameFilter value.
     *
     * @param LinearTvDaypartLinearTvDaypartNameFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setNameFilter(LinearTvDaypartLinearTvDaypartNameFilter|array|null $value): self
    {
        $this->setAttribute('nameFilter', $value);

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
