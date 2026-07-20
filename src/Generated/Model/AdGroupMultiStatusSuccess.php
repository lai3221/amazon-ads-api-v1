<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdGroupMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdGroupMultiStatusSuccess.
 */
final class AdGroupMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdGroupMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adGroup' => [
            'type' => 'model',
            'class' => AdGroup::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 999,
        ],
    ];

    /**
     * Returns the adGroup value.
     *
     * @return AdGroup|null
     */
    public function getAdGroup(): ?AdGroup
    {
        /** @var AdGroup|null $value */
        $value = $this->getAttribute('adGroup');

        return $value;
    }

    /**
     * Sets the adGroup value.
     *
     * @param AdGroup|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdGroup(AdGroup|array|null $value): self
    {
        $this->setAttribute('adGroup', $value);

        return $this;
    }

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
}
