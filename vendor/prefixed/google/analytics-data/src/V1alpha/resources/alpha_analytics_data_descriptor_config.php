<?php

namespace Matomo\Dependencies\GoogleAnalyticsImporter;

/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */
return ['interfaces' => ['google.analytics.data.v1alpha.AlphaAnalyticsData' => ['CreateAudienceList' => ['longRunning' => ['operationReturnType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\AudienceList', 'metadataReturnType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\AudienceListMetadata', 'initialPollDelayMillis' => '500', 'pollDelayMultiplier' => '1.5', 'maxPollDelayMillis' => '5000', 'totalPollTimeoutMillis' => '300000'], 'callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::LONGRUNNING_CALL, 'headerParams' => [['keyName' => 'parent', 'fieldAccessors' => ['getParent']]]], 'CreateReportTask' => ['longRunning' => ['operationReturnType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\ReportTask', 'metadataReturnType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\ReportTaskMetadata', 'initialPollDelayMillis' => '500', 'pollDelayMultiplier' => '1.5', 'maxPollDelayMillis' => '5000', 'totalPollTimeoutMillis' => '300000'], 'callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::LONGRUNNING_CALL, 'headerParams' => [['keyName' => 'parent', 'fieldAccessors' => ['getParent']]]], 'CreateRecurringAudienceList' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\RecurringAudienceList', 'headerParams' => [['keyName' => 'parent', 'fieldAccessors' => ['getParent']]]], 'GetAudienceList' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\AudienceList', 'headerParams' => [['keyName' => 'name', 'fieldAccessors' => ['getName']]]], 'GetRecurringAudienceList' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\RecurringAudienceList', 'headerParams' => [['keyName' => 'name', 'fieldAccessors' => ['getName']]]], 'GetReportTask' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\ReportTask', 'headerParams' => [['keyName' => 'name', 'fieldAccessors' => ['getName']]]], 'ListAudienceLists' => ['pageStreaming' => ['requestPageTokenGetMethod' => 'getPageToken', 'requestPageTokenSetMethod' => 'setPageToken', 'requestPageSizeGetMethod' => 'getPageSize', 'requestPageSizeSetMethod' => 'setPageSize', 'responsePageTokenGetMethod' => 'getNextPageToken', 'resourcesGetMethod' => 'getAudienceLists'], 'callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::PAGINATED_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\ListAudienceListsResponse', 'headerParams' => [['keyName' => 'parent', 'fieldAccessors' => ['getParent']]]], 'ListRecurringAudienceLists' => ['pageStreaming' => ['requestPageTokenGetMethod' => 'getPageToken', 'requestPageTokenSetMethod' => 'setPageToken', 'requestPageSizeGetMethod' => 'getPageSize', 'requestPageSizeSetMethod' => 'setPageSize', 'responsePageTokenGetMethod' => 'getNextPageToken', 'resourcesGetMethod' => 'getRecurringAudienceLists'], 'callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::PAGINATED_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\ListRecurringAudienceListsResponse', 'headerParams' => [['keyName' => 'parent', 'fieldAccessors' => ['getParent']]]], 'ListReportTasks' => ['pageStreaming' => ['requestPageTokenGetMethod' => 'getPageToken', 'requestPageTokenSetMethod' => 'setPageToken', 'requestPageSizeGetMethod' => 'getPageSize', 'requestPageSizeSetMethod' => 'setPageSize', 'responsePageTokenGetMethod' => 'getNextPageToken', 'resourcesGetMethod' => 'getReportTasks'], 'callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::PAGINATED_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\ListReportTasksResponse', 'headerParams' => [['keyName' => 'parent', 'fieldAccessors' => ['getParent']]]], 'QueryAudienceList' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\QueryAudienceListResponse', 'headerParams' => [['keyName' => 'name', 'fieldAccessors' => ['getName']]]], 'QueryReportTask' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\QueryReportTaskResponse', 'headerParams' => [['keyName' => 'name', 'fieldAccessors' => ['getName']]]], 'RunFunnelReport' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\RunFunnelReportResponse', 'headerParams' => [['keyName' => 'property', 'fieldAccessors' => ['getProperty']]]], 'SheetExportAudienceList' => ['callType' => \Matomo\Dependencies\GoogleAnalyticsImporter\Google\ApiCore\Call::UNARY_CALL, 'responseType' => 'Matomo\\Dependencies\\GoogleAnalyticsImporter\\Google\\Analytics\\Data\\V1alpha\\SheetExportAudienceListResponse', 'headerParams' => [['keyName' => 'name', 'fieldAccessors' => ['getName']]]], 'templateMap' => ['audienceList' => 'properties/{property}/audienceLists/{audience_list}', 'property' => 'properties/{property}', 'recurringAudienceList' => 'properties/{property}/recurringAudienceLists/{recurring_audience_list}', 'reportTask' => 'properties/{property}/reportTasks/{report_task}']]]];
