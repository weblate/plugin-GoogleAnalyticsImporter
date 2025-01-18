<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/subproperty_event_filter.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A clause for defining a filter. A filter may be inclusive (events satisfying
 * the filter clause are included in the subproperty's data) or exclusive
 * (events satisfying the filter clause are excluded from the subproperty's
 * data).
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.SubpropertyEventFilterClause</code>
 */
class SubpropertyEventFilterClause extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The type for the filter clause.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilterClause.FilterClauseType filter_clause_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filter_clause_type = 0;
    /**
     * Required. The logical expression for what events are sent to the
     * subproperty.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilterExpression filter_expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $filter_expression = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $filter_clause_type
     *           Required. The type for the filter clause.
     *     @type \Google\Analytics\Admin\V1alpha\SubpropertyEventFilterExpression $filter_expression
     *           Required. The logical expression for what events are sent to the
     *           subproperty.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\SubpropertyEventFilter::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The type for the filter clause.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilterClause.FilterClauseType filter_clause_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getFilterClauseType()
    {
        return $this->filter_clause_type;
    }
    /**
     * Required. The type for the filter clause.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilterClause.FilterClauseType filter_clause_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setFilterClauseType($var)
    {
        GPBUtil::checkEnum($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\SubpropertyEventFilterClause\FilterClauseType::class);
        $this->filter_clause_type = $var;
        return $this;
    }
    /**
     * Required. The logical expression for what events are sent to the
     * subproperty.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilterExpression filter_expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\SubpropertyEventFilterExpression|null
     */
    public function getFilterExpression()
    {
        return $this->filter_expression;
    }
    public function hasFilterExpression()
    {
        return isset($this->filter_expression);
    }
    public function clearFilterExpression()
    {
        unset($this->filter_expression);
    }
    /**
     * Required. The logical expression for what events are sent to the
     * subproperty.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.SubpropertyEventFilterExpression filter_expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\SubpropertyEventFilterExpression $var
     * @return $this
     */
    public function setFilterExpression($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\SubpropertyEventFilterExpression::class);
        $this->filter_expression = $var;
        return $this;
    }
}