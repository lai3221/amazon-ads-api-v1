<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateManagerAccountRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateManagerAccountRequest.
 */
final class CreateManagerAccountRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateManagerAccountRequest';

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
                'class' => ManagerAccountCreate::class,
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
     * @return list<ManagerAccountCreate>|null
     */
    public function getManagerAccounts(): ?array
    {
        /** @var list<ManagerAccountCreate>|null $value */
        $value = $this->getAttribute('managerAccounts');

        return $value;
    }

    /**
     * Sets the managerAccounts value.
     *
     * @param list<ManagerAccountCreate>|null $value New property value.
     * @return $this
     */
    public function setManagerAccounts(?array $value): self
    {
        $this->setAttribute('managerAccounts', $value);

        return $this;
    }
}
