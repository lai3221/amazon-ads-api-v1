# Generated API reference

This index is generated from the Amazon Ads API v1 full specification. Do not edit it manually.

- Specification SHA-256: `b12d6ae0b1f460995cb440e8f8fb75e9f5e395a3eafff3aa3e8fbbd2d54b0b2e`
- Resource APIs: 34
- Operations: 73
- Component schemas: 1270

| Resource tag | SDK method | HTTP method | Path | Success model |
|---|---|---:|---|---|
| `AccountCombinationInvitations` | `AccountCombinationInvitationsApi::createAccountCombinationInvitation()` | `POST` | `/adsApi/v1/create/accountCombinationInvitations` | `AccountCombinationInvitationMultiStatusResponse` |
| `AccountCombinationInvitations` | `AccountCombinationInvitationsApi::queryAccountCombinationInvitation()` | `POST` | `/adsApi/v1/query/accountCombinationInvitations` | `AccountCombinationInvitationSuccessResponse` |
| `AccountCombinationInvitations` | `AccountCombinationInvitationsApi::updateAccountCombinationInvitation()` | `POST` | `/adsApi/v1/update/accountCombinationInvitations` | `AccountCombinationInvitationMultiStatusResponse` |
| `AdAssociations` | `AdAssociationsApi::createAdAssociation()` | `POST` | `/adsApi/v1/create/adAssociations` | `AdAssociationMultiStatusResponse` |
| `AdAssociations` | `AdAssociationsApi::deleteAdAssociation()` | `POST` | `/adsApi/v1/delete/adAssociations` | `AdAssociationMultiStatusResponse` |
| `AdAssociations` | `AdAssociationsApi::queryAdAssociation()` | `POST` | `/adsApi/v1/query/adAssociations` | `AdAssociationSuccessResponse` |
| `AdAssociations` | `AdAssociationsApi::updateAdAssociation()` | `POST` | `/adsApi/v1/update/adAssociations` | `AdAssociationMultiStatusResponse` |
| `AdExtensions` | `AdExtensionsApi::createAdExtension()` | `POST` | `/adsApi/v1/create/adExtensions` | `AdExtensionMultiStatusResponseWithPartialErrors` |
| `AdExtensions` | `AdExtensionsApi::queryAdExtension()` | `POST` | `/adsApi/v1/query/adExtensions` | `AdExtensionSuccessResponse` |
| `AdExtensions` | `AdExtensionsApi::updateAdExtension()` | `POST` | `/adsApi/v1/update/adExtensions` | `AdExtensionMultiStatusResponseWithPartialErrors` |
| `AdGroups` | `AdGroupsApi::createAdGroup()` | `POST` | `/adsApi/v1/create/adGroups` | `AdGroupMultiStatusResponseWithPartialErrors` |
| `AdGroups` | `AdGroupsApi::deleteAdGroup()` | `POST` | `/adsApi/v1/delete/adGroups` | `AdGroupMultiStatusResponseWithPartialErrors` |
| `AdGroups` | `AdGroupsApi::queryAdGroup()` | `POST` | `/adsApi/v1/query/adGroups` | `AdGroupSuccessResponse` |
| `AdGroups` | `AdGroupsApi::updateAdGroup()` | `POST` | `/adsApi/v1/update/adGroups` | `AdGroupMultiStatusResponseWithPartialErrors` |
| `Ads` | `AdsApi::createAd()` | `POST` | `/adsApi/v1/create/ads` | `AdMultiStatusResponseWithPartialErrors` |
| `Ads` | `AdsApi::deleteAd()` | `POST` | `/adsApi/v1/delete/ads` | `AdMultiStatusResponseWithPartialErrors` |
| `Ads` | `AdsApi::queryAd()` | `POST` | `/adsApi/v1/query/ads` | `AdSuccessResponse` |
| `Ads` | `AdsApi::updateAd()` | `POST` | `/adsApi/v1/update/ads` | `AdMultiStatusResponseWithPartialErrors` |
| `AdvertiserAccounts` | `AdvertiserAccountsApi::createAdvertiserAccount()` | `POST` | `/adsApi/v1/create/advertiserAccounts` | `AdvertiserAccountMultiStatusResponse` |
| `AdvertiserAccounts` | `AdvertiserAccountsApi::queryAdvertiserAccount()` | `POST` | `/adsApi/v1/query/advertiserAccounts` | `AdvertiserAccountSuccessResponse` |
| `AdvertiserAccounts` | `AdvertiserAccountsApi::updateAdvertiserAccount()` | `POST` | `/adsApi/v1/update/advertiserAccounts` | `AdvertiserAccountMultiStatusResponse` |
| `AdvertiserProductGroupEligibilities` | `AdvertiserProductGroupEligibilitiesApi::createAdvertiserProductGroupEligibility()` | `POST` | `/adsApi/v1/create/advertiserProductGroupEligibilities` | `AdvertiserProductGroupEligibilityMultiStatusResponse` |
| `AdvertiserProductGroupEligibilities` | `AdvertiserProductGroupEligibilitiesApi::queryAdvertiserProductGroupEligibility()` | `POST` | `/adsApi/v1/query/advertiserProductGroupEligibilities` | `AdvertiserProductGroupEligibilitySuccessResponse` |
| `AdvertisingDeals` | `AdvertisingDealsApi::createAdvertisingDeal()` | `POST` | `/adsApi/v1/create/advertisingDeals` | `AdvertisingDealMultiStatusResponse` |
| `AdvertisingDeals` | `AdvertisingDealsApi::queryAdvertisingDeal()` | `POST` | `/adsApi/v1/query/advertisingDeals` | `AdvertisingDealSuccessResponse` |
| `AdvertisingDeals` | `AdvertisingDealsApi::updateAdvertisingDeal()` | `POST` | `/adsApi/v1/update/advertisingDeals` | `AdvertisingDealMultiStatusResponse` |
| `BrandStoreEditionPublishVersions` | `BrandStoreEditionPublishVersionsApi::queryBrandStoreEditionPublishVersion()` | `POST` | `/adsApi/v1/query/brandStoreEditionPublishVersions` | `BrandStoreEditionPublishVersionSuccessResponse` |
| `BrandStoreEditionPublishVersions` | `BrandStoreEditionPublishVersionsApi::updateBrandStoreEditionPublishVersion()` | `POST` | `/adsApi/v1/update/brandStoreEditionPublishVersions` | `BrandStoreEditionPublishVersionMultiStatusResponse` |
| `BrandStoreEditions` | `BrandStoreEditionsApi::listBrandStoreEdition()` | `GET` | `/adsApi/v1/brandStoreEditions` | `BrandStoreEditionSuccessResponse` |
| `BrandStorePages` | `BrandStorePagesApi::queryBrandStorePage()` | `POST` | `/adsApi/v1/query/brandStorePages` | `BrandStorePageSuccessResponse` |
| `BrandStorePages` | `BrandStorePagesApi::updateBrandStorePage()` | `POST` | `/adsApi/v1/update/brandStorePages` | `BrandStorePageMultiStatusResponse` |
| `BrandStores` | `BrandStoresApi::queryBrandStore()` | `POST` | `/adsApi/v1/query/brandStores` | `BrandStoreSuccessResponse` |
| `Campaigns` | `CampaignsApi::createCampaign()` | `POST` | `/adsApi/v1/create/campaigns` | `CampaignMultiStatusResponseWithPartialErrors` |
| `Campaigns` | `CampaignsApi::deleteCampaign()` | `POST` | `/adsApi/v1/delete/campaigns` | `CampaignMultiStatusResponseWithPartialErrors` |
| `Campaigns` | `CampaignsApi::queryCampaign()` | `POST` | `/adsApi/v1/query/campaigns` | `CampaignSuccessResponse` |
| `Campaigns` | `CampaignsApi::updateCampaign()` | `POST` | `/adsApi/v1/update/campaigns` | `CampaignMultiStatusResponseWithPartialErrors` |
| `DealAvailses` | `DealAvailsesApi::queryDealAvails()` | `POST` | `/adsApi/v1/query/dealAvailses` | `DealAvailsSuccessResponse` |
| `DealPerformances` | `DealPerformancesApi::listDealPerformance()` | `GET` | `/adsApi/v1/dealPerformances` | `DealPerformanceSuccessResponse` |
| `DealPlanningMetricses` | `DealPlanningMetricsesApi::listDealPlanningMetrics()` | `GET` | `/adsApi/v1/dealPlanningMetricses` | `DealPlanningMetricsSuccessResponse` |
| `Events` | `EventsApi::createEvent()` | `POST` | `/adsApi/v1/create/events` | `EventMultiStatusResponse` |
| `GeoLocations` | `GeoLocationsApi::createGeoLocation()` | `POST` | `/adsApi/v1/create/geoLocations` | `GeoLocationMultiStatusResponse` |
| `LinearTvDayparts` | `LinearTvDaypartsApi::queryLinearTvDaypart()` | `POST` | `/adsApi/v1/query/linearTvDayparts` | `LinearTvDaypartSuccessResponse` |
| `LinearTvIncrementalReachForecasts` | `LinearTvIncrementalReachForecastsApi::createLinearTvIncrementalReachForecast()` | `POST` | `/adsApi/v1/create/linearTvIncrementalReachForecasts` | `LinearTvIncrementalReachForecastMultiStatusResponse` |
| `LinearTvReachForecasts` | `LinearTvReachForecastsApi::createLinearTvReachForecast()` | `POST` | `/adsApi/v1/create/linearTvReachForecasts` | `LinearTvReachForecastMultiStatusResponse` |
| `LocationIndexes` | `LocationIndexesApi::createLocationIndex()` | `POST` | `/adsApi/v1/create/locationIndexes` | `LocationIndexMultiStatusResponse` |
| `LocationIndexes` | `LocationIndexesApi::listLocationIndex()` | `GET` | `/adsApi/v1/locationIndexes` | `LocationIndexSuccessResponse` |
| `LocationIndexes` | `LocationIndexesApi::retrieveLocationIndex()` | `POST` | `/adsApi/v1/retrieve/locationIndexes` | `LocationIndexMultiStatusResponse` |
| `LocationIndexes` | `LocationIndexesApi::updateLocationIndex()` | `POST` | `/adsApi/v1/update/locationIndexes` | `LocationIndexMultiStatusResponse` |
| `ManagerAccounts` | `ManagerAccountsApi::createManagerAccount()` | `POST` | `/adsApi/v1/create/managerAccounts` | `ManagerAccountMultiStatusResponse` |
| `ManagerAccounts` | `ManagerAccountsApi::queryManagerAccount()` | `POST` | `/adsApi/v1/query/managerAccounts` | `ManagerAccountSuccessResponse` |
| `ManagerAccounts` | `ManagerAccountsApi::updateManagerAccount()` | `POST` | `/adsApi/v1/update/managerAccounts` | `ManagerAccountMultiStatusResponse` |
| `PromotionCodeRedemptions` | `PromotionCodeRedemptionsApi::createPromotionCodeRedemption()` | `POST` | `/adsApi/v1/create/promotionCodeRedemptions` | `PromotionCodeRedemptionMultiStatusResponse` |
| `PromotionOffers` | `PromotionOffersApi::queryPromotionOffer()` | `POST` | `/adsApi/v1/query/promotionOffers` | `PromotionOfferSuccessResponse` |
| `PromotionRewards` | `PromotionRewardsApi::queryPromotionReward()` | `POST` | `/adsApi/v1/query/promotionRewards` | `PromotionRewardSuccessResponse` |
| `Publishers` | `PublishersApi::queryPublisher()` | `POST` | `/adsApi/v1/query/publishers` | `PublisherSuccessResponse` |
| `Reports` | `ReportsApi::createReport()` | `POST` | `/adsApi/v1/create/reports` | `ReportMultiStatusResponse` |
| `Reports` | `ReportsApi::deleteReport()` | `POST` | `/adsApi/v1/delete/reports` | `ReportMultiStatusResponse` |
| `Reports` | `ReportsApi::retrieveReport()` | `POST` | `/adsApi/v1/retrieve/reports` | `ReportMultiStatusResponse` |
| `RuleLinks` | `RuleLinksApi::createRuleLink()` | `POST` | `/adsApi/v1/create/ruleLinks` | `RuleLinkMultiStatusResponse` |
| `RuleLinks` | `RuleLinksApi::deleteRuleLink()` | `POST` | `/adsApi/v1/delete/ruleLinks` | `RuleLinkMultiStatusResponse` |
| `RuleLinks` | `RuleLinksApi::queryRuleLink()` | `POST` | `/adsApi/v1/query/ruleLinks` | `RuleLinkSuccessResponse` |
| `Rules` | `RulesApi::createRule()` | `POST` | `/adsApi/v1/create/rules` | `RuleMultiStatusResponse` |
| `Rules` | `RulesApi::deleteRule()` | `POST` | `/adsApi/v1/delete/rules` | `RuleMultiStatusResponse` |
| `Rules` | `RulesApi::queryRule()` | `POST` | `/adsApi/v1/query/rules` | `RuleSuccessResponse` |
| `Rules` | `RulesApi::retrieveRule()` | `POST` | `/adsApi/v1/retrieve/rules` | `RuleMultiStatusResponse` |
| `Rules` | `RulesApi::updateRule()` | `POST` | `/adsApi/v1/update/rules` | `RuleMultiStatusResponse` |
| `Sellers` | `SellersApi::querySeller()` | `POST` | `/adsApi/v1/query/sellers` | `SellerSuccessResponse` |
| `SellingAccounts` | `SellingAccountsApi::querySellingAccount()` | `POST` | `/adsApi/v1/query/sellingAccounts` | `SellingAccountSuccessResponse` |
| `Suppliers` | `SuppliersApi::querySupplier()` | `POST` | `/adsApi/v1/query/suppliers` | `SupplierSuccessResponse` |
| `Targets` | `TargetsApi::createTarget()` | `POST` | `/adsApi/v1/create/targets` | `TargetMultiStatusResponseWithPartialErrors` |
| `Targets` | `TargetsApi::deleteTarget()` | `POST` | `/adsApi/v1/delete/targets` | `TargetMultiStatusResponseWithPartialErrors` |
| `Targets` | `TargetsApi::queryTarget()` | `POST` | `/adsApi/v1/query/targets` | `TargetSuccessResponse` |
| `Targets` | `TargetsApi::updateTarget()` | `POST` | `/adsApi/v1/update/targets` | `TargetMultiStatusResponseWithPartialErrors` |
