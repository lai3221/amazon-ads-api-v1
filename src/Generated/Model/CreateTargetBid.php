<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTargetBid schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTargetBid.
 */
final class CreateTargetBid extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTargetBid';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'bid' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'marketplaceSettings' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateTargetBidMarketplaceSetting::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 30,
        ],
    ];

    /**
     * Returns The maximum bid for a target..
     *
     * @return int|float|null
     */
    public function getBid(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('bid');

        return $value;
    }

    /**
     * Sets The maximum bid for a target..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setBid(int|float|null $value): self
    {
        $this->setAttribute('bid', $value);

        return $this;
    }

    /**
     * Returns The bid associated with the target at specified marketplace level. Either one of bid or marketplaceSettings should always be specified..
     *
     * @return list<CreateTargetBidMarketplaceSetting>|null
     */
    public function getMarketplaceSettings(): ?array
    {
        /** @var list<CreateTargetBidMarketplaceSetting>|null $value */
        $value = $this->getAttribute('marketplaceSettings');

        return $value;
    }

    /**
     * Sets The bid associated with the target at specified marketplace level. Either one of bid or marketplaceSettings should always be specified..
     *
     * @param list<CreateTargetBidMarketplaceSetting>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceSettings(?array $value): self
    {
        $this->setAttribute('marketplaceSettings', $value);

        return $this;
    }
}
