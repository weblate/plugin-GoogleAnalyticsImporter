<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for DeleteFirebaseLink RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.DeleteFirebaseLinkRequest</code>
 */
class DeleteFirebaseLinkRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
     * Example: properties/1234/firebaseLinks/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $name = '';
    /**
     * @param string $name Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
     *                     Example: properties/1234/firebaseLinks/5678
     *                     Please see {@see AnalyticsAdminServiceClient::firebaseLinkName()} for help formatting this field.
     *
     * @return \Google\Analytics\Admin\V1alpha\DeleteFirebaseLinkRequest
     *
     * @experimental
     */
    public static function build(string $name) : self
    {
        return (new self())->setName($name);
    }
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
     *           Example: properties/1234/firebaseLinks/5678
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
     * Example: properties/1234/firebaseLinks/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Required. Format: properties/{property_id}/firebaseLinks/{firebase_link_id}
     * Example: properties/1234/firebaseLinks/5678
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
