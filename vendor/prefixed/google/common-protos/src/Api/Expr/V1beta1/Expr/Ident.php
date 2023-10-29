<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/expr.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Expr\V1beta1\Expr;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * An identifier expression. e.g. `request`.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.Expr.Ident</code>
 */
class Ident extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. Holds a single, unqualified identifier, possibly preceded by a
     * '.'.
     * Qualified names are represented by the [Expr.Select][google.api.expr.v1beta1.Expr.Select] expression.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Holds a single, unqualified identifier, possibly preceded by a
     *           '.'.
     *           Qualified names are represented by the [Expr.Select][google.api.expr.v1beta1.Expr.Select] expression.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Expr\V1Beta1\Expr::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. Holds a single, unqualified identifier, possibly preceded by a
     * '.'.
     * Qualified names are represented by the [Expr.Select][google.api.expr.v1beta1.Expr.Select] expression.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Required. Holds a single, unqualified identifier, possibly preceded by a
     * '.'.
     * Qualified names are represented by the [Expr.Select][google.api.expr.v1beta1.Expr.Select] expression.
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
}
// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Ident::class, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Expr\V1beta1\Expr_Ident::class);
