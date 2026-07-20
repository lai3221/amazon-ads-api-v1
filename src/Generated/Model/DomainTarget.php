<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Target based on a specified domain.
 *
 * @generated from Amazon Ads API v1 schema DomainTarget.
 */
final class DomainTarget extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'DomainTarget';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'domainTargetDetails' => [
            'type' => 'model',
            'class' => DomainTargetDetails::class,
            'required' => true,
            'nullable' => false,
        ],
        'domainTargetType' => [
            'type' => 'enum',
            'class' => DomainTargetTypes::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the domainTargetDetails value.
     *
     * @return DomainTargetDetails|null
     */
    public function getDomainTargetDetails(): ?DomainTargetDetails
    {
        /** @var DomainTargetDetails|null $value */
        $value = $this->getAttribute('domainTargetDetails');

        return $value;
    }

    /**
     * Sets the domainTargetDetails value.
     *
     * @param DomainTargetDetails|array<string, mixed>|null $value New property value.
     * @return $this
     */
    public function setDomainTargetDetails(DomainTargetDetails|array|null $value): self
    {
        $this->setAttribute('domainTargetDetails', $value);

        return $this;
    }

    /**
     * Returns the domainTargetType value.
     *
     * @return DomainTargetTypes|null
     */
    public function getDomainTargetType(): ?DomainTargetTypes
    {
        /** @var DomainTargetTypes|null $value */
        $value = $this->getAttribute('domainTargetType');

        return $value;
    }

    /**
     * Sets the domainTargetType value.
     *
     * @param DomainTargetTypes|string|null $value New property value.
     * @return $this
     */
    public function setDomainTargetType(DomainTargetTypes|string|null $value): self
    {
        $this->setAttribute('domainTargetType', $value);

        return $this;
    }
}
