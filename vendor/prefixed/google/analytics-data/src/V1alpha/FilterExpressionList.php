<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A list of filter expressions.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.FilterExpressionList</code>
 */
class FilterExpressionList extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * A list of filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.FilterExpression expressions = 1;</code>
     */
    private $expressions;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Analytics\Data\V1alpha\FilterExpression>|\Google\Protobuf\Internal\RepeatedField $expressions
     *           A list of filter expressions.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * A list of filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.FilterExpression expressions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpressions()
    {
        return $this->expressions;
    }
    /**
     * A list of filter expressions.
     *
     * Generated from protobuf field <code>repeated .google.analytics.data.v1alpha.FilterExpression expressions = 1;</code>
     * @param array<\Google\Analytics\Data\V1alpha\FilterExpression>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\FilterExpression::class);
        $this->expressions = $arr;
        return $this;
    }
}
