<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DspContentRating schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DspContentRating.
 */
final class DspContentRating extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DspContentRating';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dspContentRating' => [
            'type' => 'enum',
            'class' => DspContentRatingEnum::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the dspContentRating value.
     *
     * @return DspContentRatingEnum|null
     */
    public function getDspContentRating(): ?DspContentRatingEnum
    {
        /** @var DspContentRatingEnum|null $value */
        $value = $this->getAttribute('dspContentRating');

        return $value;
    }

    /**
     * Sets the dspContentRating value.
     *
     * @param DspContentRatingEnum|string|null $value New property value.
     * @return $this
     */
    public function setDspContentRating(DspContentRatingEnum|string|null $value): self
    {
        $this->setAttribute('dspContentRating', $value);

        return $this;
    }
}
