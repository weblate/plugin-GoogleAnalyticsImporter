<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/event_create_and_edit.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\MatchingCondition;

use UnexpectedValueException;
/**
 * Comparison type for matching condition
 *
 * Protobuf type <code>google.analytics.admin.v1alpha.MatchingCondition.ComparisonType</code>
 */
class ComparisonType
{
    /**
     * Unknown
     *
     * Generated from protobuf enum <code>COMPARISON_TYPE_UNSPECIFIED = 0;</code>
     */
    const COMPARISON_TYPE_UNSPECIFIED = 0;
    /**
     * Equals, case sensitive
     *
     * Generated from protobuf enum <code>EQUALS = 1;</code>
     */
    const EQUALS = 1;
    /**
     * Equals, case insensitive
     *
     * Generated from protobuf enum <code>EQUALS_CASE_INSENSITIVE = 2;</code>
     */
    const EQUALS_CASE_INSENSITIVE = 2;
    /**
     * Contains, case sensitive
     *
     * Generated from protobuf enum <code>CONTAINS = 3;</code>
     */
    const CONTAINS = 3;
    /**
     * Contains, case insensitive
     *
     * Generated from protobuf enum <code>CONTAINS_CASE_INSENSITIVE = 4;</code>
     */
    const CONTAINS_CASE_INSENSITIVE = 4;
    /**
     * Starts with, case sensitive
     *
     * Generated from protobuf enum <code>STARTS_WITH = 5;</code>
     */
    const STARTS_WITH = 5;
    /**
     * Starts with, case insensitive
     *
     * Generated from protobuf enum <code>STARTS_WITH_CASE_INSENSITIVE = 6;</code>
     */
    const STARTS_WITH_CASE_INSENSITIVE = 6;
    /**
     * Ends with, case sensitive
     *
     * Generated from protobuf enum <code>ENDS_WITH = 7;</code>
     */
    const ENDS_WITH = 7;
    /**
     * Ends with, case insensitive
     *
     * Generated from protobuf enum <code>ENDS_WITH_CASE_INSENSITIVE = 8;</code>
     */
    const ENDS_WITH_CASE_INSENSITIVE = 8;
    /**
     * Greater than
     *
     * Generated from protobuf enum <code>GREATER_THAN = 9;</code>
     */
    const GREATER_THAN = 9;
    /**
     * Greater than or equal
     *
     * Generated from protobuf enum <code>GREATER_THAN_OR_EQUAL = 10;</code>
     */
    const GREATER_THAN_OR_EQUAL = 10;
    /**
     * Less than
     *
     * Generated from protobuf enum <code>LESS_THAN = 11;</code>
     */
    const LESS_THAN = 11;
    /**
     * Less than or equal
     *
     * Generated from protobuf enum <code>LESS_THAN_OR_EQUAL = 12;</code>
     */
    const LESS_THAN_OR_EQUAL = 12;
    /**
     * regular expression. Only supported for web streams.
     *
     * Generated from protobuf enum <code>REGULAR_EXPRESSION = 13;</code>
     */
    const REGULAR_EXPRESSION = 13;
    /**
     * regular expression, case insensitive. Only supported for web streams.
     *
     * Generated from protobuf enum <code>REGULAR_EXPRESSION_CASE_INSENSITIVE = 14;</code>
     */
    const REGULAR_EXPRESSION_CASE_INSENSITIVE = 14;
    private static $valueToName = [self::COMPARISON_TYPE_UNSPECIFIED => 'COMPARISON_TYPE_UNSPECIFIED', self::EQUALS => 'EQUALS', self::EQUALS_CASE_INSENSITIVE => 'EQUALS_CASE_INSENSITIVE', self::CONTAINS => 'CONTAINS', self::CONTAINS_CASE_INSENSITIVE => 'CONTAINS_CASE_INSENSITIVE', self::STARTS_WITH => 'STARTS_WITH', self::STARTS_WITH_CASE_INSENSITIVE => 'STARTS_WITH_CASE_INSENSITIVE', self::ENDS_WITH => 'ENDS_WITH', self::ENDS_WITH_CASE_INSENSITIVE => 'ENDS_WITH_CASE_INSENSITIVE', self::GREATER_THAN => 'GREATER_THAN', self::GREATER_THAN_OR_EQUAL => 'GREATER_THAN_OR_EQUAL', self::LESS_THAN => 'LESS_THAN', self::LESS_THAN_OR_EQUAL => 'LESS_THAN_OR_EQUAL', self::REGULAR_EXPRESSION => 'REGULAR_EXPRESSION', self::REGULAR_EXPRESSION_CASE_INSENSITIVE => 'REGULAR_EXPRESSION_CASE_INSENSITIVE'];
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
class_alias(ComparisonType::class, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Admin\V1alpha\MatchingCondition_ComparisonType::class);
