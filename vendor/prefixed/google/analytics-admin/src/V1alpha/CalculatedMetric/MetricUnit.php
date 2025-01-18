<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\CalculatedMetric;

use UnexpectedValueException;
/**
 * Possible types of representing the calculated metric's value.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.CalculatedMetric.MetricUnit</code>
 */
class MetricUnit
{
    /**
     * MetricUnit unspecified or missing.
     *
     * Generated from protobuf enum <code>METRIC_UNIT_UNSPECIFIED = 0;</code>
     */
    const METRIC_UNIT_UNSPECIFIED = 0;
    /**
     * This metric uses default units.
     *
     * Generated from protobuf enum <code>STANDARD = 1;</code>
     */
    const STANDARD = 1;
    /**
     * This metric measures a currency.
     *
     * Generated from protobuf enum <code>CURRENCY = 2;</code>
     */
    const CURRENCY = 2;
    /**
     * This metric measures feet.
     *
     * Generated from protobuf enum <code>FEET = 3;</code>
     */
    const FEET = 3;
    /**
     * This metric measures miles.
     *
     * Generated from protobuf enum <code>MILES = 4;</code>
     */
    const MILES = 4;
    /**
     * This metric measures meters.
     *
     * Generated from protobuf enum <code>METERS = 5;</code>
     */
    const METERS = 5;
    /**
     * This metric measures kilometers.
     *
     * Generated from protobuf enum <code>KILOMETERS = 6;</code>
     */
    const KILOMETERS = 6;
    /**
     * This metric measures milliseconds.
     *
     * Generated from protobuf enum <code>MILLISECONDS = 7;</code>
     */
    const MILLISECONDS = 7;
    /**
     * This metric measures seconds.
     *
     * Generated from protobuf enum <code>SECONDS = 8;</code>
     */
    const SECONDS = 8;
    /**
     * This metric measures minutes.
     *
     * Generated from protobuf enum <code>MINUTES = 9;</code>
     */
    const MINUTES = 9;
    /**
     * This metric measures hours.
     *
     * Generated from protobuf enum <code>HOURS = 10;</code>
     */
    const HOURS = 10;
    private static $valueToName = [self::METRIC_UNIT_UNSPECIFIED => 'METRIC_UNIT_UNSPECIFIED', self::STANDARD => 'STANDARD', self::CURRENCY => 'CURRENCY', self::FEET => 'FEET', self::MILES => 'MILES', self::METERS => 'METERS', self::KILOMETERS => 'KILOMETERS', self::MILLISECONDS => 'MILLISECONDS', self::SECONDS => 'SECONDS', self::MINUTES => 'MINUTES', self::HOURS => 'HOURS'];
    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf('Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }
    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf('Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MetricUnit::class, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\CalculatedMetric_MetricUnit::class);