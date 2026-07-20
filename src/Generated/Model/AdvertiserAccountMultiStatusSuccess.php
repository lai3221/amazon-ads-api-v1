<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserAccountMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserAccountMultiStatusSuccess.
 */
final class AdvertiserAccountMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserAccountMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserAccount' => [
            'type' => 'model',
            'class' => AdvertiserAccount::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 99,
        ],
    ];

    /**
     * Returns the advertiserAccount value.
     *
     * @return AdvertiserAccount|null
     */
    public function getAdvertiserAccount(): ?AdvertiserAccount
    {
        /** @var AdvertiserAccount|null $value */
        $value = $this->getAttribute('advertiserAccount');

        return $value;
    }

    /**
     * Sets the advertiserAccount value.
     *
     * @param AdvertiserAccount|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccount(AdvertiserAccount|array|null $value): self
    {
        $this->setAttribute('advertiserAccount', $value);

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
