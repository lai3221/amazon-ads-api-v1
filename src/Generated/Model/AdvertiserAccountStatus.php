<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The current status of an AdvertiserAccount, including a status code and a human-readable message.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserAccountStatus.
 */
final class AdvertiserAccountStatus extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserAccountStatus';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'statusCode' => [
            'type' => 'enum',
            'class' => AccountState::class,
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
     * @return AccountState|null
     */
    public function getStatusCode(): ?AccountState
    {
        /** @var AccountState|null $value */
        $value = $this->getAttribute('statusCode');

        return $value;
    }

    /**
     * Sets the statusCode value.
     *
     * @param AccountState|string|null $value New property value.
     * @return $this
     */
    public function setStatusCode(AccountState|string|null $value): self
    {
        $this->setAttribute('statusCode', $value);

        return $this;
    }

    /**
     * Returns A human-friendly message describing the status of the advertising account..
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
     * Sets A human-friendly message describing the status of the advertising account..
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
