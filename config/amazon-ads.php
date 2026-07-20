<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Login with Amazon credentials
    |--------------------------------------------------------------------------
    |
    | A refresh token is used by default. For short-lived jobs or tests, an
    | access token may be supplied directly and takes precedence.
    |
    */
    'client_id' => env('AMAZON_ADS_CLIENT_ID'),
    'client_secret' => env('AMAZON_ADS_CLIENT_SECRET'),
    'refresh_token' => env('AMAZON_ADS_REFRESH_TOKEN'),
    'access_token' => env('AMAZON_ADS_ACCESS_TOKEN'),

    /*
    |--------------------------------------------------------------------------
    | Regional endpoint and default account context
    |--------------------------------------------------------------------------
    |
    | Supported regions are NA, EU, and FE. Operation-specific values can be
    | overridden with a RequestContext instance on each generated API call.
    |
    */
    'region' => env('AMAZON_ADS_REGION', 'NA'),
    'profile_id' => env('AMAZON_ADS_PROFILE_ID'),
    'account_id' => env('AMAZON_ADS_ACCOUNT_ID'),
    'manager_account_id' => env('AMAZON_ADS_MANAGER_ACCOUNT_ID'),
    'accept_language' => env('AMAZON_ADS_ACCEPT_LANGUAGE'),

    /*
    |--------------------------------------------------------------------------
    | Transport behavior
    |--------------------------------------------------------------------------
    */
    'timeout' => (float) env('AMAZON_ADS_TIMEOUT', 30),
    'connect_timeout' => (float) env('AMAZON_ADS_CONNECT_TIMEOUT', 10),
    'max_retries' => (int) env('AMAZON_ADS_MAX_RETRIES', 3),
    'retry_base_delay_ms' => (int) env('AMAZON_ADS_RETRY_BASE_DELAY_MS', 250),
    'token_cache' => env('AMAZON_ADS_TOKEN_CACHE', true),
];
