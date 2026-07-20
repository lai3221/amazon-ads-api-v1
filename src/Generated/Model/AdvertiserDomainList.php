<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets domains based on list inherited from the advertiser.
 *
 * @generated from Amazon Ads API v1 schema AdvertiserDomainList.
 */
final class AdvertiserDomainList extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertiserDomainList';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'inheritFromAdvertiser' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Set to TRUE to inherit domain list from advertiser..
     *
     * @return bool|null
     */
    public function getInheritFromAdvertiser(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('inheritFromAdvertiser');

        return $value;
    }

    /**
     * Sets Set to TRUE to inherit domain list from advertiser..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setInheritFromAdvertiser(?bool $value): self
    {
        $this->setAttribute('inheritFromAdvertiser', $value);

        return $this;
    }
}
