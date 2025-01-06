<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * The created Google Sheet with the list of users in an audience list.
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.SheetExportAudienceListResponse</code>
 */
class SheetExportAudienceListResponse extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * A uri for you to visit in your browser to view the Google Sheet.
     *
     * Generated from protobuf field <code>optional string spreadsheet_uri = 1;</code>
     */
    private $spreadsheet_uri = null;
    /**
     * An ID that identifies the created Google Sheet resource.
     *
     * Generated from protobuf field <code>optional string spreadsheet_id = 2;</code>
     */
    private $spreadsheet_id = null;
    /**
     * The total number of rows in the AudienceList result. `rowCount` is
     * independent of the number of rows returned in the response, the `limit`
     * request parameter, and the `offset` request parameter. For example if a
     * query returns 175 rows and includes `limit` of 50 in the API request, the
     * response will contain `rowCount` of 175 but only 50 rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>optional int32 row_count = 3;</code>
     */
    private $row_count = null;
    /**
     * Configuration data about AudienceList being exported. Returned to help
     * interpret the AudienceList in the Google Sheet of this response.
     * For example, the AudienceList may have more rows than are present in the
     * Google Sheet, and in that case, you may want to send an additional sheet
     * export request with a different `offset` value to retrieve the next page of
     * rows in an additional Google Sheet.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1alpha.AudienceList audience_list = 4;</code>
     */
    private $audience_list = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $spreadsheet_uri
     *           A uri for you to visit in your browser to view the Google Sheet.
     *     @type string $spreadsheet_id
     *           An ID that identifies the created Google Sheet resource.
     *     @type int $row_count
     *           The total number of rows in the AudienceList result. `rowCount` is
     *           independent of the number of rows returned in the response, the `limit`
     *           request parameter, and the `offset` request parameter. For example if a
     *           query returns 175 rows and includes `limit` of 50 in the API request, the
     *           response will contain `rowCount` of 175 but only 50 rows.
     *           To learn more about this pagination parameter, see
     *           [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *     @type \Google\Analytics\Data\V1alpha\AudienceList $audience_list
     *           Configuration data about AudienceList being exported. Returned to help
     *           interpret the AudienceList in the Google Sheet of this response.
     *           For example, the AudienceList may have more rows than are present in the
     *           Google Sheet, and in that case, you may want to send an additional sheet
     *           export request with a different `offset` value to retrieve the next page of
     *           rows in an additional Google Sheet.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\AnalyticsDataApi::initOnce();
        parent::__construct($data);
    }
    /**
     * A uri for you to visit in your browser to view the Google Sheet.
     *
     * Generated from protobuf field <code>optional string spreadsheet_uri = 1;</code>
     * @return string
     */
    public function getSpreadsheetUri()
    {
        return isset($this->spreadsheet_uri) ? $this->spreadsheet_uri : '';
    }
    public function hasSpreadsheetUri()
    {
        return isset($this->spreadsheet_uri);
    }
    public function clearSpreadsheetUri()
    {
        unset($this->spreadsheet_uri);
    }
    /**
     * A uri for you to visit in your browser to view the Google Sheet.
     *
     * Generated from protobuf field <code>optional string spreadsheet_uri = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpreadsheetUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->spreadsheet_uri = $var;
        return $this;
    }
    /**
     * An ID that identifies the created Google Sheet resource.
     *
     * Generated from protobuf field <code>optional string spreadsheet_id = 2;</code>
     * @return string
     */
    public function getSpreadsheetId()
    {
        return isset($this->spreadsheet_id) ? $this->spreadsheet_id : '';
    }
    public function hasSpreadsheetId()
    {
        return isset($this->spreadsheet_id);
    }
    public function clearSpreadsheetId()
    {
        unset($this->spreadsheet_id);
    }
    /**
     * An ID that identifies the created Google Sheet resource.
     *
     * Generated from protobuf field <code>optional string spreadsheet_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSpreadsheetId($var)
    {
        GPBUtil::checkString($var, True);
        $this->spreadsheet_id = $var;
        return $this;
    }
    /**
     * The total number of rows in the AudienceList result. `rowCount` is
     * independent of the number of rows returned in the response, the `limit`
     * request parameter, and the `offset` request parameter. For example if a
     * query returns 175 rows and includes `limit` of 50 in the API request, the
     * response will contain `rowCount` of 175 but only 50 rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>optional int32 row_count = 3;</code>
     * @return int
     */
    public function getRowCount()
    {
        return isset($this->row_count) ? $this->row_count : 0;
    }
    public function hasRowCount()
    {
        return isset($this->row_count);
    }
    public function clearRowCount()
    {
        unset($this->row_count);
    }
    /**
     * The total number of rows in the AudienceList result. `rowCount` is
     * independent of the number of rows returned in the response, the `limit`
     * request parameter, and the `offset` request parameter. For example if a
     * query returns 175 rows and includes `limit` of 50 in the API request, the
     * response will contain `rowCount` of 175 but only 50 rows.
     * To learn more about this pagination parameter, see
     * [Pagination](https://developers.google.com/analytics/devguides/reporting/data/v1/basics#pagination).
     *
     * Generated from protobuf field <code>optional int32 row_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRowCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->row_count = $var;
        return $this;
    }
    /**
     * Configuration data about AudienceList being exported. Returned to help
     * interpret the AudienceList in the Google Sheet of this response.
     * For example, the AudienceList may have more rows than are present in the
     * Google Sheet, and in that case, you may want to send an additional sheet
     * export request with a different `offset` value to retrieve the next page of
     * rows in an additional Google Sheet.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1alpha.AudienceList audience_list = 4;</code>
     * @return \Google\Analytics\Data\V1alpha\AudienceList|null
     */
    public function getAudienceList()
    {
        return $this->audience_list;
    }
    public function hasAudienceList()
    {
        return isset($this->audience_list);
    }
    public function clearAudienceList()
    {
        unset($this->audience_list);
    }
    /**
     * Configuration data about AudienceList being exported. Returned to help
     * interpret the AudienceList in the Google Sheet of this response.
     * For example, the AudienceList may have more rows than are present in the
     * Google Sheet, and in that case, you may want to send an additional sheet
     * export request with a different `offset` value to retrieve the next page of
     * rows in an additional Google Sheet.
     *
     * Generated from protobuf field <code>optional .google.analytics.data.v1alpha.AudienceList audience_list = 4;</code>
     * @param \Google\Analytics\Data\V1alpha\AudienceList $var
     * @return $this
     */
    public function setAudienceList($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\AudienceList::class);
        $this->audience_list = $var;
        return $this;
    }
}
