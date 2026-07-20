<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Version information for a store page.
 *
 * @generated from Amazon Ads API v1 schema StorePageVersion.
 */
final class StorePageVersion extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StorePageVersion';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'pageId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'version' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Identifier of the page..
     *
     * @return string|null
     */
    public function getPageId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('pageId');

        return $value;
    }

    /**
     * Sets Identifier of the page..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setPageId(?string $value): self
    {
        $this->setAttribute('pageId', $value);

        return $this;
    }

    /**
     * Returns Version number of the page..
     *
     * @return int|null
     */
    public function getVersion(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('version');

        return $value;
    }

    /**
     * Sets Version number of the page..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setVersion(?int $value): self
    {
        $this->setAttribute('version', $value);

        return $this;
    }
}
