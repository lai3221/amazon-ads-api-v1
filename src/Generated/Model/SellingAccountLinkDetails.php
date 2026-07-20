<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SellingAccountLinkDetails schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SellingAccountLinkDetails.
 */
final class SellingAccountLinkDetails extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingAccountLinkDetails';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'linkStatus' => [
            'type' => 'model',
            'class' => SellingAccountLinkStatus::class,
            'required' => true,
            'nullable' => false,
        ],
        'sellingAccountLinkToken' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'sellingProgram' => [
            'type' => 'enum',
            'class' => SellingProgram::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the linkStatus value.
     *
     * @return SellingAccountLinkStatus|null
     */
    public function getLinkStatus(): ?SellingAccountLinkStatus
    {
        /** @var SellingAccountLinkStatus|null $value */
        $value = $this->getAttribute('linkStatus');

        return $value;
    }

    /**
     * Sets the linkStatus value.
     *
     * @param SellingAccountLinkStatus|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setLinkStatus(SellingAccountLinkStatus|array|null $value): self
    {
        $this->setAttribute('linkStatus', $value);

        return $this;
    }

    /**
     * Returns The token to locate a selling account to be linked..
     *
     * @return string|null
     */
    public function getSellingAccountLinkToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('sellingAccountLinkToken');

        return $value;
    }

    /**
     * Sets The token to locate a selling account to be linked..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSellingAccountLinkToken(?string $value): self
    {
        $this->setAttribute('sellingAccountLinkToken', $value);

        return $this;
    }

    /**
     * Returns the sellingProgram value.
     *
     * @return SellingProgram|null
     */
    public function getSellingProgram(): ?SellingProgram
    {
        /** @var SellingProgram|null $value */
        $value = $this->getAttribute('sellingProgram');

        return $value;
    }

    /**
     * Sets the sellingProgram value.
     *
     * @param SellingProgram|string|null $value New property value.
     * @return $this
     */
    public function setSellingProgram(SellingProgram|string|null $value): self
    {
        $this->setAttribute('sellingProgram', $value);

        return $this;
    }
}
