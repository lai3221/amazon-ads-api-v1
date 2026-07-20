<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdvertiserAccountRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdvertiserAccountRequest.
 */
final class CreateAdvertiserAccountRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdvertiserAccountRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserAccounts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdvertiserAccountCreate::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
    ];

    /**
     * Returns the advertiserAccounts value.
     *
     * @return list<AdvertiserAccountCreate>|null
     */
    public function getAdvertiserAccounts(): ?array
    {
        /** @var list<AdvertiserAccountCreate>|null $value */
        $value = $this->getAttribute('advertiserAccounts');

        return $value;
    }

    /**
     * Sets the advertiserAccounts value.
     *
     * @param list<AdvertiserAccountCreate>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccounts(?array $value): self
    {
        $this->setAttribute('advertiserAccounts', $value);

        return $this;
    }
}
