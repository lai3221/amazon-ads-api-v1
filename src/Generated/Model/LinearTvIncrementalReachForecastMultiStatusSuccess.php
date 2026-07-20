<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvIncrementalReachForecastMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvIncrementalReachForecastMultiStatusSuccess.
 */
final class LinearTvIncrementalReachForecastMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvIncrementalReachForecastMultiStatusSuccess';

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
        'linearTvIncrementalReachForecast' => [
            'type' => 'model',
            'class' => LinearTvIncrementalReachForecast::class,
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
     * Returns the linearTvIncrementalReachForecast value.
     *
     * @return LinearTvIncrementalReachForecast|null
     */
    public function getLinearTvIncrementalReachForecast(): ?LinearTvIncrementalReachForecast
    {
        /** @var LinearTvIncrementalReachForecast|null $value */
        $value = $this->getAttribute('linearTvIncrementalReachForecast');

        return $value;
    }

    /**
     * Sets the linearTvIncrementalReachForecast value.
     *
     * @param LinearTvIncrementalReachForecast|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLinearTvIncrementalReachForecast(LinearTvIncrementalReachForecast|array|null $value): self
    {
        $this->setAttribute('linearTvIncrementalReachForecast', $value);

        return $this;
    }
}
