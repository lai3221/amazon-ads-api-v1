<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated;

use Lai3221\AmazonAdsApiV1\Api\AbstractApi;

/**
 * Describes every generated Amazon Ads API v1 resource and operation.
 *
 * @generated from the Amazon Ads API v1 full specification.
 */
final class ApiRegistry
{
    /**
     * Resource API classes keyed by exact OpenAPI tag.
     *
     * @var array<string, class-string<AbstractApi>>
     */
    public const APIS = [
        'AccountCombinationInvitations' => \Lai3221\AmazonAdsApiV1\Generated\Api\AccountCombinationInvitationsApi::class,
        'AdAssociations' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdAssociationsApi::class,
        'AdExtensions' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdExtensionsApi::class,
        'AdGroups' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdGroupsApi::class,
        'Ads' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdsApi::class,
        'AdvertiserAccounts' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdvertiserAccountsApi::class,
        'AdvertiserProductGroupEligibilities' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdvertiserProductGroupEligibilitiesApi::class,
        'AdvertisingDeals' => \Lai3221\AmazonAdsApiV1\Generated\Api\AdvertisingDealsApi::class,
        'BrandStoreEditionPublishVersions' => \Lai3221\AmazonAdsApiV1\Generated\Api\BrandStoreEditionPublishVersionsApi::class,
        'BrandStoreEditions' => \Lai3221\AmazonAdsApiV1\Generated\Api\BrandStoreEditionsApi::class,
        'BrandStorePages' => \Lai3221\AmazonAdsApiV1\Generated\Api\BrandStorePagesApi::class,
        'BrandStores' => \Lai3221\AmazonAdsApiV1\Generated\Api\BrandStoresApi::class,
        'Campaigns' => \Lai3221\AmazonAdsApiV1\Generated\Api\CampaignsApi::class,
        'DealAvailses' => \Lai3221\AmazonAdsApiV1\Generated\Api\DealAvailsesApi::class,
        'DealPerformances' => \Lai3221\AmazonAdsApiV1\Generated\Api\DealPerformancesApi::class,
        'DealPlanningMetricses' => \Lai3221\AmazonAdsApiV1\Generated\Api\DealPlanningMetricsesApi::class,
        'Events' => \Lai3221\AmazonAdsApiV1\Generated\Api\EventsApi::class,
        'GeoLocations' => \Lai3221\AmazonAdsApiV1\Generated\Api\GeoLocationsApi::class,
        'LinearTvDayparts' => \Lai3221\AmazonAdsApiV1\Generated\Api\LinearTvDaypartsApi::class,
        'LinearTvIncrementalReachForecasts' => \Lai3221\AmazonAdsApiV1\Generated\Api\LinearTvIncrementalReachForecastsApi::class,
        'LinearTvReachForecasts' => \Lai3221\AmazonAdsApiV1\Generated\Api\LinearTvReachForecastsApi::class,
        'LocationIndexes' => \Lai3221\AmazonAdsApiV1\Generated\Api\LocationIndexesApi::class,
        'ManagerAccounts' => \Lai3221\AmazonAdsApiV1\Generated\Api\ManagerAccountsApi::class,
        'PromotionCodeRedemptions' => \Lai3221\AmazonAdsApiV1\Generated\Api\PromotionCodeRedemptionsApi::class,
        'PromotionOffers' => \Lai3221\AmazonAdsApiV1\Generated\Api\PromotionOffersApi::class,
        'PromotionRewards' => \Lai3221\AmazonAdsApiV1\Generated\Api\PromotionRewardsApi::class,
        'Publishers' => \Lai3221\AmazonAdsApiV1\Generated\Api\PublishersApi::class,
        'Reports' => \Lai3221\AmazonAdsApiV1\Generated\Api\ReportsApi::class,
        'RuleLinks' => \Lai3221\AmazonAdsApiV1\Generated\Api\RuleLinksApi::class,
        'Rules' => \Lai3221\AmazonAdsApiV1\Generated\Api\RulesApi::class,
        'Sellers' => \Lai3221\AmazonAdsApiV1\Generated\Api\SellersApi::class,
        'SellingAccounts' => \Lai3221\AmazonAdsApiV1\Generated\Api\SellingAccountsApi::class,
        'Suppliers' => \Lai3221\AmazonAdsApiV1\Generated\Api\SuppliersApi::class,
        'Targets' => \Lai3221\AmazonAdsApiV1\Generated\Api\TargetsApi::class,
    ];

