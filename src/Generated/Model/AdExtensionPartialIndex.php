<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the AdExtensionPartialIndex schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema AdExtensionPartialIndex.
 */
final class AdExtensionPartialIndex extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdExtensionPartialIndex';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adExtension' => [
            'type' => 'model',
            'class' => AdExtension::class,
            'required' => true,
            'nullable' => false,
        ],
        'errors' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => Error::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 20,
        ],
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 49,
        ],
    ];

    /**
     * Returns the adExtension value.
     *
     * @return AdExtension|null
     */
    public function getAdExtension(): ?AdExtension
    {
        /** @var AdExtension|null $value */
        $value = $this->getAttribute('adExtension');

        return $value;
    }

    /**
     * Sets the adExtension value.
     *
     * @param AdExtension|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setAdExtension(AdExtension|array|null $value): self
    {
        $this->setAttribute('adExtension', $value);

        return $this;
    }

    /**
     * Returns the errors value.
     *
     * @return list<Error>|null
     */
    public function getErrors(): ?array
    {
        /** @var list<Error>|null $value */
        $value = $this->getAttribute('errors');

        return $value;
    }

    /**
     * Sets the errors value.
     *
     * @param list<Error>|null $value New property value.
     * @return $this
     */
    public function setErrors(?array $value): self
    {
        $this->setAttribute('errors', $value);

        return $this;
    }

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
}
