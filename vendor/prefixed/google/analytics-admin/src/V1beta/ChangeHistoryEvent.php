<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A set of changes within a Google Analytics account or its child properties
 * that resulted from the same cause. Common causes would be updates made in the
 * Google Analytics UI, changes from customer support, or automatic Google
 * Analytics system changes.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.ChangeHistoryEvent</code>
 */
class ChangeHistoryEvent extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * ID of this change history event. This ID is unique across Google Analytics.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    private $id = '';
    /**
     * Time when change was made.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp change_time = 2;</code>
     */
    private $change_time = null;
    /**
     * The type of actor that made this change.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ActorType actor_type = 3;</code>
     */
    private $actor_type = 0;
    /**
     * Email address of the Google account that made the change. This will be a
     * valid email address if the actor field is set to USER, and empty otherwise.
     * Google accounts that have been deleted will cause an error.
     *
     * Generated from protobuf field <code>string user_actor_email = 4;</code>
     */
    private $user_actor_email = '';
    /**
     * If true, then the list of changes returned was filtered, and does not
     * represent all changes that occurred in this event.
     *
     * Generated from protobuf field <code>bool changes_filtered = 5;</code>
     */
    private $changes_filtered = \false;
    /**
     * A list of changes made in this change history event that fit the filters
     * specified in SearchChangeHistoryEventsRequest.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.ChangeHistoryChange changes = 6;</code>
     */
    private $changes;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           ID of this change history event. This ID is unique across Google Analytics.
     *     @type \Google\Protobuf\Timestamp $change_time
     *           Time when change was made.
     *     @type int $actor_type
     *           The type of actor that made this change.
     *     @type string $user_actor_email
     *           Email address of the Google account that made the change. This will be a
     *           valid email address if the actor field is set to USER, and empty otherwise.
     *           Google accounts that have been deleted will cause an error.
     *     @type bool $changes_filtered
     *           If true, then the list of changes returned was filtered, and does not
     *           represent all changes that occurred in this event.
     *     @type array<\Google\Analytics\Admin\V1beta\ChangeHistoryChange>|\Google\Protobuf\Internal\RepeatedField $changes
     *           A list of changes made in this change history event that fit the filters
     *           specified in SearchChangeHistoryEventsRequest.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }
    /**
     * ID of this change history event. This ID is unique across Google Analytics.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * ID of this change history event. This ID is unique across Google Analytics.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
        return $this;
    }
    /**
     * Time when change was made.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp change_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getChangeTime()
    {
        return $this->change_time;
    }
    public function hasChangeTime()
    {
        return isset($this->change_time);
    }
    public function clearChangeTime()
    {
        unset($this->change_time);
    }
    /**
     * Time when change was made.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp change_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setChangeTime($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Timestamp::class);
        $this->change_time = $var;
        return $this;
    }
    /**
     * The type of actor that made this change.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ActorType actor_type = 3;</code>
     * @return int
     */
    public function getActorType()
    {
        return $this->actor_type;
    }
    /**
     * The type of actor that made this change.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ActorType actor_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setActorType($var)
    {
        GPBUtil::checkEnum($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta\ActorType::class);
        $this->actor_type = $var;
        return $this;
    }
    /**
     * Email address of the Google account that made the change. This will be a
     * valid email address if the actor field is set to USER, and empty otherwise.
     * Google accounts that have been deleted will cause an error.
     *
     * Generated from protobuf field <code>string user_actor_email = 4;</code>
     * @return string
     */
    public function getUserActorEmail()
    {
        return $this->user_actor_email;
    }
    /**
     * Email address of the Google account that made the change. This will be a
     * valid email address if the actor field is set to USER, and empty otherwise.
     * Google accounts that have been deleted will cause an error.
     *
     * Generated from protobuf field <code>string user_actor_email = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUserActorEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_actor_email = $var;
        return $this;
    }
    /**
     * If true, then the list of changes returned was filtered, and does not
     * represent all changes that occurred in this event.
     *
     * Generated from protobuf field <code>bool changes_filtered = 5;</code>
     * @return bool
     */
    public function getChangesFiltered()
    {
        return $this->changes_filtered;
    }
    /**
     * If true, then the list of changes returned was filtered, and does not
     * represent all changes that occurred in this event.
     *
     * Generated from protobuf field <code>bool changes_filtered = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setChangesFiltered($var)
    {
        GPBUtil::checkBool($var);
        $this->changes_filtered = $var;
        return $this;
    }
    /**
     * A list of changes made in this change history event that fit the filters
     * specified in SearchChangeHistoryEventsRequest.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.ChangeHistoryChange changes = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChanges()
    {
        return $this->changes;
    }
    /**
     * A list of changes made in this change history event that fit the filters
     * specified in SearchChangeHistoryEventsRequest.
     *
     * Generated from protobuf field <code>repeated .google.analytics.admin.v1beta.ChangeHistoryChange changes = 6;</code>
     * @param array<\Google\Analytics\Admin\V1beta\ChangeHistoryChange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta\ChangeHistoryChange::class);
        $this->changes = $arr;
        return $this;
    }
}
