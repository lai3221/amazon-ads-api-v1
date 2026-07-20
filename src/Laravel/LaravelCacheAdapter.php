<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Laravel;

use DateInterval;
use Illuminate\Contracts\Cache\Repository;
use Psr\SimpleCache\CacheInterface;

/**
 * Adapts Laravel's cache repository to the PSR-16 token cache contract.
 */
final readonly class LaravelCacheAdapter implements CacheInterface
{
    /**
     * Creates a namespaced cache adapter.
     */
    public function __construct(
        private Repository $cache,
        private string $prefix = 'amazon_ads_api_v1_',
    ) {
    }

    /**
     * Fetches a cached value.
     */
    public function get(string $key, mixed $default = null): mixed
    {
        return $this->cache->get($this->key($key), $default);
    }

    /**
     * Stores a cached value.
     */
    public function set(string $key, mixed $value, null|int|DateInterval $ttl = null): bool
    {
        return $this->cache->put($this->key($key), $value, $ttl);
    }

    /**
     * Deletes a cached value.
     */
    public function delete(string $key): bool
    {
        return $this->cache->forget($this->key($key));
    }

    /**
     * Clears cache entries tracked by this SDK adapter.
     */
    public function clear(): bool
    {
        $keys = $this->cache->get($this->prefix . 'tracked_keys', []);
        if (is_array($keys)) {
            foreach ($keys as $key) {
                if (is_string($key)) {
                    $this->cache->forget($key);
                }
            }
        }

        return $this->cache->forget($this->prefix . 'tracked_keys');
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
        $success = true;
        foreach ($values as $key => $value) {
            $success = $this->set((string) $key, $value, $ttl) && $success;
        }

        return $success;
    }

    /**
     * Deletes several cached values.
     *
     * @param iterable<string> $keys Cache keys.
     */
    public function deleteMultiple(iterable $keys): bool
    {
        $success = true;
        foreach ($keys as $key) {
            $success = $this->delete($key) && $success;
        }

        return $success;
    }

    /**
     * Determines whether a cached value exists.
     */
    public function has(string $key): bool
    {
        return $this->cache->has($this->key($key));
    }

    /**
     * Converts a PSR cache key into an SDK-specific Laravel cache key.
     */
    private function key(string $key): string
    {
        $resolved = $this->prefix . $key;
        $tracked = $this->cache->get($this->prefix . 'tracked_keys', []);

        if (!is_array($tracked)) {
            $tracked = [];
        }

        if (!in_array($resolved, $tracked, true)) {
            $tracked[] = $resolved;
            $this->cache->forever($this->prefix . 'tracked_keys', $tracked);
        }

        return $resolved;
    }
}
