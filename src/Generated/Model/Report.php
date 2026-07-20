<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the Report schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema Report.
 */
final class Report extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'Report';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'completedDateTime' => [
            'type' => 'datetime',
            'required' => false,
            'nullable' => false,
        ],
        'completedReportParts' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ReportPart::class,
            ],
            'required' => false,
            'nullable' => false,
            'minItems' => 0,
            'maxItems' => 100,
        ],
        'creationDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'currencyOfView' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'failureCode' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'failureReason' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'format' => [
            'type' => 'enum',
            'class' => ReportFormat::class,
            'required' => true,
            'nullable' => false,
        ],
        'lastUpdatedDateTime' => [
            'type' => 'datetime',
            'required' => true,
            'nullable' => false,
        ],
        'periods' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => ReportPeriod::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'query' => [
            'type' => 'model',
            'class' => ReportingQuery::class,
            'required' => true,
            'nullable' => false,
        ],
        'reportId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'status' => [
            'type' => 'enum',
            'class' => ReportStatus::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the completedDateTime value.
     *
     * @return \DateTimeImmutable|null
     */
    public function getCompletedDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('completedDateTime');

        return $value;
    }

    /**
     * Sets the completedDateTime value.
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setCompletedDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('completedDateTime', $value);

        return $this;
    }

    /**
     * Returns the completedReportParts value.
     *
     * @return list<ReportPart>|null
     */
    public function getCompletedReportParts(): ?array
    {
        /** @var list<ReportPart>|null $value */
        $value = $this->getAttribute('completedReportParts');

        return $value;
    }

    /**
     * Sets the completedReportParts value.
     *
     * @param list<ReportPart>|null $value New property value.
     * @return $this
     */
    public function setCompletedReportParts(?array $value): self
    {
        $this->setAttribute('completedReportParts', $value);

        return $this;
    }

    /**
     * Returns the creationDateTime value.
     *
     * @return \DateTimeImmutable|null
     */
    public function getCreationDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('creationDateTime');

        return $value;
    }

    /**
     * Sets the creationDateTime value.
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setCreationDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('creationDateTime', $value);

        return $this;
    }

    /**
     * Returns the currencyOfView value.
     *
     * @return CurrencyCode|null
     */
    public function getCurrencyOfView(): ?CurrencyCode
    {
        /** @var CurrencyCode|null $value */
        $value = $this->getAttribute('currencyOfView');

        return $value;
    }

    /**
     * Sets the currencyOfView value.
     *
     * @param CurrencyCode|string|null $value New property value.
     * @return $this
     */
    public function setCurrencyOfView(CurrencyCode|string|null $value): self
    {
        $this->setAttribute('currencyOfView', $value);

        return $this;
    }

    /**
     * Returns the failureCode value.
     *
     * @return string|null
     */
    public function getFailureCode(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('failureCode');

        return $value;
    }

    /**
     * Sets the failureCode value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFailureCode(?string $value): self
    {
        $this->setAttribute('failureCode', $value);

        return $this;
    }

    /**
     * Returns the failureReason value.
     *
     * @return string|null
     */
    public function getFailureReason(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('failureReason');

        return $value;
    }

    /**
     * Sets the failureReason value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setFailureReason(?string $value): self
    {
        $this->setAttribute('failureReason', $value);

        return $this;
    }

    /**
     * Returns the format value.
     *
     * @return ReportFormat|null
     */
    public function getFormat(): ?ReportFormat
    {
        /** @var ReportFormat|null $value */
        $value = $this->getAttribute('format');

        return $value;
    }

    /**
     * Sets the format value.
     *
     * @param ReportFormat|string|null $value New property value.
     * @return $this
     */
    public function setFormat(ReportFormat|string|null $value): self
    {
        $this->setAttribute('format', $value);

        return $this;
    }

    /**
     * Returns the lastUpdatedDateTime value.
     *
     * @return \DateTimeImmutable|null
     */
    public function getLastUpdatedDateTime(): ?\DateTimeImmutable
    {
        /** @var \DateTimeImmutable|null $value */
        $value = $this->getAttribute('lastUpdatedDateTime');

        return $value;
    }

    /**
     * Sets the lastUpdatedDateTime value.
     *
     * @param \DateTimeInterface|string|null $value New property value.
     * @return $this
     */
    public function setLastUpdatedDateTime(\DateTimeInterface|string|null $value): self
    {
        $this->setAttribute('lastUpdatedDateTime', $value);

        return $this;
    }

    /**
     * Returns the periods value.
     *
     * @return list<ReportPeriod>|null
     */
    public function getPeriods(): ?array
    {
        /** @var list<ReportPeriod>|null $value */
        $value = $this->getAttribute('periods');

        return $value;
    }

    /**
     * Sets the periods value.
     *
     * @param list<ReportPeriod>|null $value New property value.
     * @return $this
     */
    public function setPeriods(?array $value): self
    {
        $this->setAttribute('periods', $value);

        return $this;
    }

    /**
     * Returns the query value.
     *
     * @return ReportingQuery|null
     */
    public function getQuery(): ?ReportingQuery
    {
        /** @var ReportingQuery|null $value */
        $value = $this->getAttribute('query');

        return $value;
    }

    /**
     * Sets the query value.
     *
     * @param ReportingQuery|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setQuery(ReportingQuery|array|null $value): self
    {
        $this->setAttribute('query', $value);

        return $this;
    }

    /**
     * Returns the reportId value.
     *
     * @return string|null
     */
    public function getReportId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('reportId');

        return $value;
    }

    /**
     * Sets the reportId value.
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setReportId(?string $value): self
    {
        $this->setAttribute('reportId', $value);

        return $this;
    }

    /**
     * Returns the status value.
     *
     * @return ReportStatus|null
     */
    public function getStatus(): ?ReportStatus
    {
        /** @var ReportStatus|null $value */
        $value = $this->getAttribute('status');

        return $value;
    }

    /**
     * Sets the status value.
     *
     * @param ReportStatus|string|null $value New property value.
     * @return $this
     */
    public function setStatus(ReportStatus|string|null $value): self
    {
        $this->setAttribute('status', $value);

        return $this;
    }
}
