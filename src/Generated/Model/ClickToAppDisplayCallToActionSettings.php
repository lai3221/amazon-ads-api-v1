<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A CTA that directs a customer to a provided url.
 *
 * @generated from Amazon Ads API v1 schema ClickToAppDisplayCallToActionSettings.
 */
final class ClickToAppDisplayCallToActionSettings extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ClickToAppDisplayCallToActionSettings';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'deepLinkingBehavior' => [
            'type' => 'enum',
            'class' => DeepLinkingBehavior::class,
            'required' => true,
            'nullable' => false,
        ],
        'url' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

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
     * Returns The app that customers are directed to..
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
     * Sets The app that customers are directed to..
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
