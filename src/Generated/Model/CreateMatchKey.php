<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

use Lai3221\AmazonAdsApiV1\Model\AbstractModel;

/**
 * The identifier used to match people for attribution. PII-based match key data needs to be normalized and hashed (SHA-256). REAL ID, MERKLE ID, KANTAR ID, and FIP accept raw identifier values. Email addresses provided must follow the formatting guidelines: L.
 *
 * @generated from Amazon Ads API v1 schema CreateMatchKey.
 */
final class CreateMatchKey extends AbstractModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'CreateMatchKey';

    /**
     * Generated definitions used for hydration and validation.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [
        'type' => [
            'type' => 'enum',
            'class' => MatchKeyType::class,
            'required' => true,
            'nullable' => false,
        ],
        'values' => [
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
     * Returns the type value.
     *
     * @return MatchKeyType|null
     */
    public function getType(): ?MatchKeyType
    {
        /** @var MatchKeyType|null $value */
        $value = $this->getAttribute('type');

        return $value;
    }

    /**
     * Sets the type value.
     *
     * @param MatchKeyType|string|null $value New property value.
     * @return $this
     */
    public function setType(MatchKeyType|string|null $value): self
    {
        $this->setAttribute('type', $value);

        return $this;
    }

    /**
     * Returns Identifier value of the customer who performed the event. SHA-256 hashed for PII-based keys; raw value for REAL ID, MERKLE ID, KANTAR ID, and FIP..
     *
     * @return list<string>|null
     */
    public function getValues(): ?array
    {
        /** @var list<string>|null $value */
        $value = $this->getAttribute('values');

        return $value;
    }

    /**
     * Sets Identifier value of the customer who performed the event. SHA-256 hashed for PII-based keys; raw value for REAL ID, MERKLE ID, KANTAR ID, and FIP..
     *
     * @param list<string>|null $value New property value.
     * @return $this
     */
    public function setValues(?array $value): self
    {
        $this->setAttribute('values', $value);

        return $this;
    }
}
