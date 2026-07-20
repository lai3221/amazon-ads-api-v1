<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateStoreCustomCodeContent schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateStoreCustomCodeContent.
 */
final class CreateStoreCustomCodeContent extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateStoreCustomCodeContent';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'autoDimension' => [
            'type' => 'boolean',
            'required' => false,
            'nullable' => false,
        ],
        'availableProductAsins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 500,
        ],
        'cti' => [
            'type' => 'model',
            'class' => CreateCTI::class,
            'required' => false,
            'nullable' => false,
        ],
        'embedCode' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'integrity' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'widgetName' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'widgetTag' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Whether to use automatic dimensioning..
     *
     * @return bool|null
     */
    public function getAutoDimension(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('autoDimension');

        return $value;
    }

    /**
     * Sets Whether to use automatic dimensioning..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setAutoDimension(?bool $value): self
    {
        $this->setAttribute('autoDimension', $value);

        return $this;
    }

    /**
     * Returns List of available ASINs, maximum 500 unique items..
     *
     * @return list<string>|null
     */
    public function getAvailableProductAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('availableProductAsins');

        return $value;
    }

    /**
     * Sets List of available ASINs, maximum 500 unique items..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAvailableProductAsins(?array $value): self
    {
        $this->setAttribute('availableProductAsins', $value);

        return $this;
    }

    /**
     * Returns the cti value.
     *
     * @return CreateCTI|null
     */
    public function getCti(): ?CreateCTI
    {
        /** @var CreateCTI|null $value */
        $value = $this->getAttribute('cti');

        return $value;
    }

    /**
     * Sets the cti value.
     *
     * @param CreateCTI|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setCti(CreateCTI|array|null $value): self
    {
        $this->setAttribute('cti', $value);

        return $this;
    }

    /**
     * Returns Embedded code content..
     *
     * @return string|null
     */
    public function getEmbedCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('embedCode');

        return $value;
    }

    /**
     * Sets Embedded code content..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setEmbedCode(?string $value): self
    {
        $this->setAttribute('embedCode', $value);

        return $this;
    }

    /**
     * Returns Integrity hash for security..
     *
     * @return string|null
     */
    public function getIntegrity(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('integrity');

        return $value;
    }

    /**
     * Sets Integrity hash for security..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setIntegrity(?string $value): self
    {
        $this->setAttribute('integrity', $value);

        return $this;
    }

    /**
     * Returns Name of the widget..
     *
     * @return string|null
     */
    public function getWidgetName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('widgetName');

        return $value;
    }

    /**
     * Sets Name of the widget..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setWidgetName(?string $value): self
    {
        $this->setAttribute('widgetName', $value);

        return $this;
    }

    /**
     * Returns Widget identifier..
     *
     * @return string|null
     */
    public function getWidgetTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('widgetTag');

        return $value;
    }

    /**
     * Sets Widget identifier..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setWidgetTag(?string $value): self
    {
        $this->setAttribute('widgetTag', $value);

        return $this;
    }
}
