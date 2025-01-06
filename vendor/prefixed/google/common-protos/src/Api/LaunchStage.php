<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/launch_stage.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api;

use UnexpectedValueException;
/**
 * The launch stage as defined by [Google Cloud Platform
 * Launch Stages](https://cloud.google.com/terms/launch-stages).
 *
 * Protobuf type <code>google.api.LaunchStage</code>
 */
class LaunchStage
{
    /**
     * Do not use this default value.
     *
     * Generated from protobuf enum <code>LAUNCH_STAGE_UNSPECIFIED = 0;</code>
     */
    const LAUNCH_STAGE_UNSPECIFIED = 0;
    /**
     * The feature is not yet implemented. Users can not use it.
     *
     * Generated from protobuf enum <code>UNIMPLEMENTED = 6;</code>
     */
    const UNIMPLEMENTED = 6;
    /**
     * Prelaunch features are hidden from users and are only visible internally.
     *
     * Generated from protobuf enum <code>PRELAUNCH = 7;</code>
     */
    const PRELAUNCH = 7;
    /**
     * Early Access features are limited to a closed group of testers. To use
     * these features, you must sign up in advance and sign a Trusted Tester
     * agreement (which includes confidentiality provisions). These features may
     * be unstable, changed in backward-incompatible ways, and are not
     * guaranteed to be released.
     *
     * Generated from protobuf enum <code>EARLY_ACCESS = 1;</code>
     */
    const EARLY_ACCESS = 1;
    /**
     * Alpha is a limited availability test for releases before they are cleared
     * for widespread use. By Alpha, all significant design issues are resolved
     * and we are in the process of verifying functionality. Alpha customers
     * need to apply for access, agree to applicable terms, and have their
     * projects allowlisted. Alpha releases don't have to be feature complete,
     * no SLAs are provided, and there are no technical support obligations, but
     * they will be far enough along that customers can actually use them in
     * test environments or for limited-use tests -- just like they would in
     * normal production cases.
     *
     * Generated from protobuf enum <code>ALPHA = 2;</code>
     */
    const ALPHA = 2;
    /**
     * Beta is the point at which we are ready to open a release for any
     * customer to use. There are no SLA or technical support obligations in a
     * Beta release. Products will be complete from a feature perspective, but
     * may have some open outstanding issues. Beta releases are suitable for
     * limited production use cases.
     *
     * Generated from protobuf enum <code>BETA = 3;</code>
     */
    const BETA = 3;
    /**
     * GA features are open to all developers and are considered stable and
     * fully qualified for production use.
     *
     * Generated from protobuf enum <code>GA = 4;</code>
     */
    const GA = 4;
    /**
     * Deprecated features are scheduled to be shut down and removed. For more
     * information, see the "Deprecation Policy" section of our [Terms of
     * Service](https://cloud.google.com/terms/)
     * and the [Google Cloud Platform Subject to the Deprecation
     * Policy](https://cloud.google.com/terms/deprecation) documentation.
     *
     * Generated from protobuf enum <code>DEPRECATED = 5;</code>
     */
    const DEPRECATED = 5;
    private static $valueToName = [self::LAUNCH_STAGE_UNSPECIFIED => 'LAUNCH_STAGE_UNSPECIFIED', self::UNIMPLEMENTED => 'UNIMPLEMENTED', self::PRELAUNCH => 'PRELAUNCH', self::EARLY_ACCESS => 'EARLY_ACCESS', self::ALPHA => 'ALPHA', self::BETA => 'BETA', self::GA => 'GA', self::DEPRECATED => 'DEPRECATED'];
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
