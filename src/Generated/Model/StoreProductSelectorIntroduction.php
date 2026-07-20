<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Introduction section for the product selector widget.
 *
 * @generated from Amazon Ads API v1 schema StoreProductSelectorIntroduction.
 */
final class StoreProductSelectorIntroduction extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreProductSelectorIntroduction';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'buttonText' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'heading' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'headline' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'imageOptions' => [
            'type' => 'model',
            'class' => StoreProductSelectorImageOptions::class,
            'required' => true,
            'nullable' => false,
        ],
        'isEnabled' => [
            'type' => 'boolean',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Text displayed on the introduction button..
     *
     * @return string|null
     */
    public function getButtonText(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('buttonText');

        return $value;
    }

    /**
     * Sets Text displayed on the introduction button..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setButtonText(?string $value): self
    {
        $this->setAttribute('buttonText', $value);

        return $this;
    }

    /**
     * Returns Description text for the introduction section..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets Description text for the introduction section..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns Heading text for the introduction section..
     *
     * @return string|null
     */
    public function getHeading(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('heading');

        return $value;
    }

    /**
     * Sets Heading text for the introduction section..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeading(?string $value): self
    {
        $this->setAttribute('heading', $value);

        return $this;
    }

    /**
     * Returns Headline text for the introduction section..
     *
     * @return string|null
     */
    public function getHeadline(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('headline');

        return $value;
    }

    /**
     * Sets Headline text for the introduction section..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setHeadline(?string $value): self
    {
        $this->setAttribute('headline', $value);

        return $this;
    }

    /**
     * Returns the imageOptions value.
     *
     * @return StoreProductSelectorImageOptions|null
     */
    public function getImageOptions(): ?StoreProductSelectorImageOptions
    {
        /** @var StoreProductSelectorImageOptions|null $value */
        $value = $this->getAttribute('imageOptions');

        return $value;
    }

    /**
     * Sets the imageOptions value.
     *
     * @param StoreProductSelectorImageOptions|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setImageOptions(StoreProductSelectorImageOptions|array|null $value): self
    {
        $this->setAttribute('imageOptions', $value);

        return $this;
    }

    /**
     * Returns Flag indicating whether the introduction is enabled..
     *
     * @return bool|null
     */
    public function getIsEnabled(): ?bool
    {
        /** @var bool|null $value */
        $value = $this->getAttribute('isEnabled');

        return $value;
    }

    /**
     * Sets Flag indicating whether the introduction is enabled..
     *
     * @param bool|null $value New property value.
     * @return $this
     */
    public function setIsEnabled(?bool $value): self
    {
        $this->setAttribute('isEnabled', $value);

        return $this;
    }
}
