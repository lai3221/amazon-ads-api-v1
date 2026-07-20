<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvDaypartSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypartSuccessResponse.
 */
final class LinearTvDaypartSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypartSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'linearTvDayparts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LinearTvDaypart::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 20,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the linearTvDayparts value.
     *
     * @return list<LinearTvDaypart>|null
     */
    public function getLinearTvDayparts(): ?array
    {
        /** @var list<LinearTvDaypart>|null $value */
        $value = $this->getAttribute('linearTvDayparts');

        return $value;
    }

    /**
     * Sets the linearTvDayparts value.
     *
     * @param list<LinearTvDaypart>|null $value New property value.
     * @return $this
     */
    public function setLinearTvDayparts(?array $value): self
    {
        $this->setAttribute('linearTvDayparts', $value);

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
