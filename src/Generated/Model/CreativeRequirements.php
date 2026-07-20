<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Creative requirements associated with the deal.
 *
 * @generated from Amazon Ads API v1 schema CreativeRequirements.
 */
final class CreativeRequirements extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreativeRequirements';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'creativeSource' => [
            'type' => 'enum',
            'class' => CreativeSource::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the creativeSource value.
     *
     * @return CreativeSource|null
     */
    public function getCreativeSource(): ?CreativeSource
    {
        /** @var CreativeSource|null $value */
        $value = $this->getAttribute('creativeSource');

        return $value;
    }

    /**
     * Sets the creativeSource value.
     *
     * @param CreativeSource|string|null $value New property value.
     * @return $this
     */
    public function setCreativeSource(CreativeSource|string|null $value): self
    {
        $this->setAttribute('creativeSource', $value);

        return $this;
    }
}
