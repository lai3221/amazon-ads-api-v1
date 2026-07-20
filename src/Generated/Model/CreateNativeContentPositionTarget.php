<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets ads to a specific native content position.
 *
 * @generated from Amazon Ads API v1 schema CreateNativeContentPositionTarget.
 */
final class CreateNativeContentPositionTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateNativeContentPositionTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'nativePosition' => [
            'type' => 'enum',
            'class' => NativeContentPosition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the nativePosition value.
     *
     * @return NativeContentPosition|null
     */
    public function getNativePosition(): ?NativeContentPosition
    {
        /** @var NativeContentPosition|null $value */
        $value = $this->getAttribute('nativePosition');

        return $value;
    }

    /**
     * Sets the nativePosition value.
     *
     * @param NativeContentPosition|string|null $value New property value.
     * @return $this
     */
    public function setNativePosition(NativeContentPosition|string|null $value): self
    {
        $this->setAttribute('nativePosition', $value);

        return $this;
    }
}
