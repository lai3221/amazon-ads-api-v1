<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdAssociationMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdAssociationMultiStatusSuccess.
 */
final class AdAssociationMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdAssociationMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adAssociation' => [
            'type' => 'model',
            'class' => AdAssociation::class,
            'required' => true,
            'nullable' => false,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 19,
        ],
    ];

    /**
     * Returns the adAssociation value.
     *
     * @return AdAssociation|null
     */
    public function getAdAssociation(): ?AdAssociation
    {
        /** @var AdAssociation|null $value */
        $value = $this->getAttribute('adAssociation');

        return $value;
    }

    /**
     * Sets the adAssociation value.
     *
     * @param AdAssociation|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdAssociation(AdAssociation|array|null $value): self
    {
        $this->setAttribute('adAssociation', $value);

        return $this;
    }

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }
}
