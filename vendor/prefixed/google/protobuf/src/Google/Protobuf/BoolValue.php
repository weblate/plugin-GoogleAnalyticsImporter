<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/wrappers.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Wrapper message for `bool`.
 * The JSON representation for `BoolValue` is JSON `true` and `false`.
 *
 * Generated from protobuf message <code>google.protobuf.BoolValue</code>
 */
class BoolValue extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The bool value.
     *
     * Generated from protobuf field <code>bool value = 1;</code>
     */
    protected $value = \false;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $value
     *           The bool value.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        parent::__construct($data);
    }
    /**
     * The bool value.
     *
     * Generated from protobuf field <code>bool value = 1;</code>
     * @return bool
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * The bool value.
     *
     * Generated from protobuf field <code>bool value = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkBool($var);
        $this->value = $var;
        return $this;
    }
}
