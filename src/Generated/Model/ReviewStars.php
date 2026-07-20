<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Review information for a product.
 *
 * @generated from Amazon Ads API v1 schema ReviewStars.
 */
final class ReviewStars extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReviewStars';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'hasHalfStar' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'reviewCount' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
        'wholeStars' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Flag indicating if the product has a half star in the rating..
     *
     * @return bool|null
     */
    public function getHasHalfStar(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('hasHalfStar');

        return $value;
    }

    /**
     * Sets Flag indicating if the product has a half star in the rating..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setHasHalfStar(?bool $value): self
    {
        $this->setAttribute('hasHalfStar', $value);

        return $this;
    }

    /**
     * Returns Number of reviews for the product..
     *
     * @return int|null
     */
    public function getReviewCount(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('reviewCount');

        return $value;
    }

    /**
     * Sets Number of reviews for the product..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setReviewCount(?int $value): self
    {
        $this->setAttribute('reviewCount', $value);

        return $this;
    }

    /**
     * Returns Number of whole stars in the rating..
     *
     * @return int|null
     */
    public function getWholeStars(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('wholeStars');

        return $value;
    }

    /**
     * Sets Number of whole stars in the rating..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setWholeStars(?int $value): self
    {
        $this->setAttribute('wholeStars', $value);

        return $this;
    }
}
