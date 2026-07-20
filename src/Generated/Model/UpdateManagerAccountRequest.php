<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the UpdateManagerAccountRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema UpdateManagerAccountRequest.
 */
final class UpdateManagerAccountRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateManagerAccountRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'managerAccounts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ManagerAccountUpdate::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Returns the managerAccounts value.
     *
     * @return list<ManagerAccountUpdate>|null
     */
    public function getManagerAccounts(): ?array
    {
        /** @var list<ManagerAccountUpdate>|null $value */
        $value = $this->getAttribute('managerAccounts');

        return $value;
    }

    /**
     * Sets the managerAccounts value.
     *
     * @param list<ManagerAccountUpdate>|null $value New property value.
     * @return $this
     */
    public function setManagerAccounts(?array $value): self
    {
        $this->setAttribute('managerAccounts', $value);

        return $this;
    }
}
