<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets ads in the specified content instream position.
 *
 * @generated from Amazon Ads API v1 schema ContentInstreamPositionTarget.
 */
final class ContentInstreamPositionTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ContentInstreamPositionTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'instreamPosition' => [
            'type' => 'enum',
            'class' => ContentInstreamPosition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the instreamPosition value.
     *
     * @return ContentInstreamPosition|null
     */
    public function getInstreamPosition(): ?ContentInstreamPosition
    {
        /** @var ContentInstreamPosition|null $value */
        $value = $this->getAttribute('instreamPosition');

        return $value;
    }

    /**
     * Sets the instreamPosition value.
     *
     * @param ContentInstreamPosition|string|null $value New property value.
     * @return $this
     */
    public function setInstreamPosition(ContentInstreamPosition|string|null $value): self
    {
        $this->setAttribute('instreamPosition', $value);

        return $this;
    }
}
