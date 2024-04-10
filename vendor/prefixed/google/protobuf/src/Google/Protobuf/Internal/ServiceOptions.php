<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBWire;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\InputStream;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Generated from protobuf message <code>google.protobuf.ServiceOptions</code>
 */
class ServiceOptions extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Is this service deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the service, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating services.
     *
     * Generated from protobuf field <code>optional bool deprecated = 33 [default = false];</code>
     */
    protected $deprecated = null;
    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    private $uninterpreted_option;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $deprecated
     *           Is this service deprecated?
     *           Depending on the target platform, this can emit Deprecated annotations
     *           for the service, or it will be completely ignored; in the very least,
     *           this is a formalization for deprecating services.
     *     @type array<\Google\Protobuf\Internal\UninterpretedOption>|\Google\Protobuf\Internal\RepeatedField $uninterpreted_option
     *           The parser stores options it doesn't recognize here. See above.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct($data);
    }
    /**
     * Is this service deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the service, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating services.
     *
     * Generated from protobuf field <code>optional bool deprecated = 33 [default = false];</code>
     * @return bool
     */
    public function getDeprecated()
    {
        return isset($this->deprecated) ? $this->deprecated : \false;
    }
    public function hasDeprecated()
    {
        return isset($this->deprecated);
    }
    public function clearDeprecated()
    {
        unset($this->deprecated);
    }
    /**
     * Is this service deprecated?
     * Depending on the target platform, this can emit Deprecated annotations
     * for the service, or it will be completely ignored; in the very least,
     * this is a formalization for deprecating services.
     *
     * Generated from protobuf field <code>optional bool deprecated = 33 [default = false];</code>
     * @param bool $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkBool($var);
        $this->deprecated = $var;
        return $this;
    }
    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUninterpretedOption()
    {
        return $this->uninterpreted_option;
    }
    /**
     * The parser stores options it doesn't recognize here. See above.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     * @param array<\Google\Protobuf\Internal\UninterpretedOption>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUninterpretedOption($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\UninterpretedOption::class);
        $this->uninterpreted_option = $arr;
        return $this;
    }
}
