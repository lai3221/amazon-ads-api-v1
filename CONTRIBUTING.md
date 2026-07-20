# Contributing

Thank you for improving the Amazon Ads API v1 Laravel SDK.

## Development setup

```bash
composer install
composer generate
composer check
```

Use PHP 8.2 or later. Do not edit files under `src/Generated` or `docs/API_REFERENCE.md` manually; change `tools/generate-sdk.php` or update the OpenAPI source and regenerate them.

## Updating the OpenAPI document

1. Download the official `AmazonAdsAPIALLMerged_prod_3p_ALL.json` document into `.openapi/amazon-ads-v1-all.json`.
2. Run `composer generate`.
3. Review `generated-manifest.json`, the generated API reference, and the full diff.
4. Run `composer check`.
5. Describe whether the upstream change is generally available, open beta, or closed beta when known.

Never copy credentials, access tokens, refresh tokens, advertiser data, or production response bodies into tests, issues, or commits.

## Pull requests

- Keep changes focused and include tests for runtime behavior.
- Preserve PSR-12 and English PHPDoc on every class and method.
- Update `CHANGELOG.md` for user-visible changes.
- Use Conventional Commit-style titles where practical, such as `feat:`, `fix:`, `docs:`, or `chore:`.
- Confirm that generated output is deterministic and fully covered by `composer spec:check`.

## Reporting upstream specification issues

When an issue originates in the Amazon specification, include the exact operation ID or schema name and a minimal description. Do not include private account information. Amazon-specific access and beta enrollment issues should be submitted through official Amazon Ads API support channels.
