<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateTag schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateTag.
 */
final class CreateTag extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateTag';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'key' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'value' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns A custom key value pair entered by the advertiser. For ADSP Campaigns and Ad Groups, Amazon creates a COMMENTS key when the Comments field is populated in UI..
     *
     * @return string|null
     */
    public function getKey(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('key');

        return $value;
    }

    /**
     * Sets A custom key value pair entered by the advertiser. For ADSP Campaigns and Ad Groups, Amazon creates a COMMENTS key when the Comments field is populated in UI..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setKey(?string $value): self
    {
        $this->setAttribute('key', $value);

        return $this;
    }

    /**
     * Returns A custom key value pair entered by the advertiser..
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('value');

        return $value;
    }

    /**
     * Sets A custom key value pair entered by the advertiser..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setValue(?string $value): self
    {
        $this->setAttribute('value', $value);

        return $this;
    }
}
