<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Dimensions are attributes of your data. For example, the dimension city
 * indicates the city from which an event originates. Dimension values in report
 * responses are strings; for example, the city could be "Paris" or "New York".
 * Requests are allowed up to 9 dimensions.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.Dimension</code>
 */
class Dimension extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The name of the dimension. See the [API
     * Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     * for the list of dimension names.
     * If `dimensionExpression` is specified, `name` can be any string that you
     * would like within the allowed character set. For example if a
     * `dimensionExpression` concatenates `country` and `city`, you could call
     * that dimension `countryAndCity`. Dimension names that you choose must match
     * the regular expression `^[a-zA-Z0-9_]$`.
     * Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     * `dimensionExpression`, and `pivots`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * One dimension can be the result of an expression of multiple dimensions.
     * For example, dimension "country, city": concatenate(country, ", ", city).
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.DimensionExpression dimension_expression = 2;</code>
     */
    private $dimension_expression = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the dimension. See the [API
     *           Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     *           for the list of dimension names.
     *           If `dimensionExpression` is specified, `name` can be any string that you
     *           would like within the allowed character set. For example if a
     *           `dimensionExpression` concatenates `country` and `city`, you could call
     *           that dimension `countryAndCity`. Dimension names that you choose must match
     *           the regular expression `^[a-zA-Z0-9_]$`.
     *           Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     *           `dimensionExpression`, and `pivots`.
     *     @type \Google\Analytics\Data\V1beta\DimensionExpression $dimension_expression
     *           One dimension can be the result of an expression of multiple dimensions.
     *           For example, dimension "country, city": concatenate(country, ", ", city).
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * The name of the dimension. See the [API
     * Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     * for the list of dimension names.
     * If `dimensionExpression` is specified, `name` can be any string that you
     * would like within the allowed character set. For example if a
     * `dimensionExpression` concatenates `country` and `city`, you could call
     * that dimension `countryAndCity`. Dimension names that you choose must match
     * the regular expression `^[a-zA-Z0-9_]$`.
     * Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     * `dimensionExpression`, and `pivots`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * The name of the dimension. See the [API
     * Dimensions](https://developers.google.com/analytics/devguides/reporting/data/v1/api-schema#dimensions)
     * for the list of dimension names.
     * If `dimensionExpression` is specified, `name` can be any string that you
     * would like within the allowed character set. For example if a
     * `dimensionExpression` concatenates `country` and `city`, you could call
     * that dimension `countryAndCity`. Dimension names that you choose must match
     * the regular expression `^[a-zA-Z0-9_]$`.
     * Dimensions are referenced by `name` in `dimensionFilter`, `orderBys`,
     * `dimensionExpression`, and `pivots`.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * One dimension can be the result of an expression of multiple dimensions.
     * For example, dimension "country, city": concatenate(country, ", ", city).
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.DimensionExpression dimension_expression = 2;</code>
     * @return \Google\Analytics\Data\V1beta\DimensionExpression|null
     */
    public function getDimensionExpression()
    {
        return $this->dimension_expression;
    }
    public function hasDimensionExpression()
    {
        return isset($this->dimension_expression);
    }
    public function clearDimensionExpression()
    {
        unset($this->dimension_expression);
    }
    /**
     * One dimension can be the result of an expression of multiple dimensions.
     * For example, dimension "country, city": concatenate(country, ", ", city).
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.DimensionExpression dimension_expression = 2;</code>
     * @param \Google\Analytics\Data\V1beta\DimensionExpression $var
     * @return $this
     */
    public function setDimensionExpression($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\DimensionExpression::class);
        $this->dimension_expression = $var;
        return $this;
    }
}
