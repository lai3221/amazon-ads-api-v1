<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdvertiserAccountSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserAccountSuccessResponse.
 */
final class AdvertiserAccountSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserAccountSuccessResponse';

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
                'class' => AdvertiserAccount::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the advertiserAccounts value.
     *
     * @return list<AdvertiserAccount>|null
     */
    public function getAdvertiserAccounts(): ?array
    {
        /** @var list<AdvertiserAccount>|null $value */
        $value = $this->getAttribute('advertiserAccounts');

        return $value;
    }

    /**
     * Sets the advertiserAccounts value.
     *
     * @param list<AdvertiserAccount>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccounts(?array $value): self
    {
        $this->setAttribute('advertiserAccounts', $value);

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
