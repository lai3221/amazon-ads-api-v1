# Changelog

All notable changes to this project will be documented in this file. The format follows [Keep a Changelog](https://keepachangelog.com/en/1.1.0/), and the project follows [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [Unreleased]

### Added

- Configurable HTTP `User-Agent` through Laravel's `amazon-ads.user_agent` setting and `AMAZON_ADS_USER_AGENT` environment variable.
- Initial Laravel 11 package structure.
- Login with Amazon authorization-code and refresh-token authentication.
- Regional NA, EU, and FE HTTP transport with retries and typed errors.
- Complete generation from the Amazon Ads API v1 full specification.
- 73 operations, 34 resource APIs, and 1,270 component schemas.
- Deterministic generation, coverage verification, tests, static analysis, and GitHub workflows.
