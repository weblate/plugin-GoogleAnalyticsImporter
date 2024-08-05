<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/distribution.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Distribution;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Exemplars are example points that may be used to annotate aggregated
 * distribution values. They are metadata that gives information about a
 * particular value added to a Distribution bucket, such as a trace ID that
 * was active when a value was added. They may contain further information,
 * such as a example values and timestamps, origin, etc.
 *
 * Generated from protobuf message <code>google.api.Distribution.Exemplar</code>
 */
class Exemplar extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Value of the exemplar point. This value determines to which bucket the
     * exemplar belongs.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     */
    protected $value = 0.0;
    /**
     * The observation (sampling) time of the above value.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     */
    protected $timestamp = null;
    /**
     * Contextual information about the example value. Examples are:
     *   Trace: type.googleapis.com/google.monitoring.v3.SpanContext
     *   Literal string: type.googleapis.com/google.protobuf.StringValue
     *   Labels dropped during aggregation:
     *     type.googleapis.com/google.monitoring.v3.DroppedLabels
     * There may be only a single attachment of any given message type in a
     * single exemplar, and this is enforced by the system.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any attachments = 3;</code>
     */
    private $attachments;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           Value of the exemplar point. This value determines to which bucket the
     *           exemplar belongs.
     *     @type \Google\Protobuf\Timestamp $timestamp
     *           The observation (sampling) time of the above value.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $attachments
     *           Contextual information about the example value. Examples are:
     *             Trace: type.googleapis.com/google.monitoring.v3.SpanContext
     *             Literal string: type.googleapis.com/google.protobuf.StringValue
     *             Labels dropped during aggregation:
     *               type.googleapis.com/google.monitoring.v3.DroppedLabels
     *           There may be only a single attachment of any given message type in a
     *           single exemplar, and this is enforced by the system.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Distribution::initOnce();
        parent::__construct($data);
    }
    /**
     * Value of the exemplar point. This value determines to which bucket the
     * exemplar belongs.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * Value of the exemplar point. This value determines to which bucket the
     * exemplar belongs.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->value = $var;
        return $this;
    }
    /**
     * The observation (sampling) time of the above value.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    public function hasTimestamp()
    {
        return isset($this->timestamp);
    }
    public function clearTimestamp()
    {
        unset($this->timestamp);
    }
    /**
     * The observation (sampling) time of the above value.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp timestamp = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Timestamp::class);
        $this->timestamp = $var;
        return $this;
    }
    /**
     * Contextual information about the example value. Examples are:
     *   Trace: type.googleapis.com/google.monitoring.v3.SpanContext
     *   Literal string: type.googleapis.com/google.protobuf.StringValue
     *   Labels dropped during aggregation:
     *     type.googleapis.com/google.monitoring.v3.DroppedLabels
     * There may be only a single attachment of any given message type in a
     * single exemplar, and this is enforced by the system.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any attachments = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAttachments()
    {
        return $this->attachments;
    }
    /**
     * Contextual information about the example value. Examples are:
     *   Trace: type.googleapis.com/google.monitoring.v3.SpanContext
     *   Literal string: type.googleapis.com/google.protobuf.StringValue
     *   Labels dropped during aggregation:
     *     type.googleapis.com/google.monitoring.v3.DroppedLabels
     * There may be only a single attachment of any given message type in a
     * single exemplar, and this is enforced by the system.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any attachments = 3;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAttachments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Any::class);
        $this->attachments = $arr;
        return $this;
    }
}
