<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Device information associated with the conversion event.
 *
 * @generated from Amazon Ads API v1 schema CreateDeviceInfo.
 */
final class CreateDeviceInfo extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDeviceInfo';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'userAgent' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Raw user agent string from the browser or app at the time of the event. Max 512 characters..
     *
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('userAgent');

        return $value;
    }

    /**
     * Sets Raw user agent string from the browser or app at the time of the event. Max 512 characters..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUserAgent(?string $value): self
    {
        $this->setAttribute('userAgent', $value);

        return $this;
    }
}
