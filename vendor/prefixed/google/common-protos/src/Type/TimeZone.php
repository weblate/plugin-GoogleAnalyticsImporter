<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/datetime.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Type;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Represents a time zone from the
 * [IANA Time Zone Database](https://www.iana.org/time-zones).
 *
 * Generated from protobuf message <code>google.type.TimeZone</code>
 */
class TimeZone extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * IANA Time Zone Database time zone, e.g. "America/New_York".
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Optional. IANA Time Zone Database version number, e.g. "2019a".
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    protected $version = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           IANA Time Zone Database time zone, e.g. "America/New_York".
     *     @type string $version
     *           Optional. IANA Time Zone Database version number, e.g. "2019a".
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Type\Datetime::initOnce();
        parent::__construct($data);
    }
    /**
     * IANA Time Zone Database time zone, e.g. "America/New_York".
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * IANA Time Zone Database time zone, e.g. "America/New_York".
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;
        return $this;
    }
    /**
     * Optional. IANA Time Zone Database version number, e.g. "2019a".
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Optional. IANA Time Zone Database version number, e.g. "2019a".
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;
        return $this;
    }
}
