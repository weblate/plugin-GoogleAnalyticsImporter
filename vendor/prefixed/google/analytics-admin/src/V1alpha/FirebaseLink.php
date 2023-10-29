<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A link between a GA4 property and a Firebase project.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.FirebaseLink</code>
 */
class FirebaseLink extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Output only. Example format: properties/1234/firebaseLinks/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Immutable. Firebase project resource name. When creating a FirebaseLink,
     * you may provide this resource name using either a project number or project
     * ID. Once this resource has been created, returned FirebaseLinks will always
     * have a project_name that contains a project number.
     * Format: 'projects/{project number}'
     * Example: 'projects/1234'
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $project = '';
    /**
     * Output only. Time when this FirebaseLink was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Example format: properties/1234/firebaseLinks/5678
     *     @type string $project
     *           Immutable. Firebase project resource name. When creating a FirebaseLink,
     *           you may provide this resource name using either a project number or project
     *           ID. Once this resource has been created, returned FirebaseLinks will always
     *           have a project_name that contains a project number.
     *           Format: 'projects/{project number}'
     *           Example: 'projects/1234'
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when this FirebaseLink was originally created.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\Resources::initOnce();
        parent::__construct($data);
    }
    /**
     * Output only. Example format: properties/1234/firebaseLinks/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Output only. Example format: properties/1234/firebaseLinks/5678
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
     * Immutable. Firebase project resource name. When creating a FirebaseLink,
     * you may provide this resource name using either a project number or project
     * ID. Once this resource has been created, returned FirebaseLinks will always
     * have a project_name that contains a project number.
     * Format: 'projects/{project number}'
     * Example: 'projects/1234'
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }
    /**
     * Immutable. Firebase project resource name. When creating a FirebaseLink,
     * you may provide this resource name using either a project number or project
     * ID. Once this resource has been created, returned FirebaseLinks will always
     * have a project_name that contains a project number.
     * Format: 'projects/{project number}'
     * Example: 'projects/1234'
     *
     * Generated from protobuf field <code>string project = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;
        return $this;
    }
    /**
     * Output only. Time when this FirebaseLink was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }
    public function hasCreateTime()
    {
        return isset($this->create_time);
    }
    public function clearCreateTime()
    {
        unset($this->create_time);
    }
    /**
     * Output only. Time when this FirebaseLink was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Timestamp::class);
        $this->create_time = $var;
        return $this;
    }
}