    /**
     * Route metadata keyed by exact OpenAPI operationId.
     *
     * @var array<string, array{method: string, path: string, tag: string, sdkMethod: string}>
     */
    public const OPERATIONS = [
        'CreateAccountCombinationInvitation' => ['method' => 'POST', 'path' => '/adsApi/v1/create/accountCombinationInvitations', 'tag' => 'AccountCombinationInvitations', 'sdkMethod' => 'createAccountCombinationInvitation'],
        'QueryAccountCombinationInvitation' => ['method' => 'POST', 'path' => '/adsApi/v1/query/accountCombinationInvitations', 'tag' => 'AccountCombinationInvitations', 'sdkMethod' => 'queryAccountCombinationInvitation'],
        'UpdateAccountCombinationInvitation' => ['method' => 'POST', 'path' => '/adsApi/v1/update/accountCombinationInvitations', 'tag' => 'AccountCombinationInvitations', 'sdkMethod' => 'updateAccountCombinationInvitation'],
        'CreateAdAssociation' => ['method' => 'POST', 'path' => '/adsApi/v1/create/adAssociations', 'tag' => 'AdAssociations', 'sdkMethod' => 'createAdAssociation'],
        'DeleteAdAssociation' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/adAssociations', 'tag' => 'AdAssociations', 'sdkMethod' => 'deleteAdAssociation'],
        'QueryAdAssociation' => ['method' => 'POST', 'path' => '/adsApi/v1/query/adAssociations', 'tag' => 'AdAssociations', 'sdkMethod' => 'queryAdAssociation'],
        'UpdateAdAssociation' => ['method' => 'POST', 'path' => '/adsApi/v1/update/adAssociations', 'tag' => 'AdAssociations', 'sdkMethod' => 'updateAdAssociation'],
        'CreateAdExtension' => ['method' => 'POST', 'path' => '/adsApi/v1/create/adExtensions', 'tag' => 'AdExtensions', 'sdkMethod' => 'createAdExtension'],
        'QueryAdExtension' => ['method' => 'POST', 'path' => '/adsApi/v1/query/adExtensions', 'tag' => 'AdExtensions', 'sdkMethod' => 'queryAdExtension'],
        'UpdateAdExtension' => ['method' => 'POST', 'path' => '/adsApi/v1/update/adExtensions', 'tag' => 'AdExtensions', 'sdkMethod' => 'updateAdExtension'],
        'CreateAdGroup' => ['method' => 'POST', 'path' => '/adsApi/v1/create/adGroups', 'tag' => 'AdGroups', 'sdkMethod' => 'createAdGroup'],
        'DeleteAdGroup' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/adGroups', 'tag' => 'AdGroups', 'sdkMethod' => 'deleteAdGroup'],
        'QueryAdGroup' => ['method' => 'POST', 'path' => '/adsApi/v1/query/adGroups', 'tag' => 'AdGroups', 'sdkMethod' => 'queryAdGroup'],
        'UpdateAdGroup' => ['method' => 'POST', 'path' => '/adsApi/v1/update/adGroups', 'tag' => 'AdGroups', 'sdkMethod' => 'updateAdGroup'],
        'CreateAd' => ['method' => 'POST', 'path' => '/adsApi/v1/create/ads', 'tag' => 'Ads', 'sdkMethod' => 'createAd'],
        'DeleteAd' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/ads', 'tag' => 'Ads', 'sdkMethod' => 'deleteAd'],
        'QueryAd' => ['method' => 'POST', 'path' => '/adsApi/v1/query/ads', 'tag' => 'Ads', 'sdkMethod' => 'queryAd'],
        'UpdateAd' => ['method' => 'POST', 'path' => '/adsApi/v1/update/ads', 'tag' => 'Ads', 'sdkMethod' => 'updateAd'],
        'CreateAdvertiserAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/create/advertiserAccounts', 'tag' => 'AdvertiserAccounts', 'sdkMethod' => 'createAdvertiserAccount'],
        'QueryAdvertiserAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/query/advertiserAccounts', 'tag' => 'AdvertiserAccounts', 'sdkMethod' => 'queryAdvertiserAccount'],
        'UpdateAdvertiserAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/update/advertiserAccounts', 'tag' => 'AdvertiserAccounts', 'sdkMethod' => 'updateAdvertiserAccount'],
        'CreateAdvertiserProductGroupEligibility' => ['method' => 'POST', 'path' => '/adsApi/v1/create/advertiserProductGroupEligibilities', 'tag' => 'AdvertiserProductGroupEligibilities', 'sdkMethod' => 'createAdvertiserProductGroupEligibility'],
        'QueryAdvertiserProductGroupEligibility' => ['method' => 'POST', 'path' => '/adsApi/v1/query/advertiserProductGroupEligibilities', 'tag' => 'AdvertiserProductGroupEligibilities', 'sdkMethod' => 'queryAdvertiserProductGroupEligibility'],
        'CreateAdvertisingDeal' => ['method' => 'POST', 'path' => '/adsApi/v1/create/advertisingDeals', 'tag' => 'AdvertisingDeals', 'sdkMethod' => 'createAdvertisingDeal'],
        'QueryAdvertisingDeal' => ['method' => 'POST', 'path' => '/adsApi/v1/query/advertisingDeals', 'tag' => 'AdvertisingDeals', 'sdkMethod' => 'queryAdvertisingDeal'],
        'UpdateAdvertisingDeal' => ['method' => 'POST', 'path' => '/adsApi/v1/update/advertisingDeals', 'tag' => 'AdvertisingDeals', 'sdkMethod' => 'updateAdvertisingDeal'],
        'QueryBrandStoreEditionPublishVersion' => ['method' => 'POST', 'path' => '/adsApi/v1/query/brandStoreEditionPublishVersions', 'tag' => 'BrandStoreEditionPublishVersions', 'sdkMethod' => 'queryBrandStoreEditionPublishVersion'],
        'UpdateBrandStoreEditionPublishVersion' => ['method' => 'POST', 'path' => '/adsApi/v1/update/brandStoreEditionPublishVersions', 'tag' => 'BrandStoreEditionPublishVersions', 'sdkMethod' => 'updateBrandStoreEditionPublishVersion'],
        'ListBrandStoreEdition' => ['method' => 'GET', 'path' => '/adsApi/v1/brandStoreEditions', 'tag' => 'BrandStoreEditions', 'sdkMethod' => 'listBrandStoreEdition'],
        'QueryBrandStorePage' => ['method' => 'POST', 'path' => '/adsApi/v1/query/brandStorePages', 'tag' => 'BrandStorePages', 'sdkMethod' => 'queryBrandStorePage'],
        'UpdateBrandStorePage' => ['method' => 'POST', 'path' => '/adsApi/v1/update/brandStorePages', 'tag' => 'BrandStorePages', 'sdkMethod' => 'updateBrandStorePage'],
        'QueryBrandStore' => ['method' => 'POST', 'path' => '/adsApi/v1/query/brandStores', 'tag' => 'BrandStores', 'sdkMethod' => 'queryBrandStore'],
        'CreateCampaign' => ['method' => 'POST', 'path' => '/adsApi/v1/create/campaigns', 'tag' => 'Campaigns', 'sdkMethod' => 'createCampaign'],
        'DeleteCampaign' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/campaigns', 'tag' => 'Campaigns', 'sdkMethod' => 'deleteCampaign'],
        'QueryCampaign' => ['method' => 'POST', 'path' => '/adsApi/v1/query/campaigns', 'tag' => 'Campaigns', 'sdkMethod' => 'queryCampaign'],
        'UpdateCampaign' => ['method' => 'POST', 'path' => '/adsApi/v1/update/campaigns', 'tag' => 'Campaigns', 'sdkMethod' => 'updateCampaign'],
        'QueryDealAvails' => ['method' => 'POST', 'path' => '/adsApi/v1/query/dealAvailses', 'tag' => 'DealAvailses', 'sdkMethod' => 'queryDealAvails'],
        'ListDealPerformance' => ['method' => 'GET', 'path' => '/adsApi/v1/dealPerformances', 'tag' => 'DealPerformances', 'sdkMethod' => 'listDealPerformance'],
        'ListDealPlanningMetrics' => ['method' => 'GET', 'path' => '/adsApi/v1/dealPlanningMetricses', 'tag' => 'DealPlanningMetricses', 'sdkMethod' => 'listDealPlanningMetrics'],
        'CreateEvent' => ['method' => 'POST', 'path' => '/adsApi/v1/create/events', 'tag' => 'Events', 'sdkMethod' => 'createEvent'],
        'CreateGeoLocation' => ['method' => 'POST', 'path' => '/adsApi/v1/create/geoLocations', 'tag' => 'GeoLocations', 'sdkMethod' => 'createGeoLocation'],
        'QueryLinearTvDaypart' => ['method' => 'POST', 'path' => '/adsApi/v1/query/linearTvDayparts', 'tag' => 'LinearTvDayparts', 'sdkMethod' => 'queryLinearTvDaypart'],
        'CreateLinearTvIncrementalReachForecast' => ['method' => 'POST', 'path' => '/adsApi/v1/create/linearTvIncrementalReachForecasts', 'tag' => 'LinearTvIncrementalReachForecasts', 'sdkMethod' => 'createLinearTvIncrementalReachForecast'],
        'CreateLinearTvReachForecast' => ['method' => 'POST', 'path' => '/adsApi/v1/create/linearTvReachForecasts', 'tag' => 'LinearTvReachForecasts', 'sdkMethod' => 'createLinearTvReachForecast'],
        'CreateLocationIndex' => ['method' => 'POST', 'path' => '/adsApi/v1/create/locationIndexes', 'tag' => 'LocationIndexes', 'sdkMethod' => 'createLocationIndex'],
        'ListLocationIndex' => ['method' => 'GET', 'path' => '/adsApi/v1/locationIndexes', 'tag' => 'LocationIndexes', 'sdkMethod' => 'listLocationIndex'],
        'RetrieveLocationIndex' => ['method' => 'POST', 'path' => '/adsApi/v1/retrieve/locationIndexes', 'tag' => 'LocationIndexes', 'sdkMethod' => 'retrieveLocationIndex'],
        'UpdateLocationIndex' => ['method' => 'POST', 'path' => '/adsApi/v1/update/locationIndexes', 'tag' => 'LocationIndexes', 'sdkMethod' => 'updateLocationIndex'],
        'CreateManagerAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/create/managerAccounts', 'tag' => 'ManagerAccounts', 'sdkMethod' => 'createManagerAccount'],
        'QueryManagerAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/query/managerAccounts', 'tag' => 'ManagerAccounts', 'sdkMethod' => 'queryManagerAccount'],
        'UpdateManagerAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/update/managerAccounts', 'tag' => 'ManagerAccounts', 'sdkMethod' => 'updateManagerAccount'],
        'CreatePromotionCodeRedemption' => ['method' => 'POST', 'path' => '/adsApi/v1/create/promotionCodeRedemptions', 'tag' => 'PromotionCodeRedemptions', 'sdkMethod' => 'createPromotionCodeRedemption'],
        'QueryPromotionOffer' => ['method' => 'POST', 'path' => '/adsApi/v1/query/promotionOffers', 'tag' => 'PromotionOffers', 'sdkMethod' => 'queryPromotionOffer'],
        'QueryPromotionReward' => ['method' => 'POST', 'path' => '/adsApi/v1/query/promotionRewards', 'tag' => 'PromotionRewards', 'sdkMethod' => 'queryPromotionReward'],
        'AdsApiv1QueryPublisher' => ['method' => 'POST', 'path' => '/adsApi/v1/query/publishers', 'tag' => 'Publishers', 'sdkMethod' => 'queryPublisher'],
        'AdsApiv1CreateReport' => ['method' => 'POST', 'path' => '/adsApi/v1/create/reports', 'tag' => 'Reports', 'sdkMethod' => 'createReport'],
        'AdsApiv1DeleteReport' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/reports', 'tag' => 'Reports', 'sdkMethod' => 'deleteReport'],
        'AdsApiv1RetrieveReport' => ['method' => 'POST', 'path' => '/adsApi/v1/retrieve/reports', 'tag' => 'Reports', 'sdkMethod' => 'retrieveReport'],
        'AdsApiv1CreateRuleLink' => ['method' => 'POST', 'path' => '/adsApi/v1/create/ruleLinks', 'tag' => 'RuleLinks', 'sdkMethod' => 'createRuleLink'],
        'AdsApiv1DeleteRuleLink' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/ruleLinks', 'tag' => 'RuleLinks', 'sdkMethod' => 'deleteRuleLink'],
        'AdsApiv1QueryRuleLink' => ['method' => 'POST', 'path' => '/adsApi/v1/query/ruleLinks', 'tag' => 'RuleLinks', 'sdkMethod' => 'queryRuleLink'],
        'AdsApiv1CreateRule' => ['method' => 'POST', 'path' => '/adsApi/v1/create/rules', 'tag' => 'Rules', 'sdkMethod' => 'createRule'],
        'AdsApiv1DeleteRule' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/rules', 'tag' => 'Rules', 'sdkMethod' => 'deleteRule'],
        'AdsApiv1QueryRule' => ['method' => 'POST', 'path' => '/adsApi/v1/query/rules', 'tag' => 'Rules', 'sdkMethod' => 'queryRule'],
        'AdsApiv1RetrieveRule' => ['method' => 'POST', 'path' => '/adsApi/v1/retrieve/rules', 'tag' => 'Rules', 'sdkMethod' => 'retrieveRule'],
        'AdsApiv1UpdateRule' => ['method' => 'POST', 'path' => '/adsApi/v1/update/rules', 'tag' => 'Rules', 'sdkMethod' => 'updateRule'],
        'QuerySeller' => ['method' => 'POST', 'path' => '/adsApi/v1/query/sellers', 'tag' => 'Sellers', 'sdkMethod' => 'querySeller'],
        'QuerySellingAccount' => ['method' => 'POST', 'path' => '/adsApi/v1/query/sellingAccounts', 'tag' => 'SellingAccounts', 'sdkMethod' => 'querySellingAccount'],
        'QuerySupplier' => ['method' => 'POST', 'path' => '/adsApi/v1/query/suppliers', 'tag' => 'Suppliers', 'sdkMethod' => 'querySupplier'],
        'CreateTarget' => ['method' => 'POST', 'path' => '/adsApi/v1/create/targets', 'tag' => 'Targets', 'sdkMethod' => 'createTarget'],
        'DeleteTarget' => ['method' => 'POST', 'path' => '/adsApi/v1/delete/targets', 'tag' => 'Targets', 'sdkMethod' => 'deleteTarget'],
        'QueryTarget' => ['method' => 'POST', 'path' => '/adsApi/v1/query/targets', 'tag' => 'Targets', 'sdkMethod' => 'queryTarget'],
        'UpdateTarget' => ['method' => 'POST', 'path' => '/adsApi/v1/update/targets', 'tag' => 'Targets', 'sdkMethod' => 'updateTarget'],
    ];

    /**
     * Returns the generated resource API class for an OpenAPI tag.
     *
     * @return class-string<AbstractApi>|null
     */
    public static function apiForTag(string $tag): ?string
    {
        return self::APIS[$tag] ?? null;
    }

    /**
     * Returns the number of generated OpenAPI operations.
     */
    public static function operationCount(): int
    {
        return count(self::OPERATIONS);
    }
}
