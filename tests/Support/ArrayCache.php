<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Tests\Support;

use DateInterval;
use Psr\SimpleCache\CacheInterface;

/**
 * Implements a small in-memory PSR-16 cache for authentication tests.
 */
final class ArrayCache implements CacheInterface
{
    /**
     * Stored cache values keyed by PSR cache key.
     *
     * @var array<string, mixed>
     */
    private array $values = [];

    /**
     * Fetches a cached value.
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->values[$key] ?? $default;
    }

    /**
     * Stores a cached value for the test lifetime.
     */
    public function set(string $key, mixed $value, null|int|DateInterval $ttl = null): bool
    {
        $this->values[$key] = $value;

        return true;
    }

    /**
     * Deletes a cached value.
     */
    public function delete(string $key): bool
    {
        unset($this->values[$key]);

        return true;
    }

    /**
     * Deletes all cached values.
     */
    public function clear(): bool
    {
        $this->values = [];

        return true;
    }

    /**
     * Fetches several cached values.
     *
     * @param iterable<string> $keys Cache keys.
     * @return iterable<string, mixed>
     */
    public function getMultiple(iterable $keys, mixed $default = null): iterable
    {
        $values = [];
        foreach ($keys as $key) {
            $values[$key] = $this->get($key, $default);
        }

        return $values;
    }

    /**
     * Stores several cached values.
     *
     * @param iterable<string, mixed> $values Values keyed by cache key.
     */
    public function setMultiple(iterable $values, null|int|DateInterval $ttl = null): bool
    {
        foreach ($values as $key => $value) {
            $this->set((string) $key, $value, $ttl);
        }

        return true;
    }

    /**
     * Deletes several cached values.
     *
     * @param iterable<string> $keys Cache keys.
     */
    public function deleteMultiple(iterable $keys): bool
    {
        foreach ($keys as $key) {
            $this->delete($key);
        }

        return true;
    }

    /**
     * Determines whether a cached value exists.
     */
    public function has(string $key): bool
    {
        return array_key_exists($key, $this->values);
    }
}
