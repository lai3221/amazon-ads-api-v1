<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * Specify which field to order by. Field Name Supported Ordering --- --- advertisingDealId ASCENDING,DESCENDING creationDateTime ASCENDING,DESCENDING dealType ASCENDING,DESCENDING endDateTime ASCENDING,DESCENDING exchangeDealId ASCENDING,DESCENDING name ASCEN.
 *
 * @generated from Amazon Ads API v1 schema AdvertisingDealSortOptionsFields.
 */
enum AdvertisingDealSortOptionsFields: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'AdvertisingDealSortOptionsFields';

    case ADVERTISING_DEAL_ID = 'advertisingDealId';
    case CREATION_DATE_TIME = 'creationDateTime';
    case DEAL_TYPE = 'dealType';
    case END_DATE_TIME = 'endDateTime';
    case EXCHANGE_DEAL_ID = 'exchangeDealId';
    case NAME = 'name';
    case PRICE = 'price';
    case START_DATE_TIME = 'startDateTime';

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
