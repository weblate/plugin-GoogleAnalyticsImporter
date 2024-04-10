<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/distribution.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Distribution\BucketOptions;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Specifies a linear sequence of buckets that all have the same width
 * (except overflow and underflow). Each bucket represents a constant
 * absolute uncertainty on the specific value in the bucket.
 * There are `num_finite_buckets + 2` (= N) buckets. Bucket `i` has the
 * following boundaries:
 *    Upper bound (0 <= i < N-1):     offset + (width * i).
 *    Lower bound (1 <= i < N):       offset + (width * (i - 1)).
 *
 * Generated from protobuf message <code>google.api.Distribution.BucketOptions.Linear</code>
 */
class Linear extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Must be greater than 0.
     *
     * Generated from protobuf field <code>int32 num_finite_buckets = 1;</code>
     */
    private $num_finite_buckets = 0;
    /**
     * Must be greater than 0.
     *
     * Generated from protobuf field <code>double width = 2;</code>
     */
    private $width = 0.0;
    /**
     * Lower bound of the first bucket.
     *
     * Generated from protobuf field <code>double offset = 3;</code>
     */
    private $offset = 0.0;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num_finite_buckets
     *           Must be greater than 0.
     *     @type float $width
     *           Must be greater than 0.
     *     @type float $offset
     *           Lower bound of the first bucket.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Distribution::initOnce();
        parent::__construct($data);
    }
    /**
     * Must be greater than 0.
     *
     * Generated from protobuf field <code>int32 num_finite_buckets = 1;</code>
     * @return int
     */
    public function getNumFiniteBuckets()
    {
        return $this->num_finite_buckets;
    }
    /**
     * Must be greater than 0.
     *
     * Generated from protobuf field <code>int32 num_finite_buckets = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumFiniteBuckets($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_finite_buckets = $var;
        return $this;
    }
    /**
     * Must be greater than 0.
     *
     * Generated from protobuf field <code>double width = 2;</code>
     * @return float
     */
    public function getWidth()
    {
        return $this->width;
    }
    /**
     * Must be greater than 0.
     *
     * Generated from protobuf field <code>double width = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkDouble($var);
        $this->width = $var;
        return $this;
    }
    /**
     * Lower bound of the first bucket.
     *
     * Generated from protobuf field <code>double offset = 3;</code>
     * @return float
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * Lower bound of the first bucket.
     *
     * Generated from protobuf field <code>double offset = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkDouble($var);
        $this->offset = $var;
        return $this;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Linear::class, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\Distribution_BucketOptions_Linear::class);
