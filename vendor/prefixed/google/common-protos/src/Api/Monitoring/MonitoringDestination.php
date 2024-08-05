<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitoring.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Monitoring;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Configuration of a specific monitoring destination (the producer project
 * or the consumer project).
 *
 * Generated from protobuf message <code>google.api.Monitoring.MonitoringDestination</code>
 */
class MonitoringDestination extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     */
    protected $monitored_resource = '';
    /**
     * Types of the metrics to report to this monitoring destination.
     * Each type must be defined in
     * [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     */
    private $metrics;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $monitored_resource
     *           The monitored resource type. The type must be defined in
     *           [Service.monitored_resources][google.api.Service.monitored_resources]
     *           section.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $metrics
     *           Types of the metrics to report to this monitoring destination.
     *           Each type must be defined in
     *           [Service.metrics][google.api.Service.metrics] section.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Monitoring::initOnce();
        parent::__construct($data);
    }
    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @return string
     */
    public function getMonitoredResource()
    {
        return $this->monitored_resource;
    }
    /**
     * The monitored resource type. The type must be defined in
     * [Service.monitored_resources][google.api.Service.monitored_resources]
     * section.
     *
     * Generated from protobuf field <code>string monitored_resource = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMonitoredResource($var)
    {
        GPBUtil::checkString($var, True);
        $this->monitored_resource = $var;
        return $this;
    }
    /**
     * Types of the metrics to report to this monitoring destination.
     * Each type must be defined in
     * [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetrics()
    {
        return $this->metrics;
    }
    /**
     * Types of the metrics to report to this monitoring destination.
     * Each type must be defined in
     * [Service.metrics][google.api.Service.metrics] section.
     *
     * Generated from protobuf field <code>repeated string metrics = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetrics($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::STRING);
        $this->metrics = $arr;
        return $this;
    }
}
