<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateDoubleVerifyAuthenticAttention schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateDoubleVerifyAuthenticAttention.
 */
final class CreateDoubleVerifyAuthenticAttention extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDoubleVerifyAuthenticAttention';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'universalAttention' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns One omni-channel segment that is informed by data from all DV campaigns to help avoid serving ads on generally poor performing apps and domains..
     *
     * @return bool|null
     */
    public function getUniversalAttention(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('universalAttention');

        return $value;
    }

    /**
     * Sets One omni-channel segment that is informed by data from all DV campaigns to help avoid serving ads on generally poor performing apps and domains..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setUniversalAttention(?bool $value): self
    {
        $this->setAttribute('universalAttention', $value);

        return $this;
    }
}
