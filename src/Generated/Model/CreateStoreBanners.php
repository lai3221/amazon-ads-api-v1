<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreBanners schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreBanners.
 */
final class CreateStoreBanners extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreBanners';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'blackLivesMatter' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'stopAsianHate' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Flag to display Black Lives Matter banner..
     *
     * @return bool|null
     */
    public function getBlackLivesMatter(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('blackLivesMatter');

        return $value;
    }

    /**
     * Sets Flag to display Black Lives Matter banner..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setBlackLivesMatter(?bool $value): self
    {
        $this->setAttribute('blackLivesMatter', $value);

        return $this;
    }

    /**
     * Returns Flag to display Stop Asian Hate banner..
     *
     * @return bool|null
     */
    public function getStopAsianHate(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('stopAsianHate');

        return $value;
    }

    /**
     * Sets Flag to display Stop Asian Hate banner..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setStopAsianHate(?bool $value): self
    {
        $this->setAttribute('stopAsianHate', $value);

        return $this;
    }
}
