<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for UpdateAccessBinding RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.UpdateAccessBindingRequest</code>
 */
class UpdateAccessBindingRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The access binding to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessBinding access_binding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $access_binding = null;
    /**
     * @param \Google\Analytics\Admin\V1alpha\AccessBinding $accessBinding Required. The access binding to update.
     *
     * @return \Google\Analytics\Admin\V1alpha\UpdateAccessBindingRequest
     *
     * @experimental
     */
    public static function build(\Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AccessBinding $accessBinding) : self
    {
        return (new self())->setAccessBinding($accessBinding);
    }
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1alpha\AccessBinding $access_binding
     *           Required. The access binding to update.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The access binding to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessBinding access_binding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\AccessBinding|null
     */
    public function getAccessBinding()
    {
        return $this->access_binding;
    }
    public function hasAccessBinding()
    {
        return isset($this->access_binding);
    }
    public function clearAccessBinding()
    {
        unset($this->access_binding);
    }
    /**
     * Required. The access binding to update.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AccessBinding access_binding = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\AccessBinding $var
     * @return $this
     */
    public function setAccessBinding($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\AccessBinding::class);
        $this->access_binding = $var;
        return $this;
    }
}
