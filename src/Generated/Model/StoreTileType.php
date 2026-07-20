<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Model;

/**
 * StoreTileType Description ------ ------ CUSTOM CODE Tile type for StoreCustomCodeTile EMPTY Tile type for StoreEmptyTile EXTERNAL WIDGET Tile type for StoreAWLSTile IMAGE Tile type for StoreImageTile, StoreImageWithTextTile, StoreMetadataItem type INTERACTI.
 *
 * @generated from Amazon Ads API v1 schema StoreTileType.
 */
enum StoreTileType: string
{
    /**
     * The exact component schema name from the Amazon OpenAPI document.
     */
    public const OPENAPI_NAME = 'StoreTileType';

    case CUSTOM_CODE = 'CUSTOM_CODE';
    case EMPTY = 'EMPTY';
    case EXTERNAL_WIDGET = 'EXTERNAL_WIDGET';
    case IMAGE = 'IMAGE';
    case INTERACTIVE_IMAGE = 'INTERACTIVE_IMAGE';
    case PRODUCT = 'PRODUCT';
    case TEXT = 'TEXT';
    case VIDEO = 'VIDEO';

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
