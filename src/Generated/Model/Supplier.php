<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Supplier schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Supplier.
 */
final class Supplier extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Supplier';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'domain' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'integrationType' => [
            'type' => 'enum',
            'class' => IntegrationType::class,
            'required' => false,
            'nullable' => false,
        ],
        'owner' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'state' => [
            'type' => 'enum',
            'class' => SupplierState::class,
            'required' => false,
            'nullable' => false,
        ],
        'supplierId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'supplierName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => SupplierType::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Corporate SCO domain in sellers.json supply chain object (e.g., pubmatic.com)..
     *
     * @return string|null
     */
    public function getDomain(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domain');

        return $value;
    }

    /**
     * Sets Corporate SCO domain in sellers.json supply chain object (e.g., pubmatic.com)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomain(?string $value): self
    {
        $this->setAttribute('domain', $value);

        return $this;
    }

    /**
     * Returns the integrationType value.
     *
     * @return IntegrationType|null
     */
    public function getIntegrationType(): ?IntegrationType
    {
        /** @var IntegrationType|null $value */
        $value = $this->getAttribute('integrationType');

        return $value;
    }

    /**
     * Sets the integrationType value.
     *
     * @param IntegrationType|string|null $value New property value.
     * @return $this
     */
    public function setIntegrationType(IntegrationType|string|null $value): self
    {
        $this->setAttribute('integrationType', $value);

        return $this;
    }

    /**
     * Returns Parent owner company name of the Supplier. Defaults to brand name if unspecified..
     *
     * @return string|null
     */
    public function getOwner(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('owner');

        return $value;
    }

    /**
     * Sets Parent owner company name of the Supplier. Defaults to brand name if unspecified..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setOwner(?string $value): self
    {
        $this->setAttribute('owner', $value);

        return $this;
    }

    /**
     * Returns the state value.
     *
     * @return SupplierState|null
     */
    public function getState(): ?SupplierState
    {
        /** @var SupplierState|null $value */
        $value = $this->getAttribute('state');

        return $value;
    }

    /**
     * Sets the state value.
     *
     * @param SupplierState|string|null $value New property value.
     * @return $this
     */
    public function setState(SupplierState|string|null $value): self
    {
        $this->setAttribute('state', $value);

        return $this;
    }

    /**
     * Returns The unique identifier of the supplier (Long serialized as String)..
     *
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('supplierId');

        return $value;
    }

    /**
     * Sets The unique identifier of the supplier (Long serialized as String)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSupplierId(?string $value): self
    {
        $this->setAttribute('supplierId', $value);

        return $this;
    }

    /**
     * Returns Canonical display name of the Supplier. Normalized across systems..
     *
     * @return string|null
     */
    public function getSupplierName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('supplierName');

        return $value;
    }

    /**
     * Sets Canonical display name of the Supplier. Normalized across systems..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSupplierName(?string $value): self
    {
        $this->setAttribute('supplierName', $value);

        return $this;
    }

    /**
     * Returns the type value.
     *
     * @return SupplierType|null
     */
    public function getType(): ?SupplierType
    {
        /** @var SupplierType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param SupplierType|string|null $value New property value.
     * @return $this
     */
    public function setType(SupplierType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
