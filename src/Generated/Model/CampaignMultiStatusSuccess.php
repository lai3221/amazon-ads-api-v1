<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignMultiStatusSuccess.
 */
final class CampaignMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'campaign' => [
            'type' => 'model',
            'class' => Campaign::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 999,
        ],
    ];

    /**
     * Returns the campaign value.
     *
     * @return Campaign|null
     */
    public function getCampaign(): ?Campaign
    {
        /** @var Campaign|null $value */
        $value = $this->getAttribute('campaign');

        return $value;
    }

    /**
     * Sets the campaign value.
     *
     * @param Campaign|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCampaign(Campaign|array|null $value): self
    {
        $this->setAttribute('campaign', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
