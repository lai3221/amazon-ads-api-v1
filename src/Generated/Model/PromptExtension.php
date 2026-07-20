<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Prompts Ad Extension.
 *
 * @generated from Amazon Ads API v1 schema PromptExtension.
 */
final class PromptExtension extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'PromptExtension';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'promptText' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The prompt text rendered in the ads..
     *
     * @return string|null
     */
    public function getPromptText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promptText');

        return $value;
    }

    /**
     * Sets The prompt text rendered in the ads..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromptText(?string $value): self
    {
        $this->setAttribute('promptText', $value);

        return $this;
    }
}
