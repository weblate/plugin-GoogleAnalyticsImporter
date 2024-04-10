<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/billing.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Billing related configuration of the service.
 * The following example shows how to configure monitored resources and metrics
 * for billing:
 *     monitored_resources:
 *     - type: library.googleapis.com/branch
 *       labels:
 *       - key: /city
 *         description: The city where the library branch is located in.
 *       - key: /name
 *         description: The name of the branch.
 *     metrics:
 *     - name: library.googleapis.com/book/borrowed_count
 *       metric_kind: DELTA
 *       value_type: INT64
 *     billing:
 *       consumer_destinations:
 *       - monitored_resource: library.googleapis.com/branch
 *         metrics:
 *         - library.googleapis.com/book/borrowed_count
 *
 * Generated from protobuf message <code>google.api.Billing</code>
 */
class Billing extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Billing configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations per service, each one must have
     * a different monitored resource type. A metric can be used in at most
     * one consumer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Billing.BillingDestination consumer_destinations = 8;</code>
     */
    private $consumer_destinations;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Billing\BillingDestination[]|\Google\Protobuf\Internal\RepeatedField $consumer_destinations
     *           Billing configurations for sending metrics to the consumer project.
     *           There can be multiple consumer destinations per service, each one must have
     *           a different monitored resource type. A metric can be used in at most
     *           one consumer destination.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Billing::initOnce();
        parent::__construct($data);
    }
    /**
     * Billing configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations per service, each one must have
     * a different monitored resource type. A metric can be used in at most
     * one consumer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Billing.BillingDestination consumer_destinations = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getConsumerDestinations()
    {
        return $this->consumer_destinations;
    }
    /**
     * Billing configurations for sending metrics to the consumer project.
     * There can be multiple consumer destinations per service, each one must have
     * a different monitored resource type. A metric can be used in at most
     * one consumer destination.
     *
     * Generated from protobuf field <code>repeated .google.api.Billing.BillingDestination consumer_destinations = 8;</code>
     * @param \Google\Api\Billing\BillingDestination[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setConsumerDestinations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Billing\BillingDestination::class);
        $this->consumer_destinations = $arr;
        return $this;
    }
}
