<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * Represents the LinearTvDaypart schema from Amazon Ads API v1.
 *
 * @generated from Amazon Ads API v1 schema LinearTvDaypart.
 */
final class LinearTvDaypart extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'LinearTvDaypart';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'daypartType' => [
            'type' => 'enum',
            'class' => LinearTvDaypartType::class,
            'required' => true,
            'nullable' => false,
        ],
        'description' => [
            'type' => 'string',
            'required' => false,
            'nullable' => false,
        ],
        'linearTvDaypartId' => [
            'type' => 'string',
            'required' => true,
            'nullable' => false,
        ],
        'marketplaceDefinitions' => [
            'type' => 'array',
            'items' => [
                'type' => 'model',
                'class' => LinearTvDaypartMarketplaceDefinition::class,
            ],
            'required' => true,
            'nullable' => false,
            'minItems' => 1,
            'maxItems' => 30,
        ],
        'name' => [
            'type' => 'enum',
            'class' => LinearTvDaypartName::class,
            'required' => true,
            'nullable' => false,
        ],
    ];

    /**
     * Returns the daypartType value.
     *
     * @return LinearTvDaypartType|null
     */
    public function getDaypartType(): ?LinearTvDaypartType
    {
        /** @var LinearTvDaypartType|null $value */
        $value = $this->getAttribute('daypartType');

        return $value;
    }

    /**
     * Sets the daypartType value.
     *
     * @param LinearTvDaypartType|string|null $value New property value.
     * @return $this
     */
    public function setDaypartType(LinearTvDaypartType|string|null $value): self
    {
        $this->setAttribute('daypartType', $value);

        return $this;
    }

    /**
     * Returns Description of the daypart..
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('description');

        return $value;
    }

    /**
     * Sets Description of the daypart..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setDescription(?string $value): self
    {
        $this->setAttribute('description', $value);

        return $this;
    }

    /**
     * Returns A unique identifier for a daypart..
     *
     * @return string|null
     */
    public function getLinearTvDaypartId(): ?string
    {
        /** @var string|null $value */
        $value = $this->getAttribute('linearTvDaypartId');

        return $value;
    }

    /**
     * Sets A unique identifier for a daypart..
     *
     * @param string|null $value New property value.
     * @return $this
     */
    public function setLinearTvDaypartId(?string $value): self
    {
        $this->setAttribute('linearTvDaypartId', $value);

        return $this;
    }

    /**
     * Returns Definition of the daypart by marketplace..
     *
     * @return list<LinearTvDaypartMarketplaceDefinition>|null
     */
    public function getMarketplaceDefinitions(): ?array
    {
        /** @var list<LinearTvDaypartMarketplaceDefinition>|null $value */
        $value = $this->getAttribute('marketplaceDefinitions');

        return $value;
    }

    /**
     * Sets Definition of the daypart by marketplace..
     *
     * @param list<LinearTvDaypartMarketplaceDefinition>|null $value New property value.
     * @return $this
     */
    public function setMarketplaceDefinitions(?array $value): self
    {
        $this->setAttribute('marketplaceDefinitions', $value);

        return $this;
    }

    /**
     * Returns the name value.
     *
     * @return LinearTvDaypartName|null
     */
    public function getName(): ?LinearTvDaypartName
    {
        /** @var LinearTvDaypartName|null $value */
        $value = $this->getAttribute('name');

        return $value;
    }

    /**
     * Sets the name value.
     *
     * @param LinearTvDaypartName|string|null $value New property value.
     * @return $this
     */
    public function setName(LinearTvDaypartName|string|null $value): self
    {
        $this->setAttribute('name', $value);

        return $this;
    }
}
