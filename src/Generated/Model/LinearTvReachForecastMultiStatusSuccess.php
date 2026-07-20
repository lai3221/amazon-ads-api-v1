<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvReachForecastMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvReachForecastMultiStatusSuccess.
 */
final class LinearTvReachForecastMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvReachForecastMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9,
        ],
        'linearTvReachForecast' => [
            'type' => 'model',
            'class' => LinearTvReachForecast::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

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

    /**
     * Returns the linearTvReachForecast value.
     *
     * @return LinearTvReachForecast|null
     */
    public function getLinearTvReachForecast(): ?LinearTvReachForecast
    {
        /** @var LinearTvReachForecast|null $value */
        $value = $this->getAttribute('linearTvReachForecast');

        return $value;
    }

    /**
     * Sets the linearTvReachForecast value.
     *
     * @param LinearTvReachForecast|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLinearTvReachForecast(LinearTvReachForecast|array|null $value): self
    {
        $this->setAttribute('linearTvReachForecast', $value);

        return $this;
    }
}
