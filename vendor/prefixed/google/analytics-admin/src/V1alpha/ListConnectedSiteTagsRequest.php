<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for ListConnectedSiteTags RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListConnectedSiteTagsRequest</code>
 */
class ListConnectedSiteTagsRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The Universal Analytics property to fetch connected site tags for.
     * This does not work on GA4 properties. A maximum of 20 connected site tags
     * will be returned.
     * Example Format: `properties/1234`
     *
     * Generated from protobuf field <code>string property = 1;</code>
     */
    private $property = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           The Universal Analytics property to fetch connected site tags for.
     *           This does not work on GA4 properties. A maximum of 20 connected site tags
     *           will be returned.
     *           Example Format: `properties/1234`
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * The Universal Analytics property to fetch connected site tags for.
     * This does not work on GA4 properties. A maximum of 20 connected site tags
     * will be returned.
     * Example Format: `properties/1234`
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }
    /**
     * The Universal Analytics property to fetch connected site tags for.
     * This does not work on GA4 properties. A maximum of 20 connected site tags
     * will be returned.
     * Example Format: `properties/1234`
     *
     * Generated from protobuf field <code>string property = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;
        return $this;
    }
}
