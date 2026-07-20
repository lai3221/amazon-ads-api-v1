<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the RetrieveReportRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema RetrieveReportRequest.
 */
final class RetrieveReportRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RetrieveReportRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'reportIds' => [
            'type' => 'array',
            'items' => [
                'type' => 'string',
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the reportIds value.
     *
     * @return list<string>|null
     */
    public function getReportIds(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('reportIds');

        return $value;
    }

    /**
     * Sets the reportIds value.
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setReportIds(?array $value): self
    {
        $this->setAttribute('reportIds', $value);

        return $this;
    }
}
