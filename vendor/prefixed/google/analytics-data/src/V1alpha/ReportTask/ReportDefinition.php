<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\ReportTask;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * The definition of how a report should be run.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.ReportTask.ReportDefinition</code>
 */
class ReportDefinition extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Optional. The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Dimension dimensions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $dimensions;
    /**
     * Optional. The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Metric metrics = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metrics;
    /**
     * Optional. Date ranges of data to read. If multiple date ranges are
     * requested, each response row will contain a zero based date range index.
     * If two date ranges overlap, the event data for the overlapping days is
     * included in the response rows for both date ranges. In a cohort request,
     * this `dateRanges` must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DateRange date_ranges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $date_ranges;
    /**
     * Optional. Dimension filters let you ask for only specific dimension
     * values in the report. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression dimension_filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $dimension_filter = null;
    /**
     * Optional. The filter clause of metrics. Applied after aggregating the
     * report's rows, similar to SQL having-clause. Dimensions cannot be used in
     * this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression metric_filter = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metric_filter = null;
    /**
     * Optional. The row count of the start row from Google Analytics Storage.
     * The first row is counted as row 0.
     * When creating a report task, the `offset` and `limit` parameters define
     * the subset of data rows from Google Analytics storage to be included in
     * the generated report. For example, if there are a total of 300,000 rows
     * in Google Analytics storage, the initial report task may have the
     * first 10,000 rows with a limit of 10,000 and an offset of 0.
     * Subsequently, another report task could cover the next 10,000 rows with a
     * limit of 10,000 and an offset of 10,000.
     *
     * Generated from protobuf field <code>int64 offset = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $offset = 0;
    /**
     * Optional. The number of rows to return in the Report. If unspecified,
     * 10,000 rows are returned. The API returns a maximum of 250,000 rows per
     * request, no matter how many you ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if
     * you set `limit` to a higher value.
     *
     * Generated from protobuf field <code>int64 limit = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $limit = 0;
    /**
     * Optional. Aggregation of metrics. Aggregated metric values will be shown
     * in rows where the dimension_values are set to
     * "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricAggregation metric_aggregations = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metric_aggregations;
    /**
     * Optional. Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.OrderBy order_bys = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $order_bys;
    /**
     * Optional. A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the property's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $currency_code = '';
    /**
     * Optional. Cohort group associated with this request. If there is a cohort
     * group in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortSpec cohort_spec = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $cohort_spec = null;
    /**
     * Optional. If false or unspecified, each row with all metrics equal to 0
     * will not be returned. If true, these rows will be returned if they are
     * not separately removed by a filter.
     * Regardless of this `keep_empty_rows` setting, only data recorded by the
     * Google Analytics (GA4) property can be displayed in a report.
     * For example if a property never logs a `purchase` event, then a query for
     * the `eventName` dimension and  `eventCount` metric will not have a row
     * containing eventName: "purchase" and eventCount: 0.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $keep_empty_rows = \false;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Data\V1alpha\Dimension>|\Google\Protobuf\Internal\RepeatedField $dimensions
     *           Optional. The dimensions requested and displayed.
     *     @type array<\Google\Analytics\Data\V1alpha\Metric>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Optional. The metrics requested and displayed.
     *     @type array<\Google\Analytics\Data\V1alpha\DateRange>|\Google\Protobuf\Internal\RepeatedField $date_ranges
     *           Optional. Date ranges of data to read. If multiple date ranges are
     *           requested, each response row will contain a zero based date range index.
     *           If two date ranges overlap, the event data for the overlapping days is
     *           included in the response rows for both date ranges. In a cohort request,
     *           this `dateRanges` must be unspecified.
     *     @type \Google\Analytics\Data\V1alpha\FilterExpression $dimension_filter
     *           Optional. Dimension filters let you ask for only specific dimension
     *           values in the report. To learn more, see [Fundamentals of Dimension
     *           Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     *           for examples. Metrics cannot be used in this filter.
     *     @type \Google\Analytics\Data\V1alpha\FilterExpression $metric_filter
     *           Optional. The filter clause of metrics. Applied after aggregating the
     *           report's rows, similar to SQL having-clause. Dimensions cannot be used in
     *           this filter.
     *     @type int|string $offset
     *           Optional. The row count of the start row from Google Analytics Storage.
     *           The first row is counted as row 0.
     *           When creating a report task, the `offset` and `limit` parameters define
     *           the subset of data rows from Google Analytics storage to be included in
     *           the generated report. For example, if there are a total of 300,000 rows
     *           in Google Analytics storage, the initial report task may have the
     *           first 10,000 rows with a limit of 10,000 and an offset of 0.
     *           Subsequently, another report task could cover the next 10,000 rows with a
     *           limit of 10,000 and an offset of 10,000.
     *     @type int|string $limit
     *           Optional. The number of rows to return in the Report. If unspecified,
     *           10,000 rows are returned. The API returns a maximum of 250,000 rows per
     *           request, no matter how many you ask for. `limit` must be positive.
     *           The API can also return fewer rows than the requested `limit`, if there
     *           aren't as many dimension values as the `limit`. For instance, there are
     *           fewer than 300 possible values for the dimension `country`, so when
     *           reporting on only `country`, you can't get more than 300 rows, even if
     *           you set `limit` to a higher value.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $metric_aggregations
     *           Optional. Aggregation of metrics. Aggregated metric values will be shown
     *           in rows where the dimension_values are set to
     *           "RESERVED_(MetricAggregation)".
     *     @type array<\Google\Analytics\Data\V1alpha\OrderBy>|\Google\Protobuf\Internal\RepeatedField $order_bys
     *           Optional. Specifies how rows are ordered in the response.
     *     @type string $currency_code
     *           Optional. A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     *           If the field is empty, the report uses the property's default currency.
     *     @type \Google\Analytics\Data\V1alpha\CohortSpec $cohort_spec
     *           Optional. Cohort group associated with this request. If there is a cohort
     *           group in the request the 'cohort' dimension must be present.
     *     @type bool $keep_empty_rows
     *           Optional. If false or unspecified, each row with all metrics equal to 0
     *           will not be returned. If true, these rows will be returned if they are
     *           not separately removed by a filter.
     *           Regardless of this `keep_empty_rows` setting, only data recorded by the
     *           Google Analytics (GA4) property can be displayed in a report.
     *           For example if a property never logs a `purchase` event, then a query for
     *           the `eventName` dimension and  `eventCount` metric will not have a row
     *           containing eventName: "purchase" and eventCount: 0.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }
    /**
     * Optional. The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Dimension dimensions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDimensions()
    {
        return $this->dimensions;
    }
    /**
     * Optional. The dimensions requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Dimension dimensions = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Analytics\Data\V1alpha\Dimension>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDimensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\Dimension::class);
        $this->dimensions = $arr;
        return $this;
    }
    /**
     * Optional. The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Metric metrics = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * Optional. The metrics requested and displayed.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.Metric metrics = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Analytics\Data\V1alpha\Metric>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\Metric::class);
        $this->metrics = $arr;
        return $this;
    }
    /**
     * Optional. Date ranges of data to read. If multiple date ranges are
     * requested, each response row will contain a zero based date range index.
     * If two date ranges overlap, the event data for the overlapping days is
     * included in the response rows for both date ranges. In a cohort request,
     * this `dateRanges` must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DateRange date_ranges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDateRanges()
    {
        return $this->date_ranges;
    }
    /**
     * Optional. Date ranges of data to read. If multiple date ranges are
     * requested, each response row will contain a zero based date range index.
     * If two date ranges overlap, the event data for the overlapping days is
     * included in the response rows for both date ranges. In a cohort request,
     * this `dateRanges` must be unspecified.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.DateRange date_ranges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Analytics\Data\V1alpha\DateRange>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDateRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\DateRange::class);
        $this->date_ranges = $arr;
        return $this;
    }
    /**
     * Optional. Dimension filters let you ask for only specific dimension
     * values in the report. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression dimension_filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Analytics\Data\V1alpha\FilterExpression|null
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
     * Optional. Dimension filters let you ask for only specific dimension
     * values in the report. To learn more, see [Fundamentals of Dimension
     * Filters](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#dimension_filters)
     * for examples. Metrics cannot be used in this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression dimension_filter = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Analytics\Data\V1alpha\FilterExpression $var
     * @return $this
     */
    public function setDimensionFilter($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\FilterExpression::class);
        $this->dimension_filter = $var;
        return $this;
    }
    /**
     * Optional. The filter clause of metrics. Applied after aggregating the
     * report's rows, similar to SQL having-clause. Dimensions cannot be used in
     * this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression metric_filter = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Analytics\Data\V1alpha\FilterExpression|null
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
     * Optional. The filter clause of metrics. Applied after aggregating the
     * report's rows, similar to SQL having-clause. Dimensions cannot be used in
     * this filter.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.FilterExpression metric_filter = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Analytics\Data\V1alpha\FilterExpression $var
     * @return $this
     */
    public function setMetricFilter($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\FilterExpression::class);
        $this->metric_filter = $var;
        return $this;
    }
    /**
     * Optional. The row count of the start row from Google Analytics Storage.
     * The first row is counted as row 0.
     * When creating a report task, the `offset` and `limit` parameters define
     * the subset of data rows from Google Analytics storage to be included in
     * the generated report. For example, if there are a total of 300,000 rows
     * in Google Analytics storage, the initial report task may have the
     * first 10,000 rows with a limit of 10,000 and an offset of 0.
     * Subsequently, another report task could cover the next 10,000 rows with a
     * limit of 10,000 and an offset of 10,000.
     *
     * Generated from protobuf field <code>int64 offset = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Optional. The row count of the start row from Google Analytics Storage.
     * The first row is counted as row 0.
     * When creating a report task, the `offset` and `limit` parameters define
     * the subset of data rows from Google Analytics storage to be included in
     * the generated report. For example, if there are a total of 300,000 rows
     * in Google Analytics storage, the initial report task may have the
     * first 10,000 rows with a limit of 10,000 and an offset of 0.
     * Subsequently, another report task could cover the next 10,000 rows with a
     * limit of 10,000 and an offset of 10,000.
     *
     * Generated from protobuf field <code>int64 offset = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;
        return $this;
    }
    /**
     * Optional. The number of rows to return in the Report. If unspecified,
     * 10,000 rows are returned. The API returns a maximum of 250,000 rows per
     * request, no matter how many you ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if
     * you set `limit` to a higher value.
     *
     * Generated from protobuf field <code>int64 limit = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Optional. The number of rows to return in the Report. If unspecified,
     * 10,000 rows are returned. The API returns a maximum of 250,000 rows per
     * request, no matter how many you ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`. For instance, there are
     * fewer than 300 possible values for the dimension `country`, so when
     * reporting on only `country`, you can't get more than 300 rows, even if
     * you set `limit` to a higher value.
     *
     * Generated from protobuf field <code>int64 limit = 8 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. Aggregation of metrics. Aggregated metric values will be shown
     * in rows where the dimension_values are set to
     * "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricAggregation metric_aggregations = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricAggregations()
    {
        return $this->metric_aggregations;
    }
    /**
     * Optional. Aggregation of metrics. Aggregated metric values will be shown
     * in rows where the dimension_values are set to
     * "RESERVED_(MetricAggregation)".
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.MetricAggregation metric_aggregations = 9 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricAggregations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::ENUM, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\MetricAggregation::class);
        $this->metric_aggregations = $arr;
        return $this;
    }
    /**
     * Optional. Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.OrderBy order_bys = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBys()
    {
        return $this->order_bys;
    }
    /**
     * Optional. Specifies how rows are ordered in the response.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.OrderBy order_bys = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Analytics\Data\V1alpha\OrderBy>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\OrderBy::class);
        $this->order_bys = $arr;
        return $this;
    }
    /**
     * Optional. A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the property's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }
    /**
     * Optional. A currency code in ISO4217 format, such as "AED", "USD", "JPY".
     * If the field is empty, the report uses the property's default currency.
     *
     * Generated from protobuf field <code>string currency_code = 11 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;
        return $this;
    }
    /**
     * Optional. Cohort group associated with this request. If there is a cohort
     * group in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortSpec cohort_spec = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Analytics\Data\V1alpha\CohortSpec|null
     */
    public function getCohortSpec()
    {
        return $this->cohort_spec;
    }
    public function hasCohortSpec()
    {
        return isset($this->cohort_spec);
    }
    public function clearCohortSpec()
    {
        unset($this->cohort_spec);
    }
    /**
     * Optional. Cohort group associated with this request. If there is a cohort
     * group in the request the 'cohort' dimension must be present.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.CohortSpec cohort_spec = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Analytics\Data\V1alpha\CohortSpec $var
     * @return $this
     */
    public function setCohortSpec($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\CohortSpec::class);
        $this->cohort_spec = $var;
        return $this;
    }
    /**
     * Optional. If false or unspecified, each row with all metrics equal to 0
     * will not be returned. If true, these rows will be returned if they are
     * not separately removed by a filter.
     * Regardless of this `keep_empty_rows` setting, only data recorded by the
     * Google Analytics (GA4) property can be displayed in a report.
     * For example if a property never logs a `purchase` event, then a query for
     * the `eventName` dimension and  `eventCount` metric will not have a row
     * containing eventName: "purchase" and eventCount: 0.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getKeepEmptyRows()
    {
        return $this->keep_empty_rows;
    }
    /**
     * Optional. If false or unspecified, each row with all metrics equal to 0
     * will not be returned. If true, these rows will be returned if they are
     * not separately removed by a filter.
     * Regardless of this `keep_empty_rows` setting, only data recorded by the
     * Google Analytics (GA4) property can be displayed in a report.
     * For example if a property never logs a `purchase` event, then a query for
     * the `eventName` dimension and  `eventCount` metric will not have a row
     * containing eventName: "purchase" and eventCount: 0.
     *
     * Generated from protobuf field <code>bool keep_empty_rows = 13 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setKeepEmptyRows($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_empty_rows = $var;
        return $this;
    }
}
