<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the SellingAccountLinkStatus schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema SellingAccountLinkStatus.
 */
final class SellingAccountLinkStatus extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'SellingAccountLinkStatus';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'statusCode' => [
            'type' => 'enum',
            'class' => SellingAccountLinkState::class,
            'required' => true,
            'nullable' => false,
        ],
        'statusMessage' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the statusCode value.
     *
     * @return SellingAccountLinkState|null
     */
    public function getStatusCode(): ?SellingAccountLinkState
    {
        /** @var SellingAccountLinkState|null $value */
        $value = $this->getAttribute('statusCode');

        return $value;
    }

    /**
     * Sets the statusCode value.
     *
     * @param SellingAccountLinkState|string|null $value New property value.
     * @return $this
     */
    public function setStatusCode(SellingAccountLinkState|string|null $value): self
    {
        $this->setAttribute('statusCode', $value);

        return $this;
    }

    /**
     * Returns The human friendly status message..
     *
     * @return string|null
     */
    public function getStatusMessage(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('statusMessage');

        return $value;
    }

    /**
     * Sets The human friendly status message..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setStatusMessage(?string $value): self
    {
        $this->setAttribute('statusMessage', $value);

        return $this;
    }
}
