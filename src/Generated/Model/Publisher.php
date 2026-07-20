<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Publisher schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Publisher.
 */
final class Publisher extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Publisher';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'name' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'rootDomain' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Normalized publisher name. NULL when isConfidential is true..
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets Normalized publisher name. NULL when isConfidential is true..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setName(?string $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }

    /**
     * Returns Root domain from ads.txt. PSL+1 root. NULL for app-only publishers..
     *
     * @return string|null
     */
    public function getRootDomain(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('rootDomain');

        return $value;
    }

    /**
     * Sets Root domain from ads.txt. PSL+1 root. NULL for app-only publishers..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setRootDomain(?string $value): self
    {
        $this->setAttribute('rootDomain', $value);

        return $this;
    }
}
