<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Background schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Background.
 */
final class Background extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Background';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'color' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The color hex code of the background..
     *
     * @return string|null
     */
    public function getColor(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('color');

        return $value;
    }

    /**
     * Sets The color hex code of the background..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setColor(?string $value): self
    {
        $this->setAttribute('color', $value);

        return $this;
    }
}
