<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Model;

use ArrayAccess;
use Lai3221\AmazonAdsApiV1\Contracts\OpenApiModel;
use Lai3221\AmazonAdsApiV1\Exception\ValidationException;
use Lai3221\AmazonAdsApiV1\Support\Serializer;

/**
 * Provides hydration, validation, and serialization for generated object models.
 *
 * @implements ArrayAccess<string, mixed>
 */
abstract class AbstractModel implements ArrayAccess, OpenApiModel
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = '';

    /**
     * Generated definitions keyed by JSON property name.
     *
     * @var array<string, array<string, mixed>>
     */
    protected const ATTRIBUTE_DEFINITIONS = [];

    /**
     * Hydrated values keyed by JSON property name.
     *
     * @var array<string, mixed>
     */
    private array $attributes = [];

    /**
     * Creates a model from API attributes while preserving unknown future fields.
     *
     * @param array<string, mixed> $attributes Decoded JSON object data.
     */
    final public function __construct(array $attributes = [])
    {
        foreach ($attributes as $name => $value) {
            $this->setAttribute($name, $value);
        }
    }

    /**
     * Creates a model from decoded JSON attributes.
     *
     * @param array<string, mixed> $data Decoded JSON object data.
     */
    public static function fromArray(array $data): static
    {
        return new static($data);
    }

    /**
     * Returns the exact component schema name from the OpenAPI document.
     */
    public static function openApiName(): string
    {
        return static::OPENAPI_NAME;
    }

    /**
     * Returns the generated attribute definitions for this model.
     *
     * @return array<string, array<string, mixed>>
     */
    public static function attributeDefinitions(): array
    {
        return static::ATTRIBUTE_DEFINITIONS;
    }

    /**
     * Determines whether an attribute was supplied to the model.
     */
    public function hasAttribute(string $name): bool
    {
        return array_key_exists($name, $this->attributes);
    }

    /**
     * Returns a hydrated attribute value or null when it is absent.
     */
    public function getAttribute(string $name): mixed
    {
        return $this->attributes[$name] ?? null;
    }

    /**
     * Hydrates and stores an attribute value.
     */
    public function setAttribute(string $name, mixed $value): static
    {
        $definition = static::ATTRIBUTE_DEFINITIONS[$name] ?? null;
        $this->attributes[$name] = $definition === null
            ? $value
            : (new Serializer())->hydrateDefinition($value, $definition);

        return $this;
    }

    /**
     * Removes an attribute so it will not be included in the request payload.
     */
    public function unsetAttribute(string $name): static
    {
        unset($this->attributes[$name]);

        return $this;
    }

    /**
     * Returns fields that are not present in the bundled OpenAPI schema.
     *
     * @return array<string, mixed>
     */
    public function unknownAttributes(): array
    {
        return array_diff_key($this->attributes, static::ATTRIBUTE_DEFINITIONS);
    }

    /**
     * Validates required, nullability, nested model, and array constraints.
     */
    public function validate(): void
    {
        foreach (static::ATTRIBUTE_DEFINITIONS as $name => $definition) {
            $required = ($definition['required'] ?? false) === true;
            $nullable = ($definition['nullable'] ?? false) === true;

            if ($required && !$this->hasAttribute($name)) {
                throw new ValidationException(sprintf('%s.%s is required.', static::OPENAPI_NAME, $name));
            }

            if (!$this->hasAttribute($name)) {
                continue;
            }

            $value = $this->attributes[$name];
            if ($value === null && !$nullable) {
                throw new ValidationException(sprintf('%s.%s must not be null.', static::OPENAPI_NAME, $name));
            }

            $this->validateValue($name, $value, $definition);
        }
    }

    /**
     * Converts the model into an API-ready associative array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        /** @var array<string, mixed> $normalized */
        $normalized = (new Serializer())->normalize($this->attributes);

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

    /**
     * Determines whether an array-style attribute exists.
     */
    public function offsetExists(mixed $offset): bool
    {
        return is_string($offset) && $this->hasAttribute($offset);
    }

    /**
     * Returns an array-style attribute value.
     */
    public function offsetGet(mixed $offset): mixed
    {
        return is_string($offset) ? $this->getAttribute($offset) : null;
    }

    /**
     * Stores an array-style attribute value.
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!is_string($offset)) {
            throw new ValidationException('Generated model attributes require string keys.');
        }

        $this->setAttribute($offset, $value);
    }

    /**
     * Removes an array-style attribute value.
     */
    public function offsetUnset(mixed $offset): void
    {
        if (is_string($offset)) {
            $this->unsetAttribute($offset);
        }
    }

    /**
     * Validates nested values and OpenAPI array size constraints.
     *
     * @param array<string, mixed> $definition Generated OpenAPI type metadata.
     */
    private function validateValue(string $name, mixed $value, array $definition): void
    {
        if ($value === null) {
            return;
        }

        if ($value instanceof OpenApiModel) {
            $value->validate();
        }

        if (($definition['type'] ?? null) !== 'array' || !is_array($value)) {
            return;
        }

        $count = count($value);
        if (isset($definition['minItems']) && $count < (int) $definition['minItems']) {
            throw new ValidationException(sprintf(
                '%s.%s must contain at least %d items.',
                static::OPENAPI_NAME,
                $name,
                (int) $definition['minItems'],
            ));
        }

        if (isset($definition['maxItems']) && $count > (int) $definition['maxItems']) {
            throw new ValidationException(sprintf(
                '%s.%s must contain no more than %d items.',
                static::OPENAPI_NAME,
                $name,
                (int) $definition['maxItems'],
            ));
        }

        foreach ($value as $item) {
            if ($item instanceof OpenApiModel) {
                $item->validate();
            }
        }
    }
}
