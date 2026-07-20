<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DealAvailsSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DealAvailsSuccessResponse.
 */
final class DealAvailsSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DealAvailsSuccessResponse';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dealAvailses' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => DealAvails::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 1000,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the dealAvailses value.
     *
     * @return list<DealAvails>|null
     */
    public function getDealAvailses(): ?array
    {
        /** @var list<DealAvails>|null $value */
        $value = $this->getAttribute('dealAvailses');

        return $value;
    }

    /**
     * Sets the dealAvailses value.
     *
     * @param list<DealAvails>|null $value New property value.
     * @return $this
     */
    public function setDealAvailses(?array $value): self
    {
        $this->setAttribute('dealAvailses', $value);

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
