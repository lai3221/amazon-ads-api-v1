<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Custom data associated with the event to provide additional context.
 *
 * @generated from Amazon Ads API v1 schema CustomData.
 */
final class CustomData extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CustomData';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'dataType' => [
            'type' => 'enum',
            'class' => DataType::class,
            'required' => false,
            'nullable' => false,
        ],
        'name' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'value' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the dataType value.
     *
     * @return DataType|null
     */
    public function getDataType(): ?DataType
    {
        /** @var DataType|null $value */
        $value = $this->getAttribute('dataType');

        return $value;
    }

    /**
     * Sets the dataType value.
     *
     * @param DataType|string|null $value New property value.
     * @return $this
     */
    public function setDataType(DataType|string|null $value): self
    {
        $this->setAttribute('dataType', $value);

        return $this;
    }

    /**
     * Returns Name of the custom attribute. Only letters, numbers and the underscore character are allowed. e.g. brand, category, productId..
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
     * Sets Name of the custom attribute. Only letters, numbers and the underscore character are allowed. e.g. brand, category, productId..
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
     * Returns Value of the custom attribute. Only letters, numbers and the underscore character are allowed..
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('value');

        return $value;
    }

    /**
     * Sets Value of the custom attribute. Only letters, numbers and the underscore character are allowed..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setValue(?string $value): self
    {
        $this->setAttribute('value', $value);

        return $this;
    }
}
