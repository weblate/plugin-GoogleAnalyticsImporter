<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for CreateCustomMetric RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.CreateCustomMetricRequest</code>
 */
class CreateCustomMetricRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The CustomMetric to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.CustomMetric custom_metric = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $custom_metric = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: properties/1234
     *     @type \Google\Analytics\Admin\V1beta\CustomMetric $custom_metric
     *           Required. The CustomMetric to create.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
        return $this;
    }
    /**
     * Required. The CustomMetric to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.CustomMetric custom_metric = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1beta\CustomMetric|null
     */
    public function getCustomMetric()
    {
        return $this->custom_metric;
    }
    public function hasCustomMetric()
    {
        return isset($this->custom_metric);
    }
    public function clearCustomMetric()
    {
        unset($this->custom_metric);
    }
    /**
     * Required. The CustomMetric to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.CustomMetric custom_metric = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1beta\CustomMetric $var
     * @return $this
     */
    public function setCustomMetric($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta\CustomMetric::class);
        $this->custom_metric = $var;
        return $this;
    }
}
