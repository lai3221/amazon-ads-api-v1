<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateLinearTvReachForecastRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateLinearTvReachForecastRequest.
 */
final class CreateLinearTvReachForecastRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLinearTvReachForecastRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'linearTvReachForecasts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LinearTvReachForecastCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the linearTvReachForecasts value.
     *
     * @return list<LinearTvReachForecastCreate>|null
     */
    public function getLinearTvReachForecasts(): ?array
    {
        /** @var list<LinearTvReachForecastCreate>|null $value */
        $value = $this->getAttribute('linearTvReachForecasts');

        return $value;
    }

    /**
     * Sets the linearTvReachForecasts value.
     *
     * @param list<LinearTvReachForecastCreate>|null $value New property value.
     * @return $this
     */
    public function setLinearTvReachForecasts(?array $value): self
    {
        $this->setAttribute('linearTvReachForecasts', $value);

        return $this;
    }
}
