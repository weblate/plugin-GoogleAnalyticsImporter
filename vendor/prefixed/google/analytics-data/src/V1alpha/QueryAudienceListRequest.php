<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A request to list users in an audience list.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.QueryAudienceListRequest</code>
 */
class QueryAudienceListRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the audience list to retrieve users from.
     * Format: `properties/{property}/audienceLists/{audience_list}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Optional. The row count of the start row. The first row is counted as row
     * 0.
     * When paging, the first request does not specify offset; or equivalently,
     * sets offset to 0; the first request returns the first `limit` of rows. The
     * second request sets offset to the `limit` of the first request; the second
     * request returns the second `limit` of rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $offset = 0;
    /**
     * Optional. The number of rows to return. If unspecified, 10,000 rows are
     * returned. The API returns a maximum of 250,000 rows per request, no matter
     * how many you ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $limit = 0;
    /**
     * @param string $name Required. The name of the audience list to retrieve users from.
     *                     Format: `properties/{property}/audienceLists/{audience_list}`
     *
     * @return \Google\Analytics\Data\V1alpha\QueryAudienceListRequest
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
     *           Required. The name of the audience list to retrieve users from.
     *           Format: `properties/{property}/audienceLists/{audience_list}`
     *     @type int|string $offset
     *           Optional. The row count of the start row. The first row is counted as row
     *           0.
     *           When paging, the first request does not specify offset; or equivalently,
     *           sets offset to 0; the first request returns the first `limit` of rows. The
     *           second request sets offset to the `limit` of the first request; the second
     *           request returns the second `limit` of rows.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type int|string $limit
     *           Optional. The number of rows to return. If unspecified, 10,000 rows are
     *           returned. The API returns a maximum of 250,000 rows per request, no matter
     *           how many you ask for. `limit` must be positive.
     *           The API can also return fewer rows than the requested `limit`, if there
     *           aren't as many dimension values as the `limit`.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The name of the audience list to retrieve users from.
     * Format: `properties/{property}/audienceLists/{audience_list}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Required. The name of the audience list to retrieve users from.
     * Format: `properties/{property}/audienceLists/{audience_list}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        return $this;
    }
    /**
     * Optional. The row count of the start row. The first row is counted as row
     * 0.
     * When paging, the first request does not specify offset; or equivalently,
     * sets offset to 0; the first request returns the first `limit` of rows. The
     * second request sets offset to the `limit` of the first request; the second
     * request returns the second `limit` of rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Optional. The row count of the start row. The first row is counted as row
     * 0.
     * When paging, the first request does not specify offset; or equivalently,
     * sets offset to 0; the first request returns the first `limit` of rows. The
     * second request sets offset to the `limit` of the first request; the second
     * request returns the second `limit` of rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 offset = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->offset = $var;
        return $this;
    }
    /**
     * Optional. The number of rows to return. If unspecified, 10,000 rows are
     * returned. The API returns a maximum of 250,000 rows per request, no matter
     * how many you ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int|string
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * Optional. The number of rows to return. If unspecified, 10,000 rows are
     * returned. The API returns a maximum of 250,000 rows per request, no matter
     * how many you ask for. `limit` must be positive.
     * The API can also return fewer rows than the requested `limit`, if there
     * aren't as many dimension values as the `limit`.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>int64 limit = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkInt64($var);
        $this->limit = $var;
        return $this;
    }
}
