<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreativeTrackingUrl schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreativeTrackingUrl.
 */
final class CreativeTrackingUrl extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreativeTrackingUrl';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'url' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A url to be triggered for tracking events..
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('url');

        return $value;
    }

    /**
     * Sets A url to be triggered for tracking events..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUrl(?string $value): self
    {
        $this->setAttribute('url', $value);

        return $this;
    }
}
