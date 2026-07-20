<?php

declare(strict_types=1);

namespace Lai3221\AmazonAdsApiV1\Generated\Concerns;

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
 * Adds explicit accessors for every generated Amazon Ads API v1 resource.
 *
 * @generated from all OpenAPI operation tags.
 */
trait HasGeneratedApis
{
    /**
     * Returns the generated AccountCombinationInvitations resource API.
     */
    public function accountCombinationInvitations(): AccountCombinationInvitationsApi
    {
        return $this->api(AccountCombinationInvitationsApi::class);
    }

    /**
     * Returns the generated AdAssociations resource API.
     */
    public function adAssociations(): AdAssociationsApi
    {
        return $this->api(AdAssociationsApi::class);
    }

    /**
     * Returns the generated AdExtensions resource API.
     */
    public function adExtensions(): AdExtensionsApi
    {
        return $this->api(AdExtensionsApi::class);
    }

    /**
     * Returns the generated AdGroups resource API.
     */
    public function adGroups(): AdGroupsApi
    {
        return $this->api(AdGroupsApi::class);
    }

    /**
     * Returns the generated Ads resource API.
     */
    public function ads(): AdsApi
    {
        return $this->api(AdsApi::class);
    }

    /**
     * Returns the generated AdvertiserAccounts resource API.
     */
    public function advertiserAccounts(): AdvertiserAccountsApi
    {
        return $this->api(AdvertiserAccountsApi::class);
    }

    /**
     * Returns the generated AdvertiserProductGroupEligibilities resource API.
     */
    public function advertiserProductGroupEligibilities(): AdvertiserProductGroupEligibilitiesApi
    {
        return $this->api(AdvertiserProductGroupEligibilitiesApi::class);
    }

    /**
     * Returns the generated AdvertisingDeals resource API.
     */
    public function advertisingDeals(): AdvertisingDealsApi
    {
        return $this->api(AdvertisingDealsApi::class);
    }

    /**
     * Returns the generated BrandStoreEditionPublishVersions resource API.
     */
    public function brandStoreEditionPublishVersions(): BrandStoreEditionPublishVersionsApi
    {
        return $this->api(BrandStoreEditionPublishVersionsApi::class);
    }

    /**
     * Returns the generated BrandStoreEditions resource API.
     */
    public function brandStoreEditions(): BrandStoreEditionsApi
    {
        return $this->api(BrandStoreEditionsApi::class);
    }

    /**
     * Returns the generated BrandStorePages resource API.
     */
    public function brandStorePages(): BrandStorePagesApi
    {
        return $this->api(BrandStorePagesApi::class);
    }

    /**
     * Returns the generated BrandStores resource API.
     */
    public function brandStores(): BrandStoresApi
    {
        return $this->api(BrandStoresApi::class);
    }

    /**
     * Returns the generated Campaigns resource API.
     */
    public function campaigns(): CampaignsApi
    {
        return $this->api(CampaignsApi::class);
    }

    /**
     * Returns the generated DealAvailses resource API.
     */
    public function dealAvailses(): DealAvailsesApi
    {
        return $this->api(DealAvailsesApi::class);
    }

    /**
     * Returns the generated DealPerformances resource API.
     */
    public function dealPerformances(): DealPerformancesApi
    {
        return $this->api(DealPerformancesApi::class);
    }

    /**
     * Returns the generated DealPlanningMetricses resource API.
     */
    public function dealPlanningMetricses(): DealPlanningMetricsesApi
    {
        return $this->api(DealPlanningMetricsesApi::class);
    }

    /**
     * Returns the generated Events resource API.
     */
    public function events(): EventsApi
    {
        return $this->api(EventsApi::class);
    }

    /**
     * Returns the generated GeoLocations resource API.
     */
    public function geoLocations(): GeoLocationsApi
    {
        return $this->api(GeoLocationsApi::class);
    }

    /**
     * Returns the generated LinearTvDayparts resource API.
     */
    public function linearTvDayparts(): LinearTvDaypartsApi
    {
        return $this->api(LinearTvDaypartsApi::class);
    }

    /**
     * Returns the generated LinearTvIncrementalReachForecasts resource API.
     */
    public function linearTvIncrementalReachForecasts(): LinearTvIncrementalReachForecastsApi
    {
        return $this->api(LinearTvIncrementalReachForecastsApi::class);
    }

    /**
     * Returns the generated LinearTvReachForecasts resource API.
     */
    public function linearTvReachForecasts(): LinearTvReachForecastsApi
    {
        return $this->api(LinearTvReachForecastsApi::class);
    }

    /**
     * Returns the generated LocationIndexes resource API.
     */
    public function locationIndexes(): LocationIndexesApi
    {
        return $this->api(LocationIndexesApi::class);
    }

    /**
     * Returns the generated ManagerAccounts resource API.
     */
    public function managerAccounts(): ManagerAccountsApi
    {
        return $this->api(ManagerAccountsApi::class);
    }

    /**
     * Returns the generated PromotionCodeRedemptions resource API.
     */
    public function promotionCodeRedemptions(): PromotionCodeRedemptionsApi
    {
        return $this->api(PromotionCodeRedemptionsApi::class);
    }

    /**
     * Returns the generated PromotionOffers resource API.
     */
    public function promotionOffers(): PromotionOffersApi
    {
        return $this->api(PromotionOffersApi::class);
    }

    /**
     * Returns the generated PromotionRewards resource API.
     */
    public function promotionRewards(): PromotionRewardsApi
    {
        return $this->api(PromotionRewardsApi::class);
    }

    /**
     * Returns the generated Publishers resource API.
     */
    public function publishers(): PublishersApi
    {
        return $this->api(PublishersApi::class);
    }

    /**
     * Returns the generated Reports resource API.
     */
    public function reports(): ReportsApi
    {
        return $this->api(ReportsApi::class);
    }

    /**
     * Returns the generated RuleLinks resource API.
     */
    public function ruleLinks(): RuleLinksApi
    {
        return $this->api(RuleLinksApi::class);
    }

    /**
     * Returns the generated Rules resource API.
     */
    public function rules(): RulesApi
    {
        return $this->api(RulesApi::class);
    }

    /**
     * Returns the generated Sellers resource API.
     */
    public function sellers(): SellersApi
    {
        return $this->api(SellersApi::class);
    }

    /**
     * Returns the generated SellingAccounts resource API.
     */
    public function sellingAccounts(): SellingAccountsApi
    {
        return $this->api(SellingAccountsApi::class);
    }

    /**
     * Returns the generated Suppliers resource API.
     */
    public function suppliers(): SuppliersApi
    {
        return $this->api(SuppliersApi::class);
    }

    /**
     * Returns the generated Targets resource API.
     */
    public function targets(): TargetsApi
    {
        return $this->api(TargetsApi::class);
    }
}
