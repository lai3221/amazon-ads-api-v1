<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateDisplayCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateDisplayCreative.
 */
final class CreateDisplayCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDisplayCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'standardDisplaySettings' => [
            'type' => 'model',
            'class' => CreateStandardDisplaySettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the standardDisplaySettings value.
     *
     * @return CreateStandardDisplaySettings|null
     */
    public function getStandardDisplaySettings(): ?CreateStandardDisplaySettings
    {
        /** @var CreateStandardDisplaySettings|null $value */
        $value = $this->getAttribute('standardDisplaySettings');

        return $value;
    }

    /**
     * Sets the standardDisplaySettings value.
     *
     * @param CreateStandardDisplaySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStandardDisplaySettings(CreateStandardDisplaySettings|array|null $value): self
    {
        $this->setAttribute('standardDisplaySettings', $value);

        return $this;
    }
}
