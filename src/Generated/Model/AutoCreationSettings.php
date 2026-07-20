<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AutoCreationSettings schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AutoCreationSettings.
 */
final class AutoCreationSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AutoCreationSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'autoCreateTargets' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'autoManageCampaign' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Gives Amazon permission to automatically create targets associated with the campaign based on the products being advertised..
     *
     * @return bool|null
     */
    public function getAutoCreateTargets(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('autoCreateTargets');

        return $value;
    }

    /**
     * Sets Gives Amazon permission to automatically create targets associated with the campaign based on the products being advertised..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setAutoCreateTargets(?bool $value): self
    {
        $this->setAttribute('autoCreateTargets', $value);

        return $this;
    }

    /**
     * Returns Flag that allows Amazon to manage the lifecycle of your Campaign..
     *
     * @return bool|null
     */
    public function getAutoManageCampaign(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('autoManageCampaign');

        return $value;
    }

    /**
     * Sets Flag that allows Amazon to manage the lifecycle of your Campaign..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setAutoManageCampaign(?bool $value): self
    {
        $this->setAttribute('autoManageCampaign', $value);

        return $this;
    }
}
