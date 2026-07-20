<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Targets ads in the specified content outstream position.
 *
 * @generated from Amazon Ads API v1 schema CreateContentOutstreamPositionTarget.
 */
final class CreateContentOutstreamPositionTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateContentOutstreamPositionTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'outstreamPosition' => [
            'type' => 'enum',
            'class' => ContentOutstreamPosition::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the outstreamPosition value.
     *
     * @return ContentOutstreamPosition|null
     */
    public function getOutstreamPosition(): ?ContentOutstreamPosition
    {
        /** @var ContentOutstreamPosition|null $value */
        $value = $this->getAttribute('outstreamPosition');

        return $value;
    }

    /**
     * Sets the outstreamPosition value.
     *
     * @param ContentOutstreamPosition|string|null $value New property value.
     * @return $this
     */
    public function setOutstreamPosition(ContentOutstreamPosition|string|null $value): self
    {
        $this->setAttribute('outstreamPosition', $value);

        return $this;
    }
}
