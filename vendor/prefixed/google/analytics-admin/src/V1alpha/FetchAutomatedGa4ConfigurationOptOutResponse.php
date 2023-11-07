<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Response message for fetching the opt out status for the automated GA4 setup
 * process.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.FetchAutomatedGa4ConfigurationOptOutResponse</code>
 */
class FetchAutomatedGa4ConfigurationOptOutResponse extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The opt out status for the UA property.
     *
     * Generated from protobuf field <code>bool opt_out = 1;</code>
     */
    private $opt_out = \false;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $opt_out
     *           The opt out status for the UA property.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * The opt out status for the UA property.
     *
     * Generated from protobuf field <code>bool opt_out = 1;</code>
     * @return bool
     */
    public function getOptOut()
    {
        return $this->opt_out;
    }
    /**
     * The opt out status for the UA property.
     *
     * Generated from protobuf field <code>bool opt_out = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setOptOut($var)
    {
        GPBUtil::checkBool($var);
        $this->opt_out = $var;
        return $this;
    }
}
