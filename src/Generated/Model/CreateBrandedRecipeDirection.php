<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents a single step in a recipe's directions.
 *
 * @generated from Amazon Ads API v1 schema CreateBrandedRecipeDirection.
 */
final class CreateBrandedRecipeDirection extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateBrandedRecipeDirection';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'body' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'title' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Detailed instruction text for the direction step..
     *
     * @return string|null
     */
    public function getBody(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('body');

        return $value;
    }

    /**
     * Sets Detailed instruction text for the direction step..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBody(?string $value): self
    {
        $this->setAttribute('body', $value);

        return $this;
    }

    /**
     * Returns Title or heading for the direction step..
     *
     * @return string|null
     */
    public function getTitle(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('title');

        return $value;
    }

    /**
     * Sets Title or heading for the direction step..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTitle(?string $value): self
    {
        $this->setAttribute('title', $value);

        return $this;
    }
}
