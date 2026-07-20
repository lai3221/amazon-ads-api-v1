<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Captures the user's geographic information for purposes of consent checking.
 *
 * @generated from Amazon Ads API v1 schema CreateGeographicConsentData.
 */
final class CreateGeographicConsentData extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateGeographicConsentData';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'ipAddress' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns IP address of the user associated with the conversion event..
     *
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('ipAddress');

        return $value;
    }

    /**
     * Sets IP address of the user associated with the conversion event..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setIpAddress(?string $value): self
    {
        $this->setAttribute('ipAddress', $value);

        return $this;
    }
}
