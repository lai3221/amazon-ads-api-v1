<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the ReportMultiStatusSuccess schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema ReportMultiStatusSuccess.
 */
final class ReportMultiStatusSuccess extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'ReportMultiStatusSuccess';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'index' => [
            'type' => 'integer',
            'required' => true,
            'nullable' => false,
            'minimum' => 0,
            'maximum' => 0,
        ],
        'report' => [
            'type' => 'model',
            'class' => Report::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the index value.
     *
     * @return int|null
     */
    public function getIndex(): ?int
    {
        /** @var int|null $value */
        $value = $this->getAttribute('index');

        return $value;
    }

    /**
     * Sets the index value.
     *
     * @param int|null $value New property value.
     * @return $this
     */
    public function setIndex(?int $value): self
    {
        $this->setAttribute('index', $value);

        return $this;
    }

    /**
     * Returns the report value.
     *
     * @return Report|null
     */
    public function getReport(): ?Report
    {
        /** @var Report|null $value */
        $value = $this->getAttribute('report');

        return $value;
    }

    /**
     * Sets the report value.
     *
     * @param Report|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setReport(Report|array|null $value): self
    {
        $this->setAttribute('report', $value);

        return $this;
    }
}
