<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use UnexpectedValueException;
/**
 * Enumerates options for how long an exclusion will last if a user matches
 * the `userExclusionCriteria`.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.UserExclusionDuration</code>
 */
class UserExclusionDuration
{
    /**
     * Unspecified exclusion duration. Do not specify.
     *
     * Generated from protobuf enum <code>USER_EXCLUSION_DURATION_UNSPECIFIED = 0;</code>
     */
    const USER_EXCLUSION_DURATION_UNSPECIFIED = 0;
    /**
     * Temporarily exclude users from the segment during periods when the
     * user meets the `userExclusionCriteria` condition.
     *
     * Generated from protobuf enum <code>USER_EXCLUSION_TEMPORARY = 1;</code>
     */
    const USER_EXCLUSION_TEMPORARY = 1;
    /**
     * Permanently exclude users from the segment if the user ever meets the
     * `userExclusionCriteria` condition.
     *
     * Generated from protobuf enum <code>USER_EXCLUSION_PERMANENT = 2;</code>
     */
    const USER_EXCLUSION_PERMANENT = 2;
    private static $valueToName = [self::USER_EXCLUSION_DURATION_UNSPECIFIED => 'USER_EXCLUSION_DURATION_UNSPECIFIED', self::USER_EXCLUSION_TEMPORARY => 'USER_EXCLUSION_TEMPORARY', self::USER_EXCLUSION_PERMANENT => 'USER_EXCLUSION_PERMANENT'];
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