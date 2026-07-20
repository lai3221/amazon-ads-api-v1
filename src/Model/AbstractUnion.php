<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Model;

use Lai3221\AmazonAdsApiV1\Contracts\OpenApiModel;
use Lai3221\AmazonAdsApiV1\Exception\ValidationException;
use Lai3221\AmazonAdsApiV1\Support\Serializer;

/**
 * Represents an OpenAPI oneOf schema while preserving its selected JSON shape.
 */
abstract class AbstractUnion implements OpenApiModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = '';

    /**
     * Generated oneOf variant definitions.
     *
     * @var list<array<string, mixed>>
     */
    protected const VARIANT_DEFINITIONS = [];

    /**
     * Creates a union value from a decoded JSON object or generated model.
     *
     * @param array<string, mixed>|OpenApiModel $value Selected oneOf value.
     */
    final public function __construct(private array|OpenApiModel $value)
    {
    }

    /**
     * Creates a union model from decoded JSON data.
     *
     * @param array<string, mixed> $data Decoded JSON object data.
     */
    public static function fromArray(array $data): static
    {
        return new static($data);
    }

    /**
     * Returns the selected raw or generated model value.
     *
     * @return array<string, mixed>|OpenApiModel
     */
    public function value(): array|OpenApiModel
    {
        return $this->value;
    }

    /**
     * Validates that the value matches at least one generated oneOf variant.
     */
    public function validate(): void
    {
        if ($this->value instanceof OpenApiModel) {
            $this->value->validate();

            return;
        }

        if (static::VARIANT_DEFINITIONS === []) {
            return;
        }

        foreach (static::VARIANT_DEFINITIONS as $variant) {
            $required = is_array($variant['required'] ?? null) ? $variant['required'] : [];
            if (array_diff($required, array_keys($this->value)) === []) {
                return;
            }
        }

        throw new ValidationException(sprintf(
            '%s does not match any oneOf variant.',
            static::OPENAPI_NAME,
        ));
    }

    /**
     * Converts the selected value into an API-ready associative array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        /** @var array<string, mixed> $normalized */
        $normalized = (new Serializer())->normalize($this->value);

        return $normalized;
    }

    /**
     * Returns data suitable for JSON encoding.
     *
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
