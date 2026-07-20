<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CTI schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CTI.
 */
final class CTI extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CTI';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'category' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'item' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Category identifier..
     *
     * @return string|null
     */
    public function getCategory(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('category');

        return $value;
    }

    /**
     * Sets Category identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCategory(?string $value): self
    {
        $this->setAttribute('category', $value);

        return $this;
    }

    /**
     * Returns Item identifier..
     *
     * @return string|null
     */
    public function getItem(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('item');

        return $value;
    }

    /**
     * Sets Item identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setItem(?string $value): self
    {
        $this->setAttribute('item', $value);

        return $this;
    }

    /**
     * Returns Type identifier..
     *
     * @return string|null
     */
    public function getType(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets Type identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setType(?string $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
