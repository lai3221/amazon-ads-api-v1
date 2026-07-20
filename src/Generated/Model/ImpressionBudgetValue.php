<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ImpressionBudgetValue schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ImpressionBudgetValue.
 */
final class ImpressionBudgetValue extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ImpressionBudgetValue';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'impression' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The impression cap of the budget cap..
     *
     * @return int|float|null
     */
    public function getImpression(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('impression');

        return $value;
    }

    /**
     * Sets The impression cap of the budget cap..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setImpression(int|float|null $value): self
    {
        $this->setAttribute('impression', $value);

        return $this;
    }
}
