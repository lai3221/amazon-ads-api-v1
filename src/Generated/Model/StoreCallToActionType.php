<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreCallToActionType Description ------ ------ BUTTON Button type call to action LINK Link type call to action.
 *
 * @generated from Amazon Ads API v1 schema StoreCallToActionType.
 */
enum StoreCallToActionType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreCallToActionType';

    case BUTTON = 'BUTTON';
    case LINK = 'LINK';

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
