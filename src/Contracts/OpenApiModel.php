<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Contracts;

use JsonSerializable;

/**
 * Defines the behavior shared by generated object and union models.
 */
interface OpenApiModel extends JsonSerializable
{
    /**
     * Creates a model from decoded JSON attributes.
     *
     * @param array<string, mixed> $data Decoded JSON object data.
     */
    public static function fromArray(array $data): static;

    /**
     * Converts the model into an API-ready associative array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array;

    /**
     * Validates required attributes and nested generated models.
     */
    public function validate(): void;
}
