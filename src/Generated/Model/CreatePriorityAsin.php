<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Product information for a priority ASIN.
 *
 * @generated from Amazon Ads API v1 schema CreatePriorityAsin.
 */
final class CreatePriorityAsin extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreatePriorityAsin';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'addToCartActionParams' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'bottleDepositFee' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'bottleDepositFeeString' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'cartQuantity' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'catalogDisplayPricePerUnitOfMeasure' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'freshButton' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'isAlternateSearchResult' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'isRequiredQuantityInCart' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'isSoldByCount' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
        'itemAvailability' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'offerId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'offerName' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'offerUnit' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'productAsin' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'productDetailsUrl' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'productImageUrl' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'promotionDisplay' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'promotionId' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'quantityInStock' => [
            'type' => 'number',
            'required' => false,
            'nullable' => false,
        ],
        'requiredQuantity' => [
            'type' => 'number',
            'required' => true,
            'nullable' => false,
        ],
        'retailATCButton' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'reviewStars' => [
            'type' => 'model',
            'class' => CreateReviewStars::class,
            'required' => false,
            'nullable' => false,
        ],
        'searchTerm' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'subtotalParams' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'vuomDisplayPrice' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Parameters for add to cart action..
     *
     * @return string|null
     */
    public function getAddToCartActionParams(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('addToCartActionParams');

        return $value;
    }

    /**
     * Sets Parameters for add to cart action..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setAddToCartActionParams(?string $value): self
    {
        $this->setAttribute('addToCartActionParams', $value);

        return $this;
    }

    /**
     * Returns Bottle deposit fee amount..
     *
     * @return string|null
     */
    public function getBottleDepositFee(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('bottleDepositFee');

        return $value;
    }

    /**
     * Sets Bottle deposit fee amount..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBottleDepositFee(?string $value): self
    {
        $this->setAttribute('bottleDepositFee', $value);

        return $this;
    }

    /**
     * Returns Bottle deposit fee as string..
     *
     * @return string|null
     */
    public function getBottleDepositFeeString(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('bottleDepositFeeString');

        return $value;
    }

    /**
     * Sets Bottle deposit fee as string..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setBottleDepositFeeString(?string $value): self
    {
        $this->setAttribute('bottleDepositFeeString', $value);

        return $this;
    }

    /**
     * Returns Quantity of this item in the cart..
     *
     * @return int|float|null
     */
    public function getCartQuantity(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('cartQuantity');

        return $value;
    }

    /**
     * Sets Quantity of this item in the cart..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setCartQuantity(int|float|null $value): self
    {
        $this->setAttribute('cartQuantity', $value);

        return $this;
    }

    /**
     * Returns Price per unit of measure for display..
     *
     * @return string|null
     */
    public function getCatalogDisplayPricePerUnitOfMeasure(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('catalogDisplayPricePerUnitOfMeasure');

        return $value;
    }

    /**
     * Sets Price per unit of measure for display..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setCatalogDisplayPricePerUnitOfMeasure(?string $value): self
    {
        $this->setAttribute('catalogDisplayPricePerUnitOfMeasure', $value);

        return $this;
    }

    /**
     * Returns Fresh button information..
     *
     * @return string|null
     */
    public function getFreshButton(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('freshButton');

        return $value;
    }

    /**
     * Sets Fresh button information..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFreshButton(?string $value): self
    {
        $this->setAttribute('freshButton', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if this is an alternate search result..
     *
     * @return bool|null
     */
    public function getIsAlternateSearchResult(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isAlternateSearchResult');

        return $value;
    }

    /**
     * Sets Flag indicating if this is an alternate search result..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsAlternateSearchResult(?bool $value): self
    {
        $this->setAttribute('isAlternateSearchResult', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if a quantity is required in cart..
     *
     * @return bool|null
     */
    public function getIsRequiredQuantityInCart(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isRequiredQuantityInCart');

        return $value;
    }

    /**
     * Sets Flag indicating if a quantity is required in cart..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsRequiredQuantityInCart(?bool $value): self
    {
        $this->setAttribute('isRequiredQuantityInCart', $value);

        return $this;
    }

    /**
     * Returns Flag indicating if the product is sold by count..
     *
     * @return bool|null
     */
    public function getIsSoldByCount(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isSoldByCount');

        return $value;
    }

    /**
     * Sets Flag indicating if the product is sold by count..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsSoldByCount(?bool $value): self
    {
        $this->setAttribute('isSoldByCount', $value);

        return $this;
    }

    /**
     * Returns Status of item availability..
     *
     * @return string|null
     */
    public function getItemAvailability(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('itemAvailability');

        return $value;
    }

    /**
     * Sets Status of item availability..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setItemAvailability(?string $value): self
    {
        $this->setAttribute('itemAvailability', $value);

        return $this;
    }

    /**
     * Returns Unique identifier for the offer..
     *
     * @return string|null
     */
    public function getOfferId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('offerId');

        return $value;
    }

    /**
     * Sets Unique identifier for the offer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setOfferId(?string $value): self
    {
        $this->setAttribute('offerId', $value);

        return $this;
    }

    /**
     * Returns Display name of the product offer..
     *
     * @return string|null
     */
    public function getOfferName(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('offerName');

        return $value;
    }

    /**
     * Sets Display name of the product offer..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setOfferName(?string $value): self
    {
        $this->setAttribute('offerName', $value);

        return $this;
    }

    /**
     * Returns Unit of the offer (e.g., Fl Oz, lb)..
     *
     * @return string|null
     */
    public function getOfferUnit(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('offerUnit');

        return $value;
    }

    /**
     * Sets Unit of the offer (e.g., Fl Oz, lb)..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setOfferUnit(?string $value): self
    {
        $this->setAttribute('offerUnit', $value);

        return $this;
    }

    /**
     * Returns ASIN associated with this product..
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
     * Sets ASIN associated with this product..
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
     * Returns URL to the product details page..
     *
     * @return string|null
     */
    public function getProductDetailsUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productDetailsUrl');

        return $value;
    }

    /**
     * Sets URL to the product details page..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductDetailsUrl(?string $value): self
    {
        $this->setAttribute('productDetailsUrl', $value);

        return $this;
    }

    /**
     * Returns URL of the product image..
     *
     * @return string|null
     */
    public function getProductImageUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('productImageUrl');

        return $value;
    }

    /**
     * Sets URL of the product image..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setProductImageUrl(?string $value): self
    {
        $this->setAttribute('productImageUrl', $value);

        return $this;
    }

    /**
     * Returns Display text for active promotion..
     *
     * @return string|null
     */
    public function getPromotionDisplay(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionDisplay');

        return $value;
    }

    /**
     * Sets Display text for active promotion..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionDisplay(?string $value): self
    {
        $this->setAttribute('promotionDisplay', $value);

        return $this;
    }

    /**
     * Returns Identifier for active promotion..
     *
     * @return string|null
     */
    public function getPromotionId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('promotionId');

        return $value;
    }

    /**
     * Sets Identifier for active promotion..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPromotionId(?string $value): self
    {
        $this->setAttribute('promotionId', $value);

        return $this;
    }

    /**
     * Returns Available quantity in stock..
     *
     * @return int|float|null
     */
    public function getQuantityInStock(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('quantityInStock');

        return $value;
    }

    /**
     * Sets Available quantity in stock..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setQuantityInStock(int|float|null $value): self
    {
        $this->setAttribute('quantityInStock', $value);

        return $this;
    }

    /**
     * Returns Required quantity for purchase..
     *
     * @return int|float|null
     */
    public function getRequiredQuantity(): int|float|null
    {
        /** @var int|float|null $value */
        $value = $this->getAttribute('requiredQuantity');

        return $value;
    }

    /**
     * Sets Required quantity for purchase..
     *
     * @param int|float|null $value New property value.
     * @return $this
     */
    public function setRequiredQuantity(int|float|null $value): self
    {
        $this->setAttribute('requiredQuantity', $value);

        return $this;
    }

    /**
     * Returns Retail add-to-cart button information..
     *
     * @return string|null
     */
    public function getRetailATCButton(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('retailATCButton');

        return $value;
    }

    /**
     * Sets Retail add-to-cart button information..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setRetailATCButton(?string $value): self
    {
        $this->setAttribute('retailATCButton', $value);

        return $this;
    }

    /**
     * Returns the reviewStars value.
     *
     * @return CreateReviewStars|null
     */
    public function getReviewStars(): ?CreateReviewStars
    {
        /** @var CreateReviewStars|null $value */
        $value = $this->getAttribute('reviewStars');

        return $value;
    }

    /**
     * Sets the reviewStars value.
     *
     * @param CreateReviewStars|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setReviewStars(CreateReviewStars|array|null $value): self
    {
        $this->setAttribute('reviewStars', $value);

        return $this;
    }

    /**
     * Returns Search term associated with this product..
     *
     * @return string|null
     */
    public function getSearchTerm(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('searchTerm');

        return $value;
    }

    /**
     * Sets Search term associated with this product..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSearchTerm(?string $value): self
    {
        $this->setAttribute('searchTerm', $value);

        return $this;
    }

    /**
     * Returns Subtotal parameters for pricing calculations..
     *
     * @return string|null
     */
    public function getSubtotalParams(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('subtotalParams');

        return $value;
    }

    /**
     * Sets Subtotal parameters for pricing calculations..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setSubtotalParams(?string $value): self
    {
        $this->setAttribute('subtotalParams', $value);

        return $this;
    }

    /**
     * Returns Display price for virtual unit of measure..
     *
     * @return string|null
     */
    public function getVuomDisplayPrice(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('vuomDisplayPrice');

        return $value;
    }

    /**
     * Sets Display price for virtual unit of measure..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setVuomDisplayPrice(?string $value): self
    {
        $this->setAttribute('vuomDisplayPrice', $value);

        return $this;
    }
}
