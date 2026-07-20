<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Support;

use BackedEnum;
use DateTimeImmutable;
use DateTimeInterface;
use JsonSerializable;
use Lai3221\AmazonAdsApiV1\Contracts\OpenApiModel;
use Lai3221\AmazonAdsApiV1\Exception\ValidationException;
use Throwable;

/**
 * Normalizes request values and hydrates generated response models.
 */
final class Serializer
{
    /**
     * Converts SDK values into scalars and arrays accepted by JSON encoding.
     */
    public function normalize(mixed $value): mixed
    {
        if ($value instanceof OpenApiModel) {
            return $value->toArray();
        }

        if ($value instanceof BackedEnum) {
            return $value->value;
        }

        if ($value instanceof DateTimeInterface) {
            return $value->format(DateTimeInterface::ATOM);
        }

        if ($value instanceof JsonSerializable) {
            return $this->normalize($value->jsonSerialize());
        }

        if (is_array($value)) {
            $normalized = [];
            foreach ($value as $key => $item) {
                $normalized[$key] = $this->normalize($item);
            }

            return $normalized;
        }

        return $value;
    }

    /**
     * Hydrates a decoded response value into a generated model or enum class.
     */
    public function hydrate(mixed $value, ?string $className): mixed
    {
        if ($value === null || $className === null) {
            return $value;
        }

        if (enum_exists($className) && is_subclass_of($className, BackedEnum::class)) {
            if (!is_string($value) && !is_int($value)) {
                throw new ValidationException(sprintf('Cannot hydrate enum %s from a non-scalar value.', $className));
            }

            $enum = $className::tryFrom($value);
            if ($enum === null) {
                throw new ValidationException(sprintf('Unknown value "%s" for enum %s.', (string) $value, $className));
            }

            return $enum;
        }

        if (is_subclass_of($className, OpenApiModel::class)) {
            if ($value instanceof $className) {
                return $value;
            }

            if (!is_array($value)) {
                throw new ValidationException(sprintf('Cannot hydrate model %s from a non-object value.', $className));
            }

            return $className::fromArray($value);
        }

        return $value;
    }

    /**
     * Hydrates one generated model attribute from its generated type definition.
     *
     * @param array<string, mixed> $definition Generated OpenAPI type metadata.
     */
    public function hydrateDefinition(mixed $value, array $definition): mixed
    {
        if ($value === null) {
            return null;
        }

        $type = $definition['type'] ?? 'mixed';

        return match ($type) {
            'model', 'enum' => $this->hydrate($value, is_string($definition['class'] ?? null)
                ? $definition['class']
                : null),
            'array' => $this->hydrateArray($value, is_array($definition['items'] ?? null)
                ? $definition['items']
                : ['type' => 'mixed']),
            'datetime' => $this->hydrateDateTime($value),
            'string' => is_string($value) ? $value : (string) $value,
            'integer' => is_int($value) ? $value : (int) $value,
            'number' => is_float($value) || is_int($value) ? $value : (float) $value,
            'boolean' => is_bool($value) ? $value : (bool) $value,
            'object' => is_array($value) ? $value : throw new ValidationException('Expected an object value.'),
            default => $value,
        };
    }

    /**
     * Hydrates each entry in an OpenAPI array property.
     *
     * @param array<string, mixed> $itemDefinition Generated item type metadata.
     * @return array<mixed>
     */
    private function hydrateArray(mixed $value, array $itemDefinition): array
    {
        if (!is_array($value)) {
            throw new ValidationException('Expected an array value.');
        }

        return array_map(
            fn (mixed $item): mixed => $this->hydrateDefinition($item, $itemDefinition),
            $value,
        );
    }

    /**
     * Hydrates an ISO-8601 date or date-time string.
     */
    private function hydrateDateTime(mixed $value): DateTimeImmutable
    {
        if ($value instanceof DateTimeImmutable) {
            return $value;
        }

        if ($value instanceof DateTimeInterface) {
            return DateTimeImmutable::createFromInterface($value);
        }

        if (!is_string($value)) {
            throw new ValidationException('Expected an ISO-8601 date or date-time string.');
        }

        try {
            return new DateTimeImmutable($value);
        } catch (Throwable $exception) {
            throw new ValidationException('Invalid ISO-8601 date or date-time value.', previous: $exception);
        }
    }
}
