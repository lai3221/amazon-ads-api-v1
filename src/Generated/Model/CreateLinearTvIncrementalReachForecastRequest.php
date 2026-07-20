<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateLinearTvIncrementalReachForecastRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateLinearTvIncrementalReachForecastRequest.
 */
final class CreateLinearTvIncrementalReachForecastRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLinearTvIncrementalReachForecastRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'linearTvIncrementalReachForecasts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LinearTvIncrementalReachForecastCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the linearTvIncrementalReachForecasts value.
     *
     * @return list<LinearTvIncrementalReachForecastCreate>|null
     */
    public function getLinearTvIncrementalReachForecasts(): ?array
    {
        /** @var list<LinearTvIncrementalReachForecastCreate>|null $value */
        $value = $this->getAttribute('linearTvIncrementalReachForecasts');

        return $value;
    }

    /**
     * Sets the linearTvIncrementalReachForecasts value.
     *
     * @param list<LinearTvIncrementalReachForecastCreate>|null $value New property value.
     * @return $this
     */
    public function setLinearTvIncrementalReachForecasts(?array $value): self
    {
        $this->setAttribute('linearTvIncrementalReachForecasts', $value);

        return $this;
    }
}
