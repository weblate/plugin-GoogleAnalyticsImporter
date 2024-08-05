<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use UnexpectedValueException;
/**
 * Enumerates options for how long an exclusion will last if a session
 * matches the `sessionExclusionCriteria`.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.SessionExclusionDuration</code>
 */
class SessionExclusionDuration
{
    /**
     * Unspecified exclusion duration. Do not specify.
     *
     * Generated from protobuf enum <code>SESSION_EXCLUSION_DURATION_UNSPECIFIED = 0;</code>
     */
    const SESSION_EXCLUSION_DURATION_UNSPECIFIED = 0;
    /**
     * Temporarily exclude sessions from the segment during periods when the
     * session meets the `sessionExclusionCriteria` condition.
     *
     * Generated from protobuf enum <code>SESSION_EXCLUSION_TEMPORARY = 1;</code>
     */
    const SESSION_EXCLUSION_TEMPORARY = 1;
    /**
     * Permanently exclude sessions from the segment if the session ever meets
     * the `sessionExclusionCriteria` condition.
     *
     * Generated from protobuf enum <code>SESSION_EXCLUSION_PERMANENT = 2;</code>
     */
    const SESSION_EXCLUSION_PERMANENT = 2;
    private static $valueToName = [self::SESSION_EXCLUSION_DURATION_UNSPECIFIED => 'SESSION_EXCLUSION_DURATION_UNSPECIFIED', self::SESSION_EXCLUSION_TEMPORARY => 'SESSION_EXCLUSION_TEMPORARY', self::SESSION_EXCLUSION_PERMANENT => 'SESSION_EXCLUSION_PERMANENT'];
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
