<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Audio schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Audio.
 */
final class Audio extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Audio';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'assetId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'assetVersion' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The asset library ID associated with the audio asset..
     *
     * @return string|null
     */
    public function getAssetId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetId');

        return $value;
    }

    /**
     * Sets The asset library ID associated with the audio asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetId(?string $value): self
    {
        $this->setAttribute('assetId', $value);

        return $this;
    }

    /**
     * Returns The asset library version associated with the audio asset..
     *
     * @return string|null
     */
    public function getAssetVersion(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('assetVersion');

        return $value;
    }

    /**
     * Sets The asset library version associated with the audio asset..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAssetVersion(?string $value): self
    {
        $this->setAttribute('assetVersion', $value);

        return $this;
    }
}
