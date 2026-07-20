<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryAdvertiserAccountRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryAdvertiserAccountRequest.
 */
final class QueryAdvertiserAccountRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryAdvertiserAccountRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'advertiserAccountIdFilter' => [
            'type' => 'model',
            'class' => AdvertiserAccountAdvertiserAccountIdFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'isGlobalAccountFilter' => [
            'type' => 'model',
            'class' => AdvertiserAccountIsGlobalAccountFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'maxResults' => [
            'type' => 'integer',
            'required' => false,
            'nullable' => false,
            'minimum' => 10,
            'maximum' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the advertiserAccountIdFilter value.
     *
     * @return AdvertiserAccountAdvertiserAccountIdFilter|null
     */
    public function getAdvertiserAccountIdFilter(): ?AdvertiserAccountAdvertiserAccountIdFilter
    {
        /** @var AdvertiserAccountAdvertiserAccountIdFilter|null $value */
        $value = $this->getAttribute('advertiserAccountIdFilter');

        return $value;
    }

    /**
     * Sets the advertiserAccountIdFilter value.
     *
     * @param AdvertiserAccountAdvertiserAccountIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdvertiserAccountIdFilter(AdvertiserAccountAdvertiserAccountIdFilter|array|null $value): self
    {
        $this->setAttribute('advertiserAccountIdFilter', $value);

        return $this;
    }

    /**
     * Returns the isGlobalAccountFilter value.
     *
     * @return AdvertiserAccountIsGlobalAccountFilter|null
     */
    public function getIsGlobalAccountFilter(): ?AdvertiserAccountIsGlobalAccountFilter
    {
        /** @var AdvertiserAccountIsGlobalAccountFilter|null $value */
        $value = $this->getAttribute('isGlobalAccountFilter');

        return $value;
    }

    /**
     * Sets the isGlobalAccountFilter value.
     *
     * @param AdvertiserAccountIsGlobalAccountFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setIsGlobalAccountFilter(AdvertiserAccountIsGlobalAccountFilter|array|null $value): self
    {
        $this->setAttribute('isGlobalAccountFilter', $value);

        return $this;
    }

    /**
     * Returns the maxResults value.
     *
     * @return int|null
     */
    public function getMaxResults(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('maxResults');

        return $value;
    }

    /**
     * Sets the maxResults value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setMaxResults(?int $value): self
    {
        $this->setAttribute('maxResults', $value);

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
