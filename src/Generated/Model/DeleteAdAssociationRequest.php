<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DeleteAdAssociationRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DeleteAdAssociationRequest.
 */
final class DeleteAdAssociationRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeleteAdAssociationRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adAssociationIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
    ];

    /**
     * Returns the adAssociationIds value.
     *
     * @return list<string>|null
     */
    public function getAdAssociationIds(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('adAssociationIds');

        return $value;
    }

    /**
     * Sets the adAssociationIds value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAdAssociationIds(?array $value): self
    {
        $this->setAttribute('adAssociationIds', $value);

        return $this;
    }
}
