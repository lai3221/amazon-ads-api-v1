<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateDisplayCreative schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateDisplayCreative.
 */
final class UpdateDisplayCreative extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateDisplayCreative';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'standardDisplaySettings' => [
            'type' => 'model',
            'class' => UpdateStandardDisplaySettings::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the standardDisplaySettings value.
     *
     * @return UpdateStandardDisplaySettings|null
     */
    public function getStandardDisplaySettings(): ?UpdateStandardDisplaySettings
    {
        /** @var UpdateStandardDisplaySettings|null $value */
        $value = $this->getAttribute('standardDisplaySettings');

        return $value;
    }

    /**
     * Sets the standardDisplaySettings value.
     *
     * @param UpdateStandardDisplaySettings|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setStandardDisplaySettings(UpdateStandardDisplaySettings|array|null $value): self
    {
        $this->setAttribute('standardDisplaySettings', $value);

        return $this;
    }
}
