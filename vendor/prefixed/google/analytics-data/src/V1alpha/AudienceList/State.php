<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/analytics_data_api.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\AudienceList;

use UnexpectedValueException;
/**
 * The AudienceList currently exists in this state.
 *
 * Protobuf type <code>google.analytics.data.v1alpha.AudienceList.State</code>
 */
class State
{
    /**
     * Unspecified state will never be used.
     *
     * Generated from protobuf enum <code>STATE_UNSPECIFIED = 0;</code>
     */
    const STATE_UNSPECIFIED = 0;
    /**
     * The AudienceList is currently creating and will be available in the
     * future. Creating occurs immediately after the CreateAudienceList call.
     *
     * Generated from protobuf enum <code>CREATING = 1;</code>
     */
    const CREATING = 1;
    /**
     * The AudienceList is fully created and ready for querying. An AudienceList
     * is updated to active asynchronously from a request; this occurs some
     * time (for example 15 minutes) after the initial create call.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The AudienceList failed to be created. It is possible that re-requesting
     * this audience list will succeed.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    private static $valueToName = [self::STATE_UNSPECIFIED => 'STATE_UNSPECIFIED', self::CREATING => 'CREATING', self::ACTIVE => 'ACTIVE', self::FAILED => 'FAILED'];
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
