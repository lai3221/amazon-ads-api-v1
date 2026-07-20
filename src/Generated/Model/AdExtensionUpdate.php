<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtensionUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionUpdate.
 */
final class AdExtensionUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adExtensionId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'marketplaces' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => Marketplace::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 30,
        ],
        'state' => [
            'type' => 'enum',
            'class' => UpdateState::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A unique identifier for the ad extension..
     *
     * @return string|null
     */
    public function getAdExtensionId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('adExtensionId');

        return $value;
    }

    /**
     * Sets A unique identifier for the ad extension..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAdExtensionId(?string $value): self
    {
        $this->setAttribute('adExtensionId', $value);

        return $this;
    }

    /**
     * Returns The list of marketplace in which the global ad extension is applicable. The marketplaces included should either be same as or subset of parent campaign/adGroup/ad..
     *
     * @return list<Marketplace>|null
     */
    public function getMarketplaces(): ?array
    {
        /** @var list<Marketplace>|null $value */
        $value = $this->getAttribute('marketplaces');

        return $value;
    }

    /**
     * Sets The list of marketplace in which the global ad extension is applicable. The marketplaces included should either be same as or subset of parent campaign/adGroup/ad..
     *
     * @param list<Marketplace>|null $value New property value.
     * @return $this
     */
    public function setMarketplaces(?array $value): self
    {
        $this->setAttribute('marketplaces', $value);

        return $this;
    }

    /**
     * Returns the state value.
     *
     * @return UpdateState|null
     */
    public function getState(): ?UpdateState
    {
        /** @var UpdateState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param UpdateState|string|null $value New property value.
     * @return $this
     */
    public function setState(UpdateState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }
}
