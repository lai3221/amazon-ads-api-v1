<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateSize schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateSize.
 */
final class CreateSize extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateSize';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'height' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
        'width' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The height of the creative placement..
     *
     * @return int|null
     */
    public function getHeight(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('height');

        return $value;
    }

    /**
     * Sets The height of the creative placement..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setHeight(?int $value): self
    {
        $this->setAttribute('height', $value);

        return $this;
    }

    /**
     * Returns The width of the creative placement..
     *
     * @return int|null
     */
    public function getWidth(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('width');

        return $value;
    }

    /**
     * Sets The width of the creative placement..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setWidth(?int $value): self
    {
        $this->setAttribute('width', $value);

        return $this;
    }
}
