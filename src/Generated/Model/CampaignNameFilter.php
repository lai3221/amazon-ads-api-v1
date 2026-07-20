<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CampaignNameFilter schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CampaignNameFilter.
 */
final class CampaignNameFilter extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CampaignNameFilter';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'include' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
        'queryTermMatchType' => [
            'type' => 'enum',
            'class' => CampaignNameFilterType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the include value.
     *
     * @return list<string>|null
     */
    public function getIncludeValue(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('include');

        return $value;
    }

    /**
     * Sets the include value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setIncludeValue(?array $value): self
    {
        $this->setAttribute('include', $value);

        return $this;
    }

    /**
     * Returns the queryTermMatchType value.
     *
     * @return CampaignNameFilterType|null
     */
    public function getQueryTermMatchType(): ?CampaignNameFilterType
    {
        /** @var CampaignNameFilterType|null $value */
        $value = $this->getAttribute('queryTermMatchType');

        return $value;
    }

    /**
     * Sets the queryTermMatchType value.
     *
     * @param CampaignNameFilterType|string|null $value New property value.
     * @return $this
     */
    public function setQueryTermMatchType(CampaignNameFilterType|string|null $value): self
    {
        $this->setAttribute('queryTermMatchType', $value);

        return $this;
    }
}
