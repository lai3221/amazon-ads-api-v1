<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the genre of content being viewed.
 *
 * @generated from Amazon Ads API v1 schema ContentGenreTarget.
 */
final class ContentGenreTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentGenreTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'contentGenre' => [
            'type' => 'enum',
            'class' => ContentGenre::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the contentGenre value.
     *
     * @return ContentGenre|null
     */
    public function getContentGenre(): ?ContentGenre
    {
        /** @var ContentGenre|null $value */
        $value = $this->getAttribute('contentGenre');

        return $value;
    }

    /**
     * Sets the contentGenre value.
     *
     * @param ContentGenre|string|null $value New property value.
     * @return $this
     */
    public function setContentGenre(ContentGenre|string|null $value): self
    {
        $this->setAttribute('contentGenre', $value);

        return $this;
    }
}
