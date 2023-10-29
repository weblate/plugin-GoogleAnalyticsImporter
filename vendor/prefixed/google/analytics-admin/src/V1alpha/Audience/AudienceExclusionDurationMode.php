<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/audience.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\Audience;

use UnexpectedValueException;
/**
 * Specifies how long an exclusion lasts for users that meet the exclusion
 * filter.
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.Audience.AudienceExclusionDurationMode</code>
 */
class AudienceExclusionDurationMode
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>AUDIENCE_EXCLUSION_DURATION_MODE_UNSPECIFIED = 0;</code>
     */
    const AUDIENCE_EXCLUSION_DURATION_MODE_UNSPECIFIED = 0;
    /**
     * Exclude users from the Audience during periods when they meet the
     * filter clause.
     *
     * Generated from protobuf enum <code>EXCLUDE_TEMPORARILY = 1;</code>
     */
    const EXCLUDE_TEMPORARILY = 1;
    /**
     * Exclude users from the Audience if they've ever met the filter clause.
     *
     * Generated from protobuf enum <code>EXCLUDE_PERMANENTLY = 2;</code>
     */
    const EXCLUDE_PERMANENTLY = 2;
    private static $valueToName = [self::AUDIENCE_EXCLUSION_DURATION_MODE_UNSPECIFIED => 'AUDIENCE_EXCLUSION_DURATION_MODE_UNSPECIFIED', self::EXCLUDE_TEMPORARILY => 'EXCLUDE_TEMPORARILY', self::EXCLUDE_PERMANENTLY => 'EXCLUDE_PERMANENTLY'];
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
class_alias(AudienceExclusionDurationMode::class, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\Audience_AudienceExclusionDurationMode::class);
