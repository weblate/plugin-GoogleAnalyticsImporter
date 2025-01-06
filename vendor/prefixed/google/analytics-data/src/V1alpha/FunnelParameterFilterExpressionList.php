<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A list of funnel parameter filter expressions.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.FunnelParameterFilterExpressionList</code>
 */
class FunnelParameterFilterExpressionList extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The list of funnel parameter filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.FunnelParameterFilterExpression expressions = 1;</code>
     */
    private $expressions;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Data\V1alpha\FunnelParameterFilterExpression>|\Google\Protobuf\Internal\RepeatedField $expressions
     *           The list of funnel parameter filter expressions.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * The list of funnel parameter filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.FunnelParameterFilterExpression expressions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpressions()
    {
        return $this->expressions;
    }
    /**
     * The list of funnel parameter filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.FunnelParameterFilterExpression expressions = 1;</code>
     * @param array<\Google\Analytics\Data\V1alpha\FunnelParameterFilterExpression>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\FunnelParameterFilterExpression::class);
        $this->expressions = $arr;
        return $this;
    }
}
