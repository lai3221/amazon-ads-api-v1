<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the DeleteAdRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema DeleteAdRequest.
 */
final class DeleteAdRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DeleteAdRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'adIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Returns the adIds value.
     *
     * @return list<string>|null
     */
    public function getAdIds(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('adIds');

        return $value;
    }

    /**
     * Sets the adIds value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAdIds(?array $value): self
    {
        $this->setAttribute('adIds', $value);

        return $this;
    }
}
