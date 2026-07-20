<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets domains based on an existing domain list.
 *
 * @generated from Amazon Ads API v1 schema DomainListTarget.
 */
final class DomainListTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DomainListTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'domainListId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The ID of the domain list to target..
     *
     * @return string|null
     */
    public function getDomainListId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domainListId');

        return $value;
    }

    /**
     * Sets The ID of the domain list to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomainListId(?string $value): self
    {
        $this->setAttribute('domainListId', $value);

        return $this;
    }
}
