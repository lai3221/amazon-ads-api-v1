<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateAdExtensionRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateAdExtensionRequest.
 */
final class UpdateAdExtensionRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAdExtensionRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adExtensions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdExtensionUpdate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 50,
        ],
    ];

    /**
     * Returns the adExtensions value.
     *
     * @return list<AdExtensionUpdate>|null
     */
    public function getAdExtensions(): ?array
    {
        /** @var list<AdExtensionUpdate>|null $value */
        $value = $this->getAttribute('adExtensions');

        return $value;
    }

    /**
     * Sets the adExtensions value.
     *
     * @param list<AdExtensionUpdate>|null $value New property value.
     * @return $this
     */
    public function setAdExtensions(?array $value): self
    {
        $this->setAttribute('adExtensions', $value);

        return $this;
    }
}
