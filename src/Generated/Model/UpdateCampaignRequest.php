<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateCampaignRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateCampaignRequest.
 */
final class UpdateCampaignRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateCampaignRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'campaigns' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CampaignUpdate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the campaigns value.
     *
     * @return list<CampaignUpdate>|null
     */
    public function getCampaigns(): ?array
    {
        /** @var list<CampaignUpdate>|null $value */
        $value = $this->getAttribute('campaigns');

        return $value;
    }

    /**
     * Sets the campaigns value.
     *
     * @param list<CampaignUpdate>|null $value New property value.
     * @return $this
     */
    public function setCampaigns(?array $value): self
    {
        $this->setAttribute('campaigns', $value);

        return $this;
    }
}
