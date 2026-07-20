<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the size of the ad player.
 *
 * @generated from Amazon Ads API v1 schema AdPlayerSizeTarget.
 */
final class AdPlayerSizeTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdPlayerSizeTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adPlayerSize' => [
            'type' => 'enum',
            'class' => AdPlayerSize::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adPlayerSize value.
     *
     * @return AdPlayerSize|null
     */
    public function getAdPlayerSize(): ?AdPlayerSize
    {
        /** @var AdPlayerSize|null $value */
        $value = $this->getAttribute('adPlayerSize');

        return $value;
    }

    /**
     * Sets the adPlayerSize value.
     *
     * @param AdPlayerSize|string|null $value New property value.
     * @return $this
     */
    public function setAdPlayerSize(AdPlayerSize|string|null $value): self
    {
        $this->setAttribute('adPlayerSize', $value);

        return $this;
    }
}
