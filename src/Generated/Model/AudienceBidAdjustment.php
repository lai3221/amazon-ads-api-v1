<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AudienceBidAdjustment schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AudienceBidAdjustment.
 */
final class AudienceBidAdjustment extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AudienceBidAdjustment';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'audienceId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'percentage' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The unique identifier of the Audience to apply bid adjustment..
     *
     * @return string|null
     */
    public function getAudienceId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('audienceId');

        return $value;
    }

    /**
     * Sets The unique identifier of the Audience to apply bid adjustment..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAudienceId(?string $value): self
    {
        $this->setAttribute('audienceId', $value);

        return $this;
    }

    /**
     * Returns The selection of the percentage change associated with a given audience and bid adjustment settings..
     *
     * @return int|null
     */
    public function getPercentage(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('percentage');

        return $value;
    }

    /**
     * Sets The selection of the percentage change associated with a given audience and bid adjustment settings..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setPercentage(?int $value): self
    {
        $this->setAttribute('percentage', $value);

        return $this;
    }
}
