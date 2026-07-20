<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * A downloadable part of the generated report.
 *
 * @generated from Amazon Ads API v1 schema ReportPart.
 */
final class ReportPart extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportPart';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'sizeInBytes' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 9.2233720368548E+18,
        ],
        'url' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'urlExpirationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns Size of the part file in bytes, could reach up to 100GB..
     *
     * @return int|null
     */
    public function getSizeInBytes(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('sizeInBytes');

        return $value;
    }

    /**
     * Sets Size of the part file in bytes, could reach up to 100GB..
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setSizeInBytes(?int $value): self
    {
        $this->setAttribute('sizeInBytes', $value);

        return $this;
    }

    /**
     * Returns URL of the report part..
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
     * Sets URL of the report part..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setUrl(?string $value): self
    {
        $this->setAttribute('url', $value);

        return $this;
    }

    /**
     * Returns Expiration date and time when the above URL expires..
     *
     * @return \DateTimeImmutable|null
     */
    public function getUrlExpirationDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('urlExpirationDateTime');

        return $value;
    }

    /**
     * Sets Expiration date and time when the above URL expires..
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setUrlExpirationDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('urlExpirationDateTime', $value);

        return $this;
    }
}
