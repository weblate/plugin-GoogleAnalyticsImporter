<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/resources.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha;

use UnexpectedValueException;
/**
 * Status of the Google Signals settings.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.GoogleSignalsState</code>
 */
class GoogleSignalsState
{
    /**
     * Google Signals status defaults to GOOGLE_SIGNALS_STATE_UNSPECIFIED to
     * represent that the user has not made an explicit choice.
     *
     * Generated from protobuf enum <code>GOOGLE_SIGNALS_STATE_UNSPECIFIED = 0;</code>
     */
    const GOOGLE_SIGNALS_STATE_UNSPECIFIED = 0;
    /**
     * Google Signals is enabled.
     *
     * Generated from protobuf enum <code>GOOGLE_SIGNALS_ENABLED = 1;</code>
     */
    const GOOGLE_SIGNALS_ENABLED = 1;
    /**
     * Google Signals is disabled.
     *
     * Generated from protobuf enum <code>GOOGLE_SIGNALS_DISABLED = 2;</code>
     */
    const GOOGLE_SIGNALS_DISABLED = 2;
    private static $valueToName = [self::GOOGLE_SIGNALS_STATE_UNSPECIFIED => 'GOOGLE_SIGNALS_STATE_UNSPECIFIED', self::GOOGLE_SIGNALS_ENABLED => 'GOOGLE_SIGNALS_ENABLED', self::GOOGLE_SIGNALS_DISABLED => 'GOOGLE_SIGNALS_DISABLED'];
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
