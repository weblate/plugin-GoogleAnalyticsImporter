<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * The dimensions, metrics and comparisons currently accepted in reporting
 * methods.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.Metadata</code>
 */
class Metadata extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Resource name of this metadata.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     */
    private $name = '';
    /**
     * The dimension descriptions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.DimensionMetadata dimensions = 1;</code>
     */
    private $dimensions;
    /**
     * The metric descriptions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricMetadata metrics = 2;</code>
     */
    private $metrics;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Resource name of this metadata.
     *     @type array<\Google\Analytics\Data\V1beta\DimensionMetadata>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimension descriptions.
     *     @type array<\Google\Analytics\Data\V1beta\MetricMetadata>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metric descriptions.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }
    /**
     * Resource name of this metadata.
     *
     * Generated from protobuf field <code>string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Resource name of this metadata.
     *
     * Generated from protobuf field <code>string name = 3;</code>
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
     * The dimension descriptions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.DimensionMetadata dimensions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * The dimension descriptions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.DimensionMetadata dimensions = 1;</code>
     * @param array<\Google\Analytics\Data\V1beta\DimensionMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\DimensionMetadata::class);
        $this->dimensions = $arr;
        return $this;
    }
    /**
     * The metric descriptions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricMetadata metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * The metric descriptions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricMetadata metrics = 2;</code>
     * @param array<\Google\Analytics\Data\V1beta\MetricMetadata>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\MetricMetadata::class);
        $this->metrics = $arr;
        return $this;
    }
}
