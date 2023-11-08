<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for ListAccounts RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.ListAccountsRequest</code>
 */
class ListAccountsRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The maximum number of resources to return. The service may return
     * fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     */
    private $page_size = 0;
    /**
     * A page token, received from a previous `ListAccounts` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAccounts` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Whether to include soft-deleted (ie: "trashed") Accounts in the
     * results. Accounts can be inspected to determine whether they are deleted or
     * not.
     *
     * Generated from protobuf field <code>bool show_deleted = 3;</code>
     */
    private $show_deleted = \false;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *           The maximum number of resources to return. The service may return
     *           fewer than this value, even if there are additional pages.
     *           If unspecified, at most 50 resources will be returned.
     *           The maximum value is 200; (higher values will be coerced to the maximum)
     *     @type string $page_token
     *           A page token, received from a previous `ListAccounts` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListAccounts` must
     *           match the call that provided the page token.
     *     @type bool $show_deleted
     *           Whether to include soft-deleted (ie: "trashed") Accounts in the
     *           results. Accounts can be inspected to determine whether they are deleted or
     *           not.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * The maximum number of resources to return. The service may return
     * fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }
    /**
     * The maximum number of resources to return. The service may return
     * fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
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
     * A page token, received from a previous `ListAccounts` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAccounts` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }
    /**
     * A page token, received from a previous `ListAccounts` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAccounts` must
     * match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;
        return $this;
    }
    /**
     * Whether to include soft-deleted (ie: "trashed") Accounts in the
     * results. Accounts can be inspected to determine whether they are deleted or
     * not.
     *
     * Generated from protobuf field <code>bool show_deleted = 3;</code>
     * @return bool
     */
    public function getShowDeleted()
    {
        return $this->show_deleted;
    }
    /**
     * Whether to include soft-deleted (ie: "trashed") Accounts in the
     * results. Accounts can be inspected to determine whether they are deleted or
     * not.
     *
     * Generated from protobuf field <code>bool show_deleted = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setShowDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->show_deleted = $var;
        return $this;
    }
}
