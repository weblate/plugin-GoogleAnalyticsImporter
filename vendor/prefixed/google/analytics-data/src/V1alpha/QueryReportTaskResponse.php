<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * The report content corresponding to a report task.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.QueryReportTaskResponse</code>
 */
class QueryReportTaskResponse extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Describes dimension columns. The number of DimensionHeaders and ordering of
     * DimensionHeaders matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionHeader dimension_headers = 1;</code>
     */
    private $dimension_headers;
    /**
     * Describes metric columns. The number of MetricHeaders and ordering of
     * MetricHeaders matches the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricHeader metric_headers = 2;</code>
     */
    private $metric_headers;
    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row rows = 3;</code>
     */
    private $rows;
    /**
     * If requested, the totaled values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row totals = 4;</code>
     */
    private $totals;
    /**
     * If requested, the maximum values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row maximums = 5;</code>
     */
    private $maximums;
    /**
     * If requested, the minimum values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row minimums = 6;</code>
     */
    private $minimums;
    /**
     * The total number of rows in the query result.
     *
     * Generated from protobuf field <code>int32 row_count = 7;</code>
     */
    private $row_count = 0;
    /**
     * Metadata for the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.ResponseMetaData metadata = 8;</code>
     */
    private $metadata = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Data\V1alpha\DimensionHeader>|\Google\Protobuf\Internal\RepeatedField $dimension_headers
     *           Describes dimension columns. The number of DimensionHeaders and ordering of
     *           DimensionHeaders matches the dimensions present in rows.
     *     @type array<\Google\Analytics\Data\V1alpha\MetricHeader>|\Google\Protobuf\Internal\RepeatedField $metric_headers
     *           Describes metric columns. The number of MetricHeaders and ordering of
     *           MetricHeaders matches the metrics present in rows.
     *     @type array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $rows
     *           Rows of dimension value combinations and metric values in the report.
     *     @type array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $totals
     *           If requested, the totaled values of metrics.
     *     @type array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $maximums
     *           If requested, the maximum values of metrics.
     *     @type array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $minimums
     *           If requested, the minimum values of metrics.
     *     @type int $row_count
     *           The total number of rows in the query result.
     *     @type \Google\Analytics\Data\V1alpha\ResponseMetaData $metadata
     *           Metadata for the report.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }
    /**
     * Describes dimension columns. The number of DimensionHeaders and ordering of
     * DimensionHeaders matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionHeader dimension_headers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensionHeaders()
    {
        return $this->dimension_headers;
    }
    /**
     * Describes dimension columns. The number of DimensionHeaders and ordering of
     * DimensionHeaders matches the dimensions present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DimensionHeader dimension_headers = 1;</code>
     * @param array<\Google\Analytics\Data\V1alpha\DimensionHeader>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensionHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\DimensionHeader::class);
        $this->dimension_headers = $arr;
        return $this;
    }
    /**
     * Describes metric columns. The number of MetricHeaders and ordering of
     * MetricHeaders matches the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricHeader metric_headers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricHeaders()
    {
        return $this->metric_headers;
    }
    /**
     * Describes metric columns. The number of MetricHeaders and ordering of
     * MetricHeaders matches the metrics present in rows.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricHeader metric_headers = 2;</code>
     * @param array<\Google\Analytics\Data\V1alpha\MetricHeader>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\MetricHeader::class);
        $this->metric_headers = $arr;
        return $this;
    }
    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row rows = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRows()
    {
        return $this->rows;
    }
    /**
     * Rows of dimension value combinations and metric values in the report.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row rows = 3;</code>
     * @param array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\Row::class);
        $this->rows = $arr;
        return $this;
    }
    /**
     * If requested, the totaled values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row totals = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTotals()
    {
        return $this->totals;
    }
    /**
     * If requested, the totaled values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row totals = 4;</code>
     * @param array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTotals($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\Row::class);
        $this->totals = $arr;
        return $this;
    }
    /**
     * If requested, the maximum values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row maximums = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMaximums()
    {
        return $this->maximums;
    }
    /**
     * If requested, the maximum values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row maximums = 5;</code>
     * @param array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMaximums($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\Row::class);
        $this->maximums = $arr;
        return $this;
    }
    /**
     * If requested, the minimum values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row minimums = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMinimums()
    {
        return $this->minimums;
    }
    /**
     * If requested, the minimum values of metrics.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Row minimums = 6;</code>
     * @param array<\Google\Analytics\Data\V1alpha\Row>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMinimums($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\Row::class);
        $this->minimums = $arr;
        return $this;
    }
    /**
     * The total number of rows in the query result.
     *
     * Generated from protobuf field <code>int32 row_count = 7;</code>
     * @return int
     */
    public function getRowCount()
    {
        return $this->row_count;
    }
    /**
     * The total number of rows in the query result.
     *
     * Generated from protobuf field <code>int32 row_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_count = $var;
        return $this;
    }
    /**
     * Metadata for the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.ResponseMetaData metadata = 8;</code>
     * @return \Google\Analytics\Data\V1alpha\ResponseMetaData|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }
    public function hasMetadata()
    {
        return isset($this->metadata);
    }
    public function clearMetadata()
    {
        unset($this->metadata);
    }
    /**
     * Metadata for the report.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.ResponseMetaData metadata = 8;</code>
     * @param \Google\Analytics\Data\V1alpha\ResponseMetaData $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\ResponseMetaData::class);
        $this->metadata = $var;
        return $this;
    }
}