<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for SearchChangeHistoryEvents RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.SearchChangeHistoryEventsRequest</code>
 */
class SearchChangeHistoryEventsRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The account resource for which to return change history
     * resources.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $account = '';
    /**
     * Optional. Resource name for a child property. If set, only return changes
     * made to this property or its child resources.
     *
     * Generated from protobuf field <code>string property = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    private $property = '';
    /**
     * Optional. If set, only return changes if they are for a resource that
     * matches at least one of these types.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ChangeHistoryResourceType resource_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $resource_type;
    /**
     * Optional. If set, only return changes that match one or more of these types
     * of actions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ActionType action = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $action;
    /**
     * Optional. If set, only return changes if they are made by a user in this
     * list.
     *
     * Generated from protobuf field <code>repeated string actor_email = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $actor_email;
    /**
     * Optional. If set, only return changes made after this time (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_change_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $earliest_change_time = null;
    /**
     * Optional. If set, only return changes made before this time (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_change_time = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $latest_change_time = null;
    /**
     * Optional. The maximum number of ChangeHistoryEvent items to return.
     * The service may return fewer than this value, even if there are additional
     * pages. If unspecified, at most 50 items will be returned.
     * The maximum value is 200 (higher values will be coerced to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_size = 0;
    /**
     * Optional. A page token, received from a previous
     * `SearchChangeHistoryEvents` call. Provide this to retrieve the subsequent
     * page. When paginating, all other parameters provided to
     * `SearchChangeHistoryEvents` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $page_token = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account
     *           Required. The account resource for which to return change history
     *           resources.
     *     @type string $property
     *           Optional. Resource name for a child property. If set, only return changes
     *           made to this property or its child resources.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $resource_type
     *           Optional. If set, only return changes if they are for a resource that
     *           matches at least one of these types.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $action
     *           Optional. If set, only return changes that match one or more of these types
     *           of actions.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $actor_email
     *           Optional. If set, only return changes if they are made by a user in this
     *           list.
     *     @type \Google\Protobuf\Timestamp $earliest_change_time
     *           Optional. If set, only return changes made after this time (inclusive).
     *     @type \Google\Protobuf\Timestamp $latest_change_time
     *           Optional. If set, only return changes made before this time (inclusive).
     *     @type int $page_size
     *           Optional. The maximum number of ChangeHistoryEvent items to return.
     *           The service may return fewer than this value, even if there are additional
     *           pages. If unspecified, at most 50 items will be returned.
     *           The maximum value is 200 (higher values will be coerced to the maximum).
     *     @type string $page_token
     *           Optional. A page token, received from a previous
     *           `SearchChangeHistoryEvents` call. Provide this to retrieve the subsequent
     *           page. When paginating, all other parameters provided to
     *           `SearchChangeHistoryEvents` must match the call that provided the page
     *           token.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The account resource for which to return change history
     * resources.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * Required. The account resource for which to return change history
     * resources.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;
        return $this;
    }
    /**
     * Optional. Resource name for a child property. If set, only return changes
     * made to this property or its child resources.
     *
     * Generated from protobuf field <code>string property = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }
    /**
     * Optional. Resource name for a child property. If set, only return changes
     * made to this property or its child resources.
     *
     * Generated from protobuf field <code>string property = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;
        return $this;
    }
    /**
     * Optional. If set, only return changes if they are for a resource that
     * matches at least one of these types.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ChangeHistoryResourceType resource_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceType()
    {
        return $this->resource_type;
    }
    /**
     * Optional. If set, only return changes if they are for a resource that
     * matches at least one of these types.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ChangeHistoryResourceType resource_type = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::ENUM, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\ChangeHistoryResourceType::class);
        $this->resource_type = $arr;
        return $this;
    }
    /**
     * Optional. If set, only return changes that match one or more of these types
     * of actions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ActionType action = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAction()
    {
        return $this->action;
    }
    /**
     * Optional. If set, only return changes that match one or more of these types
     * of actions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1alpha.ActionType action = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAction($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::ENUM, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\ActionType::class);
        $this->action = $arr;
        return $this;
    }
    /**
     * Optional. If set, only return changes if they are made by a user in this
     * list.
     *
     * Generated from protobuf field <code>repeated string actor_email = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActorEmail()
    {
        return $this->actor_email;
    }
    /**
     * Optional. If set, only return changes if they are made by a user in this
     * list.
     *
     * Generated from protobuf field <code>repeated string actor_email = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActorEmail($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::STRING);
        $this->actor_email = $arr;
        return $this;
    }
    /**
     * Optional. If set, only return changes made after this time (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_change_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEarliestChangeTime()
    {
        return $this->earliest_change_time;
    }
    public function hasEarliestChangeTime()
    {
        return isset($this->earliest_change_time);
    }
    public function clearEarliestChangeTime()
    {
        unset($this->earliest_change_time);
    }
    /**
     * Optional. If set, only return changes made after this time (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp earliest_change_time = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEarliestChangeTime($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Timestamp::class);
        $this->earliest_change_time = $var;
        return $this;
    }
    /**
     * Optional. If set, only return changes made before this time (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_change_time = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLatestChangeTime()
    {
        return $this->latest_change_time;
    }
    public function hasLatestChangeTime()
    {
        return isset($this->latest_change_time);
    }
    public function clearLatestChangeTime()
    {
        unset($this->latest_change_time);
    }
    /**
     * Optional. If set, only return changes made before this time (inclusive).
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp latest_change_time = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLatestChangeTime($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Timestamp::class);
        $this->latest_change_time = $var;
        return $this;
    }
    /**
     * Optional. The maximum number of ChangeHistoryEvent items to return.
     * The service may return fewer than this value, even if there are additional
     * pages. If unspecified, at most 50 items will be returned.
     * The maximum value is 200 (higher values will be coerced to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }
    /**
     * Optional. The maximum number of ChangeHistoryEvent items to return.
     * The service may return fewer than this value, even if there are additional
     * pages. If unspecified, at most 50 items will be returned.
     * The maximum value is 200 (higher values will be coerced to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
        return $this;
    }
    /**
     * Optional. A page token, received from a previous
     * `SearchChangeHistoryEvents` call. Provide this to retrieve the subsequent
     * page. When paginating, all other parameters provided to
     * `SearchChangeHistoryEvents` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }
    /**
     * Optional. A page token, received from a previous
     * `SearchChangeHistoryEvents` call. Provide this to retrieve the subsequent
     * page. When paginating, all other parameters provided to
     * `SearchChangeHistoryEvents` must match the call that provided the page
     * token.
     *
     * Generated from protobuf field <code>string page_token = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
        return $this;
    }
}
