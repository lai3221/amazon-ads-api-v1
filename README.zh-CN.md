# Amazon Ads API v1 Laravel 11 SDK

这是一个基于 Amazon 官方 **Amazon Ads API v1 full specification** 自动生成的 Laravel 11 SDK，Composer 包名为 `lai3221/amazon-ads-api-v1`。

当前规范覆盖正式发布和 beta 的 v1 API，不包含旧版 v0 API。完整生成结果包括：

- 34 个资源 API；
- 73 个显式 API 方法；
- 1,270 个模型，其中包含 216 个字符串枚举和 66 个 `oneOf` 联合模型；
- Sponsored Products、Sponsored Brands、Sponsored Display、Sponsored Television、Amazon DSP 及跨产品 v1 模型；
- LWA 授权码交换、refresh token 自动刷新和 Laravel 缓存；
- NA、EU、FE 三个区域；
- 请求模型校验、响应模型反序列化、重试、异常、Facade 和依赖注入；
- 可重复执行的 PHP 代码生成器和完整性校验。

完整端点清单见 [docs/API_REFERENCE.md](docs/API_REFERENCE.md)。

> 完整规范包含 beta API。Closed beta 仍需要 Amazon 为 Client ID 开通权限；SDK 中存在方法并不代表账号自动取得访问权。

## 安装

```bash
composer require lai3221/amazon-ads-api-v1
php artisan vendor:publish --tag=amazon-ads-config
```

配置 `.env`：

```dotenv
AMAZON_ADS_CLIENT_ID=amzn1.application-oa2-client.xxxxx
AMAZON_ADS_CLIENT_SECRET=your-client-secret
AMAZON_ADS_REFRESH_TOKEN=Atzr|xxxxx
AMAZON_ADS_REGION=NA

# 以下均可在单次请求中覆盖
AMAZON_ADS_PROFILE_ID=1234567890
AMAZON_ADS_ACCOUNT_ID=amzn1.ads-account.g.example
AMAZON_ADS_MANAGER_ACCOUNT_ID=
AMAZON_ADS_ACCEPT_LANGUAGE=zh-CN
```

## 使用示例

```php
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

$response = AmazonAds::campaigns()->createCampaign(
    request: new CreateCampaignRequest(['campaigns' => [$campaign]]),
    context: new RequestContext(profileId: '1234567890'),
);

$body = $response->body;
$requestId = $response->requestId;
```

所有对象模型都提供英文 PHPDoc、getter、fluent setter、`validate()`、`toArray()` 和 `fromArray()`。也可以直接向 API 方法传递数组。

## Header 对应关系

| `RequestContext` 字段 | Amazon Header | 用途 |
|---|---|---|
| `profileId` | `Amazon-Advertising-API-Scope` | Sponsored Ads profile |
| `accountId` | `Amazon-Ads-AccountId` | DSP 和跨产品 API |
| `managerAccountId` | `Amazon-Ads-Manager-AccountId` | Manager Account API |
| `acceptLanguage` | `Accept-Language` | 本地化响应 |

生成的方法会根据 OpenAPI 规范检查必填 Header。缺少必填值时，请求发送前会抛出 `ConfigurationException`。

## 更新官方规范

```bash
curl --fail --location \
  'https://d1y2lf8k3vrkfu.cloudfront.net/openapi/en-us/dest/AmazonAdsAPIALLMerged_prod_3p_ALL.json' \
  --output .openapi/amazon-ads-v1-all.json

composer generate
composer check
```

`composer spec:check` 会逐一比对 schema、资源标签、operationId、HTTP method 和 path，防止漏生成代码。

## 说明

本项目是独立开源 SDK，不是 Amazon 官方软件包。Amazon、Amazon Ads 及相关商标归 Amazon.com, Inc. 或其关联公司所有。

详细的认证、错误处理、非 Laravel 用法和开发说明请阅读英文 [README.md](README.md)。项目使用 [MIT License](LICENSE)。
