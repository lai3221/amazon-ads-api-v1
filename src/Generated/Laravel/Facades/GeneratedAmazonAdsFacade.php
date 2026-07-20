<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Laravel\Facades;

use Illuminate\Support\Facades\Facade;
use Lai3221\AmazonAdsApiV1\AmazonAdsClient;
use Lai3221\AmazonAdsApiV1\Generated\Api\AccountCombinationInvitationsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdAssociationsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdExtensionsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdGroupsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdvertiserAccountsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdvertiserProductGroupEligibilitiesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\AdvertisingDealsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\BrandStoreEditionPublishVersionsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\BrandStoreEditionsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\BrandStorePagesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\BrandStoresApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\CampaignsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\DealAvailsesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\DealPerformancesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\DealPlanningMetricsesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\EventsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\GeoLocationsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\LinearTvDaypartsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\LinearTvIncrementalReachForecastsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\LinearTvReachForecastsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\LocationIndexesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\ManagerAccountsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\PromotionCodeRedemptionsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\PromotionOffersApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\PromotionRewardsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\PublishersApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\ReportsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\RuleLinksApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\RulesApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\SellersApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\SellingAccountsApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\SuppliersApi;
use Lai3221\AmazonAdsApiV1\Generated\Api\TargetsApi;

/**
 * Declares every generated resource accessor available through the Laravel facade.
 *
 * @method static AccountCombinationInvitationsApi accountCombinationInvitations() Returns the generated AccountCombinationInvitations resource API.
 * @method static AdAssociationsApi adAssociations() Returns the generated AdAssociations resource API.
 * @method static AdExtensionsApi adExtensions() Returns the generated AdExtensions resource API.
 * @method static AdGroupsApi adGroups() Returns the generated AdGroups resource API.
 * @method static AdsApi ads() Returns the generated Ads resource API.
 * @method static AdvertiserAccountsApi advertiserAccounts() Returns the generated AdvertiserAccounts resource API.
 * @method static AdvertiserProductGroupEligibilitiesApi advertiserProductGroupEligibilities() Returns the generated AdvertiserProductGroupEligibilities resource API.
 * @method static AdvertisingDealsApi advertisingDeals() Returns the generated AdvertisingDeals resource API.
 * @method static BrandStoreEditionPublishVersionsApi brandStoreEditionPublishVersions() Returns the generated BrandStoreEditionPublishVersions resource API.
 * @method static BrandStoreEditionsApi brandStoreEditions() Returns the generated BrandStoreEditions resource API.
 * @method static BrandStorePagesApi brandStorePages() Returns the generated BrandStorePages resource API.
 * @method static BrandStoresApi brandStores() Returns the generated BrandStores resource API.
 * @method static CampaignsApi campaigns() Returns the generated Campaigns resource API.
 * @method static DealAvailsesApi dealAvailses() Returns the generated DealAvailses resource API.
 * @method static DealPerformancesApi dealPerformances() Returns the generated DealPerformances resource API.
 * @method static DealPlanningMetricsesApi dealPlanningMetricses() Returns the generated DealPlanningMetricses resource API.
 * @method static EventsApi events() Returns the generated Events resource API.
 * @method static GeoLocationsApi geoLocations() Returns the generated GeoLocations resource API.
 * @method static LinearTvDaypartsApi linearTvDayparts() Returns the generated LinearTvDayparts resource API.
 * @method static LinearTvIncrementalReachForecastsApi linearTvIncrementalReachForecasts() Returns the generated LinearTvIncrementalReachForecasts resource API.
 * @method static LinearTvReachForecastsApi linearTvReachForecasts() Returns the generated LinearTvReachForecasts resource API.
 * @method static LocationIndexesApi locationIndexes() Returns the generated LocationIndexes resource API.
 * @method static ManagerAccountsApi managerAccounts() Returns the generated ManagerAccounts resource API.
 * @method static PromotionCodeRedemptionsApi promotionCodeRedemptions() Returns the generated PromotionCodeRedemptions resource API.
 * @method static PromotionOffersApi promotionOffers() Returns the generated PromotionOffers resource API.
 * @method static PromotionRewardsApi promotionRewards() Returns the generated PromotionRewards resource API.
 * @method static PublishersApi publishers() Returns the generated Publishers resource API.
 * @method static ReportsApi reports() Returns the generated Reports resource API.
 * @method static RuleLinksApi ruleLinks() Returns the generated RuleLinks resource API.
 * @method static RulesApi rules() Returns the generated Rules resource API.
 * @method static SellersApi sellers() Returns the generated Sellers resource API.
 * @method static SellingAccountsApi sellingAccounts() Returns the generated SellingAccounts resource API.
 * @method static SuppliersApi suppliers() Returns the generated Suppliers resource API.
 * @method static TargetsApi targets() Returns the generated Targets resource API.
 *
 * @generated from all OpenAPI operation tags.
 */
abstract class GeneratedAmazonAdsFacade extends Facade
{
    /**
     * Returns the service container key resolved by the facade.
     */
    protected static function getFacadeAccessor(): string
    {
        return AmazonAdsClient::class;
    }
}
