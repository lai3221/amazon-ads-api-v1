<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A CTA that directs a customer to a provided url.
 *
 * @generated from Amazon Ads API v1 schema UpdateAssetBasedCreativeCallToActionSettings.
 */
final class UpdateAssetBasedCreativeCallToActionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'UpdateAssetBasedCreativeCallToActionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'callToActionType' => [
            'type' => 'array',
            'items' => [
                'type' => 'enum',
                'class' => AssetBasedCreativeCallToActionType::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 5,
        ],
        'deepLinkingBehavior' => [
            'type' => 'enum',
            'class' => DeepLinkingBehavior::class,
            'required' => false,
            'nullable' => false,
        ],
        'url' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Type of CallToAction for AssetBasedCreative..
     *
     * @return list<AssetBasedCreativeCallToActionType>|null
     */
    public function getCallToActionType(): ?array
    {
        /** @var list<AssetBasedCreativeCallToActionType>|null $value */
        $value = $this->getAttribute('callToActionType');

        return $value;
    }

    /**
     * Sets Type of CallToAction for AssetBasedCreative..
     *
     * @param list<AssetBasedCreativeCallToActionType>|null $value New property value.
     * @return $this
     */
    public function setCallToActionType(?array $value): self
    {
        $this->setAttribute('callToActionType', $value);

        return $this;
    }

    /**
     * Returns the deepLinkingBehavior value.
     *
     * @return DeepLinkingBehavior|null
     */
    public function getDeepLinkingBehavior(): ?DeepLinkingBehavior
    {
        /** @var DeepLinkingBehavior|null $value */
        $value = $this->getAttribute('deepLinkingBehavior');

        return $value;
    }

    /**
     * Sets the deepLinkingBehavior value.
     *
     * @param DeepLinkingBehavior|string|null $value New property value.
     * @return $this
     */
    public function setDeepLinkingBehavior(DeepLinkingBehavior|string|null $value): self
    {
        $this->setAttribute('deepLinkingBehavior', $value);

        return $this;
    }

    /**
     * Returns The application url that customers are directed to..
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('url');

        return $value;
    }

    /**
     * Sets The application url that customers are directed to..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUrl(?string $value): self
    {
        $this->setAttribute('url', $value);

        return $this;
    }
}
