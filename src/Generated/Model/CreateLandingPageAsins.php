<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateLandingPageAsins schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateLandingPageAsins.
 */
final class CreateLandingPageAsins extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateLandingPageAsins';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'asins' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 100,
        ],
    ];

    /**
     * Returns For landing page of type ASIN LIST, the list of ASINs used to create the landing page..
     *
     * @return list<string>|null
     */
    public function getAsins(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('asins');

        return $value;
    }

    /**
     * Sets For landing page of type ASIN LIST, the list of ASINs used to create the landing page..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setAsins(?array $value): self
    {
        $this->setAttribute('asins', $value);

        return $this;
    }
}
