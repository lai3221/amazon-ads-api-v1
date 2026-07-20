<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ReportCreate schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ReportCreate.
 */
final class ReportCreate extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportCreate';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'currencyOfView' => [
            'type' => 'enum',
            'class' => CurrencyCode::class,
            'required' => false,
            'nullable' => false,
        ],
        'format' => [
            'type' => 'enum',
            'class' => ReportFormat::class,
            'required' => true,
            'nullable' => false,
        ],
        'periods' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => CreateReportPeriod::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 1,
        ],
        'query' => [
            'type' => 'model',
            'class' => CreateReportingQuery::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

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
     * Returns the periods value.
     *
     * @return list<CreateReportPeriod>|null
     */
    public function getPeriods(): ?array
    {
        /** @var list<CreateReportPeriod>|null $value */
        $value = $this->getAttribute('periods');

        return $value;
    }

    /**
     * Sets the periods value.
     *
     * @param list<CreateReportPeriod>|null $value New property value.
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
     * @return CreateReportingQuery|null
     */
    public function getQuery(): ?CreateReportingQuery
    {
        /** @var CreateReportingQuery|null $value */
        $value = $this->getAttribute('query');

        return $value;
    }

    /**
     * Sets the query value.
     *
     * @param CreateReportingQuery|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setQuery(CreateReportingQuery|array|null $value): self
    {
        $this->setAttribute('query', $value);

        return $this;
    }
}
