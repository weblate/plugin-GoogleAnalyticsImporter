<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for UpdateCustomMetric RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateCustomMetricRequest</code>
 */
class UpdateCustomMetricRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The CustomMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 1;</code>
     */
    private $custom_metric = null;
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * @param \Google\Analytics\Admin\V1alpha\CustomMetric $customMetric The CustomMetric to update
     * @param \Google\Protobuf\FieldMask                   $updateMask   Required. The list of fields to be updated. Omitted fields will not be
     *                                                                   updated. To replace the entire entity, use one path with the string "*" to
     *                                                                   match all fields.
     *
     * @return \Google\Analytics\Admin\V1alpha\UpdateCustomMetricRequest
     *
     * @experimental
     */
    public static function build(\Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\CustomMetric $customMetric, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\FieldMask $updateMask) : self
    {
        return (new self())->setCustomMetric($customMetric)->setUpdateMask($updateMask);
    }
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\CustomMetric $custom_metric
     *           The CustomMetric to update
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Omitted fields will not be
     *           updated. To replace the entire entity, use one path with the string "*" to
     *           match all fields.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * The CustomMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 1;</code>
     * @return \Google\Analytics\Admin\V1alpha\CustomMetric|null
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
     * The CustomMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CustomMetric custom_metric = 1;</code>
     * @param \Google\Analytics\Admin\V1alpha\CustomMetric $var
     * @return $this
     */
    public function setCustomMetric($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\CustomMetric::class);
        $this->custom_metric = $var;
        return $this;
    }
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }
    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }
    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;
        return $this;
    }
}
