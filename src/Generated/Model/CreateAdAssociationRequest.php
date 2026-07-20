<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateAdAssociationRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateAdAssociationRequest.
 */
final class CreateAdAssociationRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateAdAssociationRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adAssociations' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => AdAssociationCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
    ];

    /**
     * Returns the adAssociations value.
     *
     * @return list<AdAssociationCreate>|null
     */
    public function getAdAssociations(): ?array
    {
        /** @var list<AdAssociationCreate>|null $value */
        $value = $this->getAttribute('adAssociations');

        return $value;
    }

    /**
     * Sets the adAssociations value.
     *
     * @param list<AdAssociationCreate>|null $value New property value.
     * @return $this
     */
    public function setAdAssociations(?array $value): self
    {
        $this->setAttribute('adAssociations', $value);

        return $this;
    }
}
