<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the StoreASINSlide schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema StoreASINSlide.
 */
final class StoreASINSlide extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreASINSlide';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'productAsin' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'tag' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'type' => [
            'type' => 'enum',
            'class' => StoreSlideType::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns The ASIN of the product..
     *
     * @return string|null
     */
    public function getProductAsin(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productAsin');

        return $value;
    }

    /**
     * Sets The ASIN of the product..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductAsin(?string $value): self
    {
        $this->setAttribute('productAsin', $value);

        return $this;
    }

    /**
     * Returns Unique tag for the slide which will be ASIN..
     *
     * @return string|null
     */
    public function getTag(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('tag');

        return $value;
    }

    /**
     * Sets Unique tag for the slide which will be ASIN..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setTag(?string $value): self
    {
        $this->setAttribute('tag', $value);

        return $this;
    }

    /**
     * Returns the type value.
     *
     * @return StoreSlideType|null
     */
    public function getType(): ?StoreSlideType
    {
        /** @var StoreSlideType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param StoreSlideType|string|null $value New property value.
     * @return $this
     */
    public function setType(StoreSlideType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }
}
