<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for UpdateCalculatedMetric RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateCalculatedMetricRequest</code>
 */
class UpdateCalculatedMetricRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The CalculatedMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CalculatedMetric calculated_metric = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $calculated_metric = null;
    /**
     * Required. The list of fields to be updated. Omitted fields will not be
     * updated. To replace the entire entity, use one path with the string "*" to
     * match all fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * @param \Google\Analytics\Admin\V1alpha\CalculatedMetric $calculatedMetric Required. The CalculatedMetric to update
     * @param \Google\Protobuf\FieldMask                       $updateMask       Required. The list of fields to be updated. Omitted fields will not be
     *                                                                           updated. To replace the entire entity, use one path with the string "*" to
     *                                                                           match all fields.
     *
     * @return \Google\Analytics\Admin\V1alpha\UpdateCalculatedMetricRequest
     *
     * @experimental
     */
    public static function build(\Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\CalculatedMetric $calculatedMetric, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\FieldMask $updateMask) : self
    {
        return (new self())->setCalculatedMetric($calculatedMetric)->setUpdateMask($updateMask);
    }
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\CalculatedMetric $calculated_metric
     *           Required. The CalculatedMetric to update
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
     * Required. The CalculatedMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CalculatedMetric calculated_metric = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\CalculatedMetric|null
     */
    public function getCalculatedMetric()
    {
        return $this->calculated_metric;
    }
    public function hasCalculatedMetric()
    {
        return isset($this->calculated_metric);
    }
    public function clearCalculatedMetric()
    {
        unset($this->calculated_metric);
    }
    /**
     * Required. The CalculatedMetric to update
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.CalculatedMetric calculated_metric = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\CalculatedMetric $var
     * @return $this
     */
    public function setCalculatedMetric($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\CalculatedMetric::class);
        $this->calculated_metric = $var;
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
