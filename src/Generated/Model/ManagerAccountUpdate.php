<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ManagerAccountUpdate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ManagerAccountUpdate.
 */
final class ManagerAccountUpdate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ManagerAccountUpdate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'managerAccountId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The identifier of the manager account..
     *
     * @return string|null
     */
    public function getManagerAccountId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('managerAccountId');

        return $value;
    }

    /**
     * Sets The identifier of the manager account..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setManagerAccountId(?string $value): self
    {
        $this->setAttribute('managerAccountId', $value);

        return $this;
    }
}
