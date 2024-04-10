<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for ListSearchAds360Links RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListSearchAds360LinksRequest</code>
 */
class ListSearchAds360LinksRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * The maximum number of resources to return.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200 (higher values will be coerced to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous `ListSearchAds360Links`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListSearchAds360Links` must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: properties/1234
     *     @type int $page_size
     *           The maximum number of resources to return.
     *           If unspecified, at most 50 resources will be returned.
     *           The maximum value is 200 (higher values will be coerced to the maximum).
     *     @type string $page_token
     *           A page token, received from a previous `ListSearchAds360Links`
     *           call. Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to
     *           `ListSearchAds360Links` must match the call that provided the
     *           page token.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;
        return $this;
    }
    /**
     * The maximum number of resources to return.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200 (higher values will be coerced to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }
    /**
     * The maximum number of resources to return.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200 (higher values will be coerced to the maximum).
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;
        return $this;
    }
    /**
     * A page token, received from a previous `ListSearchAds360Links`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListSearchAds360Links` must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }
    /**
     * A page token, received from a previous `ListSearchAds360Links`
     * call. Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to
     * `ListSearchAds360Links` must match the call that provided the
     * page token.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
        return $this;
    }
}
