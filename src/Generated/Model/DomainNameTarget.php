<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets domains based on URL.
 *
 * @generated from Amazon Ads API v1 schema DomainNameTarget.
 */
final class DomainNameTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DomainNameTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'domainName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The URL of the domain to target..
     *
     * @return string|null
     */
    public function getDomainName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('domainName');

        return $value;
    }

    /**
     * Sets The URL of the domain to target..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDomainName(?string $value): self
    {
        $this->setAttribute('domainName', $value);

        return $this;
    }
}
