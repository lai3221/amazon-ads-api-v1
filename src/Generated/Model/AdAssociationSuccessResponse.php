<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdAssociationSuccessResponse schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdAssociationSuccessResponse.
 */
final class AdAssociationSuccessResponse extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdAssociationSuccessResponse';

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
                'class' => AdAssociation::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'nextToken' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the adAssociations value.
     *
     * @return list<AdAssociation>|null
     */
    public function getAdAssociations(): ?array
    {
        /** @var list<AdAssociation>|null $value */
        $value = $this->getAttribute('adAssociations');

        return $value;
    }

    /**
     * Sets the adAssociations value.
     *
     * @param list<AdAssociation>|null $value New property value.
     * @return $this
     */
    public function setAdAssociations(?array $value): self
    {
        $this->setAttribute('adAssociations', $value);

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
