<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ManagerAccountMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ManagerAccountMultiStatusSuccess.
 */
final class ManagerAccountMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ManagerAccountMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9,
        ],
        'managerAccount' => [
            'type' => 'model',
            'class' => ManagerAccount::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

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

    /**
     * Returns the managerAccount value.
     *
     * @return ManagerAccount|null
     */
    public function getManagerAccount(): ?ManagerAccount
    {
        /** @var ManagerAccount|null $value */
        $value = $this->getAttribute('managerAccount');

        return $value;
    }

    /**
     * Sets the managerAccount value.
     *
     * @param ManagerAccount|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setManagerAccount(ManagerAccount|array|null $value): self
    {
        $this->setAttribute('managerAccount', $value);

        return $this;
    }
}
