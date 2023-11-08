<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/audience.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha;

class Audience
{
    public static $is_initialized = \false;
    public static function initOnce()
    {
        $pool = \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == \true) {
            return;
        }
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Resource::initOnce();
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Protobuf\Duration::initOnce();
        $pool->internalAddGeneratedFile('
�%
-google/analytics/admin/v1alpha/audience.protogoogle.analytics.admin.v1alphagoogle/api/resource.protogoogle/protobuf/duration.proto"�
AudienceDimensionOrMetricFiltere
string_filter (2L.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.StringFilterH f
in_list_filter (2L.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.InListFilterH g
numeric_filter (2M.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericFilterH g
between_filter (2M.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.BetweenFilterH 

field_name (	B�A�A!
at_any_point_in_time (B�A 
in_any_n_day_period (B�A�
StringFiltero

match_type (2V.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.StringFilter.MatchTypeB�A
value (	B�A
case_sensitive (B�A"q
	MatchType
MATCH_TYPE_UNSPECIFIED 	
EXACT
BEGINS_WITH
	ENDS_WITH
CONTAINS
FULL_REGEXP@
InListFilter
values (	B�A
case_sensitive (B�AJ
NumericValue
int64_value (H 
double_value (H B
	one_value�
NumericFiltero
	operation (2W.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericFilter.OperationB�A`
value (2L.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValueB�A"R
	Operation
OPERATION_UNSPECIFIED 	
EQUAL
	LESS_THAN
GREATER_THAN�
BetweenFiltere

from_value (2L.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValueB�Ac
to_value (2L.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValueB�AB

one_filter"�
AudienceEventFilter

event_name (	B�A�Ah
!event_parameter_filter_expression (28.google.analytics.admin.v1alpha.AudienceFilterExpressionB�A"�
AudienceFilterExpressionQ
	and_group (2<.google.analytics.admin.v1alpha.AudienceFilterExpressionListH P
or_group (2<.google.analytics.admin.v1alpha.AudienceFilterExpressionListH R
not_expression (28.google.analytics.admin.v1alpha.AudienceFilterExpressionH e
dimension_or_metric_filter (2?.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilterH K
event_filter (23.google.analytics.admin.v1alpha.AudienceEventFilterH B
expr"t
AudienceFilterExpressionListT
filter_expressions (28.google.analytics.admin.v1alpha.AudienceFilterExpression"�
AudienceSimpleFilterJ
scope (23.google.analytics.admin.v1alpha.AudienceFilterScopeB�A�A[
filter_expression (28.google.analytics.admin.v1alpha.AudienceFilterExpressionB�A�A"�
AudienceSequenceFilterJ
scope (23.google.analytics.admin.v1alpha.AudienceFilterScopeB�A�AA
sequence_maximum_duration (2.google.protobuf.DurationB�Ah
sequence_steps (2K.google.analytics.admin.v1alpha.AudienceSequenceFilter.AudienceSequenceStepB�A�
AudienceSequenceStepJ
scope (23.google.analytics.admin.v1alpha.AudienceFilterScopeB�A�A 
immediately_follows (B�A;
constraint_duration (2.google.protobuf.DurationB�A[
filter_expression (28.google.analytics.admin.v1alpha.AudienceFilterExpressionB�A�A"�
AudienceFilterClauseM
simple_filter (24.google.analytics.admin.v1alpha.AudienceSimpleFilterH Q
sequence_filter (26.google.analytics.admin.v1alpha.AudienceSequenceFilterH a
clause_type (2G.google.analytics.admin.v1alpha.AudienceFilterClause.AudienceClauseTypeB�A"T
AudienceClauseType$
 AUDIENCE_CLAUSE_TYPE_UNSPECIFIED 
INCLUDE
EXCLUDEB
filter"�
AudienceEventTrigger

event_name (	B�A]
log_condition (2A.google.analytics.admin.v1alpha.AudienceEventTrigger.LogConditionB�A"c
LogCondition
LOG_CONDITION_UNSPECIFIED 
AUDIENCE_JOINED
AUDIENCE_MEMBERSHIP_RENEWED"�
Audience
name (	B�A
display_name (	B�A
description (	B�A(
membership_duration_days (B�A�A(
ads_personalization_enabled (B�AP
event_trigger (24.google.analytics.admin.v1alpha.AudienceEventTriggerB�Al
exclusion_duration_mode (2F.google.analytics.admin.v1alpha.Audience.AudienceExclusionDurationModeB�AW
filter_clauses (24.google.analytics.admin.v1alpha.AudienceFilterClauseB	�A�A�A"�
AudienceExclusionDurationMode0
,AUDIENCE_EXCLUSION_DURATION_MODE_UNSPECIFIED 
EXCLUDE_TEMPORARILY
EXCLUDE_PERMANENTLY:W�AT
&analyticsadmin.googleapis.com/Audience*properties/{property}/audiences/{audience}*�
AudienceFilterScope%
!AUDIENCE_FILTER_SCOPE_UNSPECIFIED +
\'AUDIENCE_FILTER_SCOPE_WITHIN_SAME_EVENT-
)AUDIENCE_FILTER_SCOPE_WITHIN_SAME_SESSION-
)AUDIENCE_FILTER_SCOPE_ACROSS_ALL_SESSIONSBz
"com.google.analytics.admin.v1alphaBAudienceProtoPZCgoogle.golang.org/genproto/googleapis/analytics/admin/v1alpha;adminbproto3', \true);
        static::$is_initialized = \true;
    }
}
