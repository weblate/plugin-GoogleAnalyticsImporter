<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * The request to generate a realtime report.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.RunRealtimeReportRequest</code>
 */
class RunRealtimeReportRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     */
    private $property = '';
    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     */
    private $dimensions;
    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     */
    private $metrics;
    /**
     * The filter clause of dimensions. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     */
    private $dimension_filter = null;
    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     */
    private $metric_filter = null;
    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 250,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `limit` to a higher value.
     *
     * Generated from protobuf field <code>int64 limit = 6;</code>
     */
    private $limit = 0;
    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 7;</code>
     */
    private $metric_aggregations;
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 8;</code>
     */
    private $order_bys;
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 9;</code>
     */
    private $return_property_quota = \false;
    /**
     * The minute ranges of event data to read. If unspecified, one minute range
     * for the last 30 minutes will be used. If multiple minute ranges are
     * requested, each response row will contain a zero based minute range index.
     * If two minute ranges overlap, the event data for the overlapping minutes is
     * included in the response rows for both minute ranges.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MinuteRange minute_ranges = 10;</code>
     */
    private $minute_ranges;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           A Google Analytics GA4 property identifier whose events are tracked.
     *           Specified in the URL path and not the body. To learn more, see [where to
     *           find your Property
     *           ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     *           Example: properties/1234
     *     @type array<\Google\Analytics\Data\V1beta\Dimension>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           The dimensions requested and displayed.
     *     @type array<\Google\Analytics\Data\V1beta\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           The metrics requested and displayed.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $dimension_filter
     *           The filter clause of dimensions. Metrics cannot be used in this filter.
     *     @type \Google\Analytics\Data\V1beta\FilterExpression $metric_filter
     *           The filter clause of metrics. Applied at post aggregation phase, similar to
     *           SQL having-clause. Dimensions cannot be used in this filter.
     *     @type int|string $limit
     *           The number of rows to return. If unspecified, 10,000 rows are returned. The
     *           API returns a maximum of 250,000 rows per request, no matter how many you
     *           ask for. `limit` must be positive.
     *           The API can also return fewer rows than the requested `limit`, if there
     *           aren't as many dimension values as the `limit`. For instance, there are
     *           fewer than 300 possible values for the dimension `country`, so when
     *           reporting on only `country`, you can't get more than 300 rows, even if you
     *           set `limit` to a higher value.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $metric_aggregations
     *           Aggregation of metrics. Aggregated metric values will be shown in rows
     *           where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *     @type array<\Google\Analytics\Data\V1beta\OrderBy>|\Google\Protobuf\Internal\RepeatedField $order_bys
     *           Specifies how rows are ordered in the response.
     *     @type bool $return_property_quota
     *           Toggles whether to return the current state of this Analytics Property's
     *           Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *     @type array<\Google\Analytics\Data\V1beta\MinuteRange>|\Google\Protobuf\Internal\RepeatedField $minute_ranges
     *           The minute ranges of event data to read. If unspecified, one minute range
     *           for the last 30 minutes will be used. If multiple minute ranges are
     *           requested, each response row will contain a zero based minute range index.
     *           If two minute ranges overlap, the event data for the overlapping minutes is
     *           included in the response rows for both minute ranges.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Beta\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }
    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }
    /**
     * A Google Analytics GA4 property identifier whose events are tracked.
     * Specified in the URL path and not the body. To learn more, see [where to
     * find your Property
     * ID](https://developers.google.com/analytics/devguides/reporting/data/v1/property-id).
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string property = 1;</code>
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
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Dimension dimensions = 2;</code>
     * @param array<\Google\Analytics\Data\V1beta\Dimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\Dimension::class);
        $this->dimensions = $arr;
        return $this;
    }
    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.Metric metrics = 3;</code>
     * @param array<\Google\Analytics\Data\V1beta\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\Metric::class);
        $this->metrics = $arr;
        return $this;
    }
    /**
     * The filter clause of dimensions. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getDimensionFilter()
    {
        return $this->dimension_filter;
    }
    public function hasDimensionFilter()
    {
        return isset($this->dimension_filter);
    }
    public function clearDimensionFilter()
    {
        unset($this->dimension_filter);
    }
    /**
     * The filter clause of dimensions. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression dimension_filter = 4;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->dimension_filter = $var;
        return $this;
    }
    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     * @return \Google\Analytics\Data\V1beta\FilterExpression|null
     */
    public function getMetricFilter()
    {
        return $this->metric_filter;
    }
    public function hasMetricFilter()
    {
        return isset($this->metric_filter);
    }
    public function clearMetricFilter()
    {
        unset($this->metric_filter);
    }
    /**
     * The filter clause of metrics. Applied at post aggregation phase, similar to
     * SQL having-clause. Dimensions cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.FilterExpression metric_filter = 5;</code>
     * @param \Google\Analytics\Data\V1beta\FilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\FilterExpression::class);
        $this->metric_filter = $var;
        return $this;
    }
    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 250,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `limit` to a higher value.
     *
     * Generated from protobuf field <code>int64 limit = 6;</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * The number of rows to return. If unspecified, 10,000 rows are returned. The
     * API returns a maximum of 250,000 rows per request, no matter how many you
     * ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if you
     * set `limit` to a higher value.
     *
     * Generated from protobuf field <code>int64 limit = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;
        return $this;
    }
    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricAggregations()
    {
        return $this->metric_aggregations;
    }
    /**
     * Aggregation of metrics. Aggregated metric values will be shown in rows
     * where the dimension_values are set to "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MetricAggregation metric_aggregations = 7;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::ENUM, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\MetricAggregation::class);
        $this->metric_aggregations = $arr;
        return $this;
    }
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBys()
    {
        return $this->order_bys;
    }
    /**
     * Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.OrderBy order_bys = 8;</code>
     * @param array<\Google\Analytics\Data\V1beta\OrderBy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\OrderBy::class);
        $this->order_bys = $arr;
        return $this;
    }
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 9;</code>
     * @return bool
     */
    public function getReturnPropertyQuota()
    {
        return $this->return_property_quota;
    }
    /**
     * Toggles whether to return the current state of this Analytics Property's
     * Realtime quota. Quota is returned in [PropertyQuota](#PropertyQuota).
     *
     * Generated from protobuf field <code>bool return_property_quota = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setReturnPropertyQuota($var)
    {
        GPBUtil::checkBool($var);
        $this->return_property_quota = $var;
        return $this;
    }
    /**
     * The minute ranges of event data to read. If unspecified, one minute range
     * for the last 30 minutes will be used. If multiple minute ranges are
     * requested, each response row will contain a zero based minute range index.
     * If two minute ranges overlap, the event data for the overlapping minutes is
     * included in the response rows for both minute ranges.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MinuteRange minute_ranges = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMinuteRanges()
    {
        return $this->minute_ranges;
    }
    /**
     * The minute ranges of event data to read. If unspecified, one minute range
     * for the last 30 minutes will be used. If multiple minute ranges are
     * requested, each response row will contain a zero based minute range index.
     * If two minute ranges overlap, the event data for the overlapping minutes is
     * included in the response rows for both minute ranges.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1beta.MinuteRange minute_ranges = 10;</code>
     * @param array<\Google\Analytics\Data\V1beta\MinuteRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMinuteRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\MinuteRange::class);
        $this->minute_ranges = $arr;
        return $this;
    }
}
