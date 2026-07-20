# Amazon Ads API v1 SDK for Laravel 11

[![CI](https://github.com/lai3221/amazon-ads-api-v1/actions/workflows/ci.yml/badge.svg)](https://github.com/lai3221/amazon-ads-api-v1/actions/workflows/ci.yml)
[![Latest Stable Version](https://poser.pugx.org/lai3221/amazon-ads-api-v1/v/stable)](https://packagist.org/packages/lai3221/amazon-ads-api-v1)
[![License](https://poser.pugx.org/lai3221/amazon-ads-api-v1/license)](LICENSE)

A complete, generated Laravel 11 SDK for the **Amazon Ads API v1 full specification**. The bundled specification combines generally available and beta v1 operations. It does not include legacy Amazon Ads API v0 endpoints.

The package currently contains:

- 73 generated API operations across 34 resource APIs;
- 1,270 generated schemas, including 216 string enums and 66 `oneOf` unions;
- Sponsored Products, Sponsored Brands, Sponsored Display, Sponsored Television, Amazon DSP, and cross-product v1 models;
- Login with Amazon authorization-code exchange and automatic refresh-token authentication;
- NA, EU, and FE endpoint routing;
- typed response hydration, request validation, retries, exceptions, Laravel configuration, facade, and service-container bindings;
- a deterministic PHP generator and CI coverage verification against the exact OpenAPI SHA-256 hash.

See the [complete generated API index](docs/API_REFERENCE.md). A Chinese guide is available in [README.zh-CN.md](README.zh-CN.md).

> **Beta notice:** The full specification includes beta operations. Amazon may make breaking changes during a beta, and closed-beta resources require allowlisting for your client ID. Generating a method does not grant access to that resource.

## Requirements

- PHP 8.2 or later
- Laravel 11
- An approved Amazon Ads API application and Login with Amazon credentials

## Installation

```bash
composer require lai3221/amazon-ads-api-v1
```

Laravel discovers the service provider and facade automatically. Publish the configuration when you need to customize it:

```bash
php artisan vendor:publish --tag=amazon-ads-config
```

Configure Login with Amazon and the default regional/account context:

```dotenv
AMAZON_ADS_CLIENT_ID=amzn1.application-oa2-client.xxxxx
AMAZON_ADS_CLIENT_SECRET=your-client-secret
AMAZON_ADS_REFRESH_TOKEN=Atzr|xxxxx
AMAZON_ADS_REGION=NA

# Optional defaults. Individual calls can override them with RequestContext.
AMAZON_ADS_PROFILE_ID=1234567890
AMAZON_ADS_ACCOUNT_ID=amzn1.ads-account.g.example
AMAZON_ADS_MANAGER_ACCOUNT_ID=
AMAZON_ADS_ACCEPT_LANGUAGE=en-US
```

Valid regions are `NA`, `EU`, and `FE`.

## Quick start

Every OpenAPI tag has an explicit client accessor, and every operation has an explicit method. Generated request models accept constructor arrays or fluent setters.

```php
<?php

use Lai3221\AmazonAdsApiV1\Generated\Model\AdProduct;
use Lai3221\AmazonAdsApiV1\Generated\Model\CampaignCreate;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateCampaignRequest;
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateState;
use Lai3221\AmazonAdsApiV1\Laravel\Facades\AmazonAds;
use Lai3221\AmazonAdsApiV1\RequestContext;

$campaign = new CampaignCreate([
    'adProduct' => AdProduct::SPONSORED_PRODUCTS,
    'name' => 'Summer launch',
    'state' => CreateState::PAUSED,
]);

$request = new CreateCampaignRequest([
    'campaigns' => [$campaign],
]);

$response = AmazonAds::campaigns()->createCampaign(
    request: $request,
    context: new RequestContext(profileId: '1234567890'),
);

$result = $response->body;
$requestId = $response->requestId;
```

Dependency injection is also supported:

```php
use Lai3221\AmazonAdsApiV1\AmazonAdsClient;

final class SyncCampaigns
{
    public function __construct(private AmazonAdsClient $amazonAds)
    {
    }

    public function __invoke(): void
    {
        $response = $this->amazonAds->campaigns()->queryCampaign([
            'maxResults' => 100,
        ]);

        // $response->body is a generated CampaignSuccessResponse model.
    }
}
```

Arrays remain supported at API boundaries for incremental adoption, but generated models provide enum hydration, date-time hydration, nested model hydration, required-field validation, and array size validation.

## Request headers and account context

The SDK always supplies `Authorization`, `Amazon-Ads-ClientId`, `Accept`, and `User-Agent`. The following official headers are resolved from `config/amazon-ads.php` or a per-call `RequestContext`:

| SDK value | Amazon header | Typical use |
|---|---|---|
| `profileId` | `Amazon-Advertising-API-Scope` | Sponsored Ads profile-scoped operations |
| `accountId` | `Amazon-Ads-AccountId` | Amazon DSP and cross-product operations |
| `managerAccountId` | `Amazon-Ads-Manager-AccountId` | Manager account operations |
| `acceptLanguage` | `Accept-Language` | Localized response content |

Generated methods enforce every header marked as required by that operation's OpenAPI definition. Missing required context produces a `ConfigurationException` before a request is transmitted.

## Login with Amazon onboarding

Build an authorization URL and exchange the returned code for the long-lived refresh token:

```php
use GuzzleHttp\Client;
use Lai3221\AmazonAdsApiV1\Auth\LoginWithAmazonOAuth;

$oauth = new LoginWithAmazonOAuth(
    http: new Client(),
    clientId: config('amazon-ads.client_id'),
    clientSecret: config('amazon-ads.client_secret'),
    redirectUri: route('amazon-ads.callback'),
);

$authorizationUrl = $oauth->authorizationUrl(
    scopes: ['advertising::campaign_management'],
    state: csrf_token(),
);

$tokens = $oauth->exchangeAuthorizationCode($request->string('code'));
$refreshToken = $tokens->refreshToken;
```

Store client secrets and refresh tokens outside source control. In Laravel, refreshed access tokens are cached through the configured cache store. Set `AMAZON_ADS_TOKEN_CACHE=false` to disable the shared token cache.

## Models, enums, and `oneOf` values

Object schemas expose English-documented getters and fluent setters:

```php
$request = (new CreateCampaignRequest())
    ->setCampaigns([$campaign]);

$request->validate();
$payload = $request->toArray();
```

String enum components are generated as PHP backed enums. `oneOf` components extend `AbstractUnion` and accept the selected JSON object shape:

```php
use Lai3221\AmazonAdsApiV1\Generated\Model\CreateCreative;

$creative = new CreateCreative([
    'productCreative' => [
        // Fields defined by the selected productCreative variant.
    ],
]);
```

Unknown response fields are preserved so minor server-side additions do not discard data.

## Errors and retries

Non-2xx responses throw `ApiException`. Its `responseBody` is hydrated into the generated error model declared for that status code.

```php
use Lai3221\AmazonAdsApiV1\Exception\ApiException;

try {
    $response = AmazonAds::campaigns()->queryCampaign([]);
} catch (ApiException $exception) {
    report([
        'status' => $exception->statusCode,
        'request_id' => $exception->requestId,
        'rate_limited' => $exception->isRateLimited(),
        'error' => $exception->responseBody,
    ]);
}
```

HTTP 408, 429, 500, 502, 503, and 504 responses, plus transient transport failures, are retried with `Retry-After` support or exponential backoff and jitter. Retry behavior is configurable with the `AMAZON_ADS_MAX_RETRIES` and `AMAZON_ADS_RETRY_BASE_DELAY_MS` environment variables.

## Using the SDK outside Laravel

The generated client is framework-friendly but not framework-locked:

```php
use GuzzleHttp\Client;
use Lai3221\AmazonAdsApiV1\AmazonAdsClient;
use Lai3221\AmazonAdsApiV1\Auth\LoginWithAmazonTokenProvider;
use Lai3221\AmazonAdsApiV1\Credentials;
use Lai3221\AmazonAdsApiV1\Http\HttpTransport;
use Lai3221\AmazonAdsApiV1\Region;
use Lai3221\AmazonAdsApiV1\SdkConfiguration;

$http = new Client();
$credentials = new Credentials($clientId, $clientSecret, $refreshToken);
$tokens = new LoginWithAmazonTokenProvider($http, $credentials);
$transport = new HttpTransport(
    http: $http,
    tokens: $tokens,
    credentials: $credentials,
    configuration: new SdkConfiguration(region: Region::EUROPE),
);

$amazonAds = new AmazonAdsClient($transport);
```

## Updating the generated SDK

The authoritative source is committed at `.openapi/amazon-ads-v1-all.json`. To update it:

```bash
curl --fail --location \
  'https://d1y2lf8k3vrkfu.cloudfront.net/openapi/en-us/dest/AmazonAdsAPIALLMerged_prod_3p_ALL.json' \
  --output .openapi/amazon-ads-v1-all.json

composer generate
composer check
```

`composer spec:check` compares every schema, resource tag, operation ID, HTTP method, and path against `generated-manifest.json`. CI also verifies that generated files are deterministic and current.

## Official sources

- [Amazon Ads API v1 overview](https://advertising.amazon.com/API/docs/en-us/reference/amazon-ads/overview)
- [Amazon Ads API v1 getting started](https://advertising.amazon.com/API/docs/en-us/reference/amazon-ads/getting-started)
- [Amazon Ads API v1 specification](https://advertising.amazon.com/API/docs/en-us/amazon-ads/1-0/apis)
- [Amazon Ads API v1 betas and full specification](https://advertising.amazon.com/API/docs/en-us/developer/betas#explore-the-betas)
- [Amazon Ads API v1 full OpenAPI document](https://d1y2lf8k3vrkfu.cloudfront.net/openapi/en-us/dest/AmazonAdsAPIALLMerged_prod_3p_ALL.json)

## Contributing and security

Read [CONTRIBUTING.md](CONTRIBUTING.md) before submitting a pull request. Report security issues using GitHub's private vulnerability reporting flow as described in [SECURITY.md](SECURITY.md).

This is an independent open-source SDK and is not an official Amazon package. Amazon, Amazon Ads, and related marks are trademarks of Amazon.com, Inc. or its affiliates.

## License

Released under the [MIT License](LICENSE).
