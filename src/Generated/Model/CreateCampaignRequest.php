<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateCampaignRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateCampaignRequest.
 */
final class CreateCampaignRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateCampaignRequest';

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
                'class' => CampaignCreate::class,
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
     * @return list<CampaignCreate>|null
     */
    public function getCampaigns(): ?array
    {
        /** @var list<CampaignCreate>|null $value */
        $value = $this->getAttribute('campaigns');

        return $value;
    }

    /**
     * Sets the campaigns value.
     *
     * @param list<CampaignCreate>|null $value New property value.
     * @return $this
     */
    public function setCampaigns(?array $value): self
    {
        $this->setAttribute('campaigns', $value);

        return $this;
    }
}
