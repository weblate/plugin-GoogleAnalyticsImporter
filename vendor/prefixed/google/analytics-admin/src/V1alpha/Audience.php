<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/audience.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A resource message representing a GA4 Audience.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.Audience</code>
 */
class Audience extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name for this Audience resource.
     * Format: properties/{propertyId}/audiences/{audienceId}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Required. The display name of the Audience.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Required. The description of the Audience.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $description = '';
    /**
     * Required. Immutable. The duration a user should stay in an Audience. It
     * cannot be set to more than 540 days.
     *
     * Generated from protobuf field <code>int32 membership_duration_days = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $membership_duration_days = 0;
    /**
     * Output only. It is automatically set by GA to false if this is an NPA
     * Audience and is excluded from ads personalization.
     *
     * Generated from protobuf field <code>bool ads_personalization_enabled = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $ads_personalization_enabled = \false;
    /**
     * Optional. Specifies an event to log when a user joins the Audience. If not
     * set, no event is logged when a user joins the Audience.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceEventTrigger event_trigger = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $event_trigger = null;
    /**
     * Immutable. Specifies how long an exclusion lasts for users that meet the
     * exclusion filter. It is applied to all EXCLUDE filter clauses and is
     * ignored when there is no EXCLUDE filter clause in the Audience.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience.AudienceExclusionDurationMode exclusion_duration_mode = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $exclusion_duration_mode = 0;
    /**
     * Required. Immutable. Unordered list. Filter clauses that define the
     * Audience. All clauses will be AND’ed together.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AudienceFilterClause filter_clauses = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = UNORDERED_LIST];</code>
     */
    private $filter_clauses;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name for this Audience resource.
     *           Format: properties/{propertyId}/audiences/{audienceId}
     *     @type string $display_name
     *           Required. The display name of the Audience.
     *     @type string $description
     *           Required. The description of the Audience.
     *     @type int $membership_duration_days
     *           Required. Immutable. The duration a user should stay in an Audience. It
     *           cannot be set to more than 540 days.
     *     @type bool $ads_personalization_enabled
     *           Output only. It is automatically set by GA to false if this is an NPA
     *           Audience and is excluded from ads personalization.
     *     @type \Google\Analytics\Admin\V1alpha\AudienceEventTrigger $event_trigger
     *           Optional. Specifies an event to log when a user joins the Audience. If not
     *           set, no event is logged when a user joins the Audience.
     *     @type int $exclusion_duration_mode
     *           Immutable. Specifies how long an exclusion lasts for users that meet the
     *           exclusion filter. It is applied to all EXCLUDE filter clauses and is
     *           ignored when there is no EXCLUDE filter clause in the Audience.
     *     @type array<\Google\Analytics\Admin\V1alpha\AudienceFilterClause>|\Google\Protobuf\Internal\RepeatedField $filter_clauses
     *           Required. Immutable. Unordered list. Filter clauses that define the
     *           Audience. All clauses will be AND’ed together.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\Audience::initOnce();
        parent::__construct($data);
    }
    /**
     * Output only. The resource name for this Audience resource.
     * Format: properties/{propertyId}/audiences/{audienceId}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Output only. The resource name for this Audience resource.
     * Format: properties/{propertyId}/audiences/{audienceId}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        return $this;
    }
    /**
     * Required. The display name of the Audience.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }
    /**
     * Required. The display name of the Audience.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;
        return $this;
    }
    /**
     * Required. The description of the Audience.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Required. The description of the Audience.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;
        return $this;
    }
    /**
     * Required. Immutable. The duration a user should stay in an Audience. It
     * cannot be set to more than 540 days.
     *
     * Generated from protobuf field <code>int32 membership_duration_days = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getMembershipDurationDays()
    {
        return $this->membership_duration_days;
    }
    /**
     * Required. Immutable. The duration a user should stay in an Audience. It
     * cannot be set to more than 540 days.
     *
     * Generated from protobuf field <code>int32 membership_duration_days = 4 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setMembershipDurationDays($var)
    {
        GPBUtil::checkInt32($var);
        $this->membership_duration_days = $var;
        return $this;
    }
    /**
     * Output only. It is automatically set by GA to false if this is an NPA
     * Audience and is excluded from ads personalization.
     *
     * Generated from protobuf field <code>bool ads_personalization_enabled = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool
     */
    public function getAdsPersonalizationEnabled()
    {
        return $this->ads_personalization_enabled;
    }
    /**
     * Output only. It is automatically set by GA to false if this is an NPA
     * Audience and is excluded from ads personalization.
     *
     * Generated from protobuf field <code>bool ads_personalization_enabled = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool $var
     * @return $this
     */
    public function setAdsPersonalizationEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->ads_personalization_enabled = $var;
        return $this;
    }
    /**
     * Optional. Specifies an event to log when a user joins the Audience. If not
     * set, no event is logged when a user joins the Audience.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceEventTrigger event_trigger = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Analytics\Admin\V1alpha\AudienceEventTrigger|null
     */
    public function getEventTrigger()
    {
        return $this->event_trigger;
    }
    public function hasEventTrigger()
    {
        return isset($this->event_trigger);
    }
    public function clearEventTrigger()
    {
        unset($this->event_trigger);
    }
    /**
     * Optional. Specifies an event to log when a user joins the Audience. If not
     * set, no event is logged when a user joins the Audience.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceEventTrigger event_trigger = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Analytics\Admin\V1alpha\AudienceEventTrigger $var
     * @return $this
     */
    public function setEventTrigger($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AudienceEventTrigger::class);
        $this->event_trigger = $var;
        return $this;
    }
    /**
     * Immutable. Specifies how long an exclusion lasts for users that meet the
     * exclusion filter. It is applied to all EXCLUDE filter clauses and is
     * ignored when there is no EXCLUDE filter clause in the Audience.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience.AudienceExclusionDurationMode exclusion_duration_mode = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getExclusionDurationMode()
    {
        return $this->exclusion_duration_mode;
    }
    /**
     * Immutable. Specifies how long an exclusion lasts for users that meet the
     * exclusion filter. It is applied to all EXCLUDE filter clauses and is
     * ignored when there is no EXCLUDE filter clause in the Audience.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.Audience.AudienceExclusionDurationMode exclusion_duration_mode = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setExclusionDurationMode($var)
    {
        GPBUtil::checkEnum($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\Audience\AudienceExclusionDurationMode::class);
        $this->exclusion_duration_mode = $var;
        return $this;
    }
    /**
     * Required. Immutable. Unordered list. Filter clauses that define the
     * Audience. All clauses will be AND’ed together.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AudienceFilterClause filter_clauses = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFilterClauses()
    {
        return $this->filter_clauses;
    }
    /**
     * Required. Immutable. Unordered list. Filter clauses that define the
     * Audience. All clauses will be AND’ed together.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.AudienceFilterClause filter_clauses = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = UNORDERED_LIST];</code>
     * @param array<\Google\Analytics\Admin\V1alpha\AudienceFilterClause>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFilterClauses($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AudienceFilterClause::class);
        $this->filter_clauses = $arr;
        return $this;
    }
}
