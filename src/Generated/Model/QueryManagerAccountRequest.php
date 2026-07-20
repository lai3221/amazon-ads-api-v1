<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QueryManagerAccountRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QueryManagerAccountRequest.
 */
final class QueryManagerAccountRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QueryManagerAccountRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'managerAccountIdFilter' => [
            'type' => 'model',
            'class' => ManagerAccountManagerAccountIdFilter::class,
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
     * Returns the managerAccountIdFilter value.
     *
     * @return ManagerAccountManagerAccountIdFilter|null
     */
    public function getManagerAccountIdFilter(): ?ManagerAccountManagerAccountIdFilter
    {
        /** @var ManagerAccountManagerAccountIdFilter|null $value */
        $value = $this->getAttribute('managerAccountIdFilter');

        return $value;
    }

    /**
     * Sets the managerAccountIdFilter value.
     *
     * @param ManagerAccountManagerAccountIdFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setManagerAccountIdFilter(ManagerAccountManagerAccountIdFilter|array|null $value): self
    {
        $this->setAttribute('managerAccountIdFilter', $value);

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
