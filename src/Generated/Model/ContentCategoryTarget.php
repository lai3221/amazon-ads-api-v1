<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the category of content being viewed.
 *
 * @generated from Amazon Ads API v1 schema ContentCategoryTarget.
 */
final class ContentCategoryTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentCategoryTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'contentCategoryId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The content category being targeted..
     *
     * @return string|null
     */
    public function getContentCategoryId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('contentCategoryId');

        return $value;
    }

    /**
     * Sets The content category being targeted..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setContentCategoryId(?string $value): self
    {
        $this->setAttribute('contentCategoryId', $value);

        return $this;
    }
}
