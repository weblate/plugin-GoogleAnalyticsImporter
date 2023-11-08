<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/audience.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A filter for numeric or date values between certain values on a dimension
 * or metric.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.BetweenFilter</code>
 */
class BetweenFilter extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. Begins with this number, inclusive.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValue from_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $from_value = null;
    /**
     * Required. Ends with this number, inclusive.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValue to_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $to_value = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue $from_value
     *           Required. Begins with this number, inclusive.
     *     @type \Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue $to_value
     *           Required. Ends with this number, inclusive.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\Audience::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. Begins with this number, inclusive.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValue from_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue|null
     */
    public function getFromValue()
    {
        return $this->from_value;
    }
    public function hasFromValue()
    {
        return isset($this->from_value);
    }
    public function clearFromValue()
    {
        unset($this->from_value);
    }
    /**
     * Required. Begins with this number, inclusive.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValue from_value = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue $var
     * @return $this
     */
    public function setFromValue($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue::class);
        $this->from_value = $var;
        return $this;
    }
    /**
     * Required. Ends with this number, inclusive.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValue to_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue|null
     */
    public function getToValue()
    {
        return $this->to_value;
    }
    public function hasToValue()
    {
        return isset($this->to_value);
    }
    public function clearToValue()
    {
        unset($this->to_value);
    }
    /**
     * Required. Ends with this number, inclusive.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AudienceDimensionOrMetricFilter.NumericValue to_value = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue $var
     * @return $this
     */
    public function setToValue($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter\NumericValue::class);
        $this->to_value = $var;
        return $this;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
class_alias(BetweenFilter::class, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AudienceDimensionOrMetricFilter_BetweenFilter::class);
