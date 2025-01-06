<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for AcknowledgeUserDataCollection RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.AcknowledgeUserDataCollectionRequest</code>
 */
class AcknowledgeUserDataCollectionRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The property for which to acknowledge user data collection.
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $property = '';
    /**
     * Required. An acknowledgement that the caller of this method understands the
     * terms of user data collection.
     * This field must contain the exact value:
     * "I acknowledge that I have the necessary privacy disclosures and rights
     * from my end users for the collection and processing of their data,
     * including the association of such data with the visitation information
     * Google Analytics collects from my site and/or app property."
     *
     * Generated from protobuf field <code>string acknowledgement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $acknowledgement = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $property
     *           Required. The property for which to acknowledge user data collection.
     *     @type string $acknowledgement
     *           Required. An acknowledgement that the caller of this method understands the
     *           terms of user data collection.
     *           This field must contain the exact value:
     *           "I acknowledge that I have the necessary privacy disclosures and rights
     *           from my end users for the collection and processing of their data,
     *           including the association of such data with the visitation information
     *           Google Analytics collects from my site and/or app property."
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The property for which to acknowledge user data collection.
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }
    /**
     * Required. The property for which to acknowledge user data collection.
     *
     * Generated from protobuf field <code>string property = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setProperty($var)
    {
        GPBUtil::checkString($var, True);
        $this->property = $var;
        return $this;
    }
    /**
     * Required. An acknowledgement that the caller of this method understands the
     * terms of user data collection.
     * This field must contain the exact value:
     * "I acknowledge that I have the necessary privacy disclosures and rights
     * from my end users for the collection and processing of their data,
     * including the association of such data with the visitation information
     * Google Analytics collects from my site and/or app property."
     *
     * Generated from protobuf field <code>string acknowledgement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAcknowledgement()
    {
        return $this->acknowledgement;
    }
    /**
     * Required. An acknowledgement that the caller of this method understands the
     * terms of user data collection.
     * This field must contain the exact value:
     * "I acknowledge that I have the necessary privacy disclosures and rights
     * from my end users for the collection and processing of their data,
     * including the association of such data with the visitation information
     * Google Analytics collects from my site and/or app property."
     *
     * Generated from protobuf field <code>string acknowledgement = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAcknowledgement($var)
    {
        GPBUtil::checkString($var, True);
        $this->acknowledgement = $var;
        return $this;
    }
}
