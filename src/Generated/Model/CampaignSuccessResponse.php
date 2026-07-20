<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignSuccessResponse.
 */
final class CampaignSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignSuccessResponse';

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
                'class' => Campaign::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5000,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the campaigns value.
     *
     * @return list<Campaign>|null
     */
    public function getCampaigns(): ?array
    {
        /** @var list<Campaign>|null $value */
        $value = $this->getAttribute('campaigns');

        return $value;
    }

    /**
     * Sets the campaigns value.
     *
     * @param list<Campaign>|null $value New property value.
     * @return $this
     */
    public function setCampaigns(?array $value): self
    {
        $this->setAttribute('campaigns', $value);

        return $this;
    }

    /**
     * Returns the nextToken value.
     *
     * @return string|null
     */
    public function getNextToken(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('nextToken');

        return $value;
    }

    /**
     * Sets the nextToken value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setNextToken(?string $value): self
    {
        $this->setAttribute('nextToken', $value);

        return $this;
    }
}
