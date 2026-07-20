<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets ads in the specified fold position.
 *
 * @generated from Amazon Ads API v1 schema FoldPositionTarget.
 */
final class FoldPositionTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'FoldPositionTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'foldPosition' => [
            'type' => 'enum',
            'class' => FoldPosition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the foldPosition value.
     *
     * @return FoldPosition|null
     */
    public function getFoldPosition(): ?FoldPosition
    {
        /** @var FoldPosition|null $value */
        $value = $this->getAttribute('foldPosition');

        return $value;
    }

    /**
     * Sets the foldPosition value.
     *
     * @param FoldPosition|string|null $value New property value.
     * @return $this
     */
    public function setFoldPosition(FoldPosition|string|null $value): self
    {
        $this->setAttribute('foldPosition', $value);

        return $this;
    }
}
