<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * RuleExpressionType Enum:.
 *
 * @generated from Amazon Ads API v1 schema RuleExpressionType.
 */
enum RuleExpressionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'RuleExpressionType';

    case DIMENSION_RULE_EXPRESSION = 'DIMENSION_RULE_EXPRESSION';

    /**
     * Returns every serialized OpenAPI enum value.
     *
     * @return list<string>
     */
    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
