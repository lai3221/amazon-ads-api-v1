<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on the rating of content being viewed.
 *
 * @generated from Amazon Ads API v1 schema CreateContentRatingTarget.
 */
final class CreateContentRatingTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateContentRatingTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'contentRatingType' => [
            'type' => 'enum',
            'class' => ContentRatingTypes::class,
            'required' => true,
            'nullable' => false,
        ],
        'contentRatingTypeDetails' => [
            'type' => 'model',
            'class' => CreateContentRating::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the contentRatingType value.
     *
     * @return ContentRatingTypes|null
     */
    public function getContentRatingType(): ?ContentRatingTypes
    {
        /** @var ContentRatingTypes|null $value */
        $value = $this->getAttribute('contentRatingType');

        return $value;
    }

    /**
     * Sets the contentRatingType value.
     *
     * @param ContentRatingTypes|string|null $value New property value.
     * @return $this
     */
    public function setContentRatingType(ContentRatingTypes|string|null $value): self
    {
        $this->setAttribute('contentRatingType', $value);

        return $this;
    }

    /**
     * Returns the contentRatingTypeDetails value.
     *
     * @return CreateContentRating|null
     */
    public function getContentRatingTypeDetails(): ?CreateContentRating
    {
        /** @var CreateContentRating|null $value */
        $value = $this->getAttribute('contentRatingTypeDetails');

        return $value;
    }

    /**
     * Sets the contentRatingTypeDetails value.
     *
     * @param CreateContentRating|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setContentRatingTypeDetails(CreateContentRating|array|null $value): self
    {
        $this->setAttribute('contentRatingTypeDetails', $value);

        return $this;
    }
}
