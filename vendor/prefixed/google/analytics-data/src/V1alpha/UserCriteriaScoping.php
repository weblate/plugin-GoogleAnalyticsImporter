<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use UnexpectedValueException;
/**
 * Scoping specifies which events are considered when evaluating if a user
 * meets a criteria.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.UserCriteriaScoping</code>
 */
class UserCriteriaScoping
{
    /**
     * Unspecified criteria scoping. Do not specify.
     *
     * Generated from protobuf enum <code>USER_CRITERIA_SCOPING_UNSPECIFIED = 0;</code>
     */
    const USER_CRITERIA_SCOPING_UNSPECIFIED = 0;
    /**
     * If the criteria is satisfied within one event, the user matches the
     * criteria.
     *
     * Generated from protobuf enum <code>USER_CRITERIA_WITHIN_SAME_EVENT = 1;</code>
     */
    const USER_CRITERIA_WITHIN_SAME_EVENT = 1;
    /**
     * If the criteria is satisfied within one session, the user matches the
     * criteria.
     *
     * Generated from protobuf enum <code>USER_CRITERIA_WITHIN_SAME_SESSION = 2;</code>
     */
    const USER_CRITERIA_WITHIN_SAME_SESSION = 2;
    /**
     * If the criteria is satisfied by any events for the user, the user
     * matches the criteria.
     *
     * Generated from protobuf enum <code>USER_CRITERIA_ACROSS_ALL_SESSIONS = 3;</code>
     */
    const USER_CRITERIA_ACROSS_ALL_SESSIONS = 3;
    private static $valueToName = [self::USER_CRITERIA_SCOPING_UNSPECIFIED => 'USER_CRITERIA_SCOPING_UNSPECIFIED', self::USER_CRITERIA_WITHIN_SAME_EVENT => 'USER_CRITERIA_WITHIN_SAME_EVENT', self::USER_CRITERIA_WITHIN_SAME_SESSION => 'USER_CRITERIA_WITHIN_SAME_SESSION', self::USER_CRITERIA_ACROSS_ALL_SESSIONS => 'USER_CRITERIA_ACROSS_ALL_SESSIONS'];
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
