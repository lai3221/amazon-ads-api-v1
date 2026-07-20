<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTwitchContentRating schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTwitchContentRating.
 */
final class CreateTwitchContentRating extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTwitchContentRating';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'twitchContentRating' => [
            'type' => 'enum',
            'class' => TwitchContentRatingEnum::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the twitchContentRating value.
     *
     * @return TwitchContentRatingEnum|null
     */
    public function getTwitchContentRating(): ?TwitchContentRatingEnum
    {
        /** @var TwitchContentRatingEnum|null $value */
        $value = $this->getAttribute('twitchContentRating');

        return $value;
    }

    /**
     * Sets the twitchContentRating value.
     *
     * @param TwitchContentRatingEnum|string|null $value New property value.
     * @return $this
     */
    public function setTwitchContentRating(TwitchContentRatingEnum|string|null $value): self
    {
        $this->setAttribute('twitchContentRating', $value);

        return $this;
    }
}
