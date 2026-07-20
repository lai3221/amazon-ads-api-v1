<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DeleteCampaignRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DeleteCampaignRequest.
 */
final class DeleteCampaignRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeleteCampaignRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'campaignIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the campaignIds value.
     *
     * @return list<string>|null
     */
    public function getCampaignIds(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('campaignIds');

        return $value;
    }

    /**
     * Sets the campaignIds value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setCampaignIds(?array $value): self
    {
        $this->setAttribute('campaignIds', $value);

        return $this;
    }
}
