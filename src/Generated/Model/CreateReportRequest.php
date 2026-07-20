<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the CreateReportRequest schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema CreateReportRequest.
 */
final class CreateReportRequest extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateReportRequest';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'accessRequestedAccounts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ReportCreateAccessRequestedAccountItem::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 2000,
        ],
        'reports' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ReportCreate::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
    ];

    /**
     * Returns the accessRequestedAccounts value.
     *
     * @return list<ReportCreateAccessRequestedAccountItem>|null
     */
    public function getAccessRequestedAccounts(): ?array
    {
        /** @var list<ReportCreateAccessRequestedAccountItem>|null $value */
        $value = $this->getAttribute('accessRequestedAccounts');

        return $value;
    }

    /**
     * Sets the accessRequestedAccounts value.
     *
     * @param list<ReportCreateAccessRequestedAccountItem>|null $value New property value.
     * @return $this
     */
    public function setAccessRequestedAccounts(?array $value): self
    {
        $this->setAttribute('accessRequestedAccounts', $value);

        return $this;
    }

    /**
     * Returns the reports value.
     *
     * @return list<ReportCreate>|null
     */
    public function getReports(): ?array
    {
        /** @var list<ReportCreate>|null $value */
        $value = $this->getAttribute('reports');

        return $value;
    }

    /**
     * Sets the reports value.
     *
     * @param list<ReportCreate>|null $value New property value.
     * @return $this
     */
    public function setReports(?array $value): self
    {
        $this->setAttribute('reports', $value);

        return $this;
    }
}
