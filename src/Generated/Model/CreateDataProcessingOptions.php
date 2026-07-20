<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A list of data processing options.
 *
 * @generated from Amazon Ads API v1 schema CreateDataProcessingOptions.
 */
final class CreateDataProcessingOptions extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateDataProcessingOptions';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'options' => [
            'type' => 'enum',
            'class' => DataProcessingOption::class,
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the options value.
     *
     * @return DataProcessingOption|null
     */
    public function getOptions(): ?DataProcessingOption
    {
        /** @var DataProcessingOption|null $value */
        $value = $this->getAttribute('options');

        return $value;
    }

    /**
     * Sets the options value.
     *
     * @param DataProcessingOption|string|null $value New property value.
     * @return $this
     */
    public function setOptions(DataProcessingOption|string|null $value): self
    {
        $this->setAttribute('options', $value);

        return $this;
    }
}
