<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the GatewayTimeoutResponseContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema GatewayTimeoutResponseContent.
 */
final class GatewayTimeoutResponseContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'GatewayTimeoutResponseContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'code' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'message' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the code value.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('code');

        return $value;
    }

    /**
     * Sets the code value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCode(?string $value): self
    {
        $this->setAttribute('code', $value);

        return $this;
    }

    /**
     * Returns the message value.
     *
     * @return string|null
     */
    public function getMessage(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('message');

        return $value;
    }

    /**
     * Sets the message value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setMessage(?string $value): self
    {
        $this->setAttribute('message', $value);

        return $this;
    }
}
