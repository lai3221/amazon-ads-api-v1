<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Api;

use Lai3221\AmazonAdsApiV1\Contracts\Transport;

/**
 * Provides the shared transport dependency for every generated resource API.
 */
abstract class AbstractApi
{
    /**
     * Creates a resource API backed by the configured HTTP transport.
     */
    public function __construct(protected readonly Transport $transport)
    {
    }
}
