<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the QuerySellingAccountRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema QuerySellingAccountRequest.
 */
final class QuerySellingAccountRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'QuerySellingAccountRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
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
        'sellingAccountLinkTokenFilter' => [
            'type' => 'model',
            'class' => SellingAccountSellingAccountLinkTokenFilter::class,
            'required' => false,
            'nullable' => false,
        ],
        'sellingProgramFilter' => [
            'type' => 'model',
            'class' => SellingAccountSellingProgramFilter::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

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

    /**
     * Returns the sellingAccountLinkTokenFilter value.
     *
     * @return SellingAccountSellingAccountLinkTokenFilter|null
     */
    public function getSellingAccountLinkTokenFilter(): ?SellingAccountSellingAccountLinkTokenFilter
    {
        /** @var SellingAccountSellingAccountLinkTokenFilter|null $value */
        $value = $this->getAttribute('sellingAccountLinkTokenFilter');

        return $value;
    }

    /**
     * Sets the sellingAccountLinkTokenFilter value.
     *
     * @param SellingAccountSellingAccountLinkTokenFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSellingAccountLinkTokenFilter(SellingAccountSellingAccountLinkTokenFilter|array|null $value): self
    {
        $this->setAttribute('sellingAccountLinkTokenFilter', $value);

        return $this;
    }

    /**
     * Returns the sellingProgramFilter value.
     *
     * @return SellingAccountSellingProgramFilter|null
     */
    public function getSellingProgramFilter(): ?SellingAccountSellingProgramFilter
    {
        /** @var SellingAccountSellingProgramFilter|null $value */
        $value = $this->getAttribute('sellingProgramFilter');

        return $value;
    }

    /**
     * Sets the sellingProgramFilter value.
     *
     * @param SellingAccountSellingProgramFilter|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setSellingProgramFilter(SellingAccountSellingProgramFilter|array|null $value): self
    {
        $this->setAttribute('sellingProgramFilter', $value);

        return $this;
    }
}
