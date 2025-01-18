<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Request message for UpdateConversionEvent RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.UpdateConversionEventRequest</code>
 */
class UpdateConversionEventRequest extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Required. The conversion event to update.
     * The `name` field is used to identify the settings to be updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ConversionEvent conversion_event = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $conversion_event = null;
    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;
    /**
     * @param \Google\Analytics\Admin\V1beta\ConversionEvent $conversionEvent Required. The conversion event to update.
     *                                                                        The `name` field is used to identify the settings to be updated.
     * @param \Google\Protobuf\FieldMask                     $updateMask      Required. The list of fields to be updated. Field names must be in snake
     *                                                                        case (e.g., "field_to_update"). Omitted fields will not be updated. To
     *                                                                        replace the entire entity, use one path with the string "*" to match all
     *                                                                        fields.
     *
     * @return \Google\Analytics\Admin\V1beta\UpdateConversionEventRequest
     *
     * @experimental
     */
    public static function build(\Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta\ConversionEvent $conversionEvent, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\FieldMask $updateMask) : self
    {
        return (new self())->setConversionEvent($conversionEvent)->setUpdateMask($updateMask);
    }
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Admin\V1beta\ConversionEvent $conversion_event
     *           Required. The conversion event to update.
     *           The `name` field is used to identify the settings to be updated.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The list of fields to be updated. Field names must be in snake
     *           case (e.g., "field_to_update"). Omitted fields will not be updated. To
     *           replace the entire entity, use one path with the string "*" to match all
     *           fields.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }
    /**
     * Required. The conversion event to update.
     * The `name` field is used to identify the settings to be updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ConversionEvent conversion_event = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1beta\ConversionEvent|null
     */
    public function getConversionEvent()
    {
        return $this->conversion_event;
    }
    public function hasConversionEvent()
    {
        return isset($this->conversion_event);
    }
    public function clearConversionEvent()
    {
        unset($this->conversion_event);
    }
    /**
     * Required. The conversion event to update.
     * The `name` field is used to identify the settings to be updated.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ConversionEvent conversion_event = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1beta\ConversionEvent $var
     * @return $this
     */
    public function setConversionEvent($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1beta\ConversionEvent::class);
        $this->conversion_event = $var;
        return $this;
    }
    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }
    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }
    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }
    /**
     * Required. The list of fields to be updated. Field names must be in snake
     * case (e.g., "field_to_update"). Omitted fields will not be updated. To
     * replace the entire entity, use one path with the string "*" to match all
     * fields.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;
        return $this;
    }
}