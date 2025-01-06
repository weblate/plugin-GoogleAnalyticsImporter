<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1alpha/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A segment is a subset of your Analytics data. For example, of your entire set
 * of users, one segment might be users from a particular country or city.
 * Another segment might be users who purchase a particular line of products or
 * who visit a specific part of your site or trigger certain events in your app.
 * To learn more, see [GA4 Segment
 * Builder](https://support.google.com/analytics/answer/9304353).
 *
 * Generated from protobuf message <code>google.analytics.data.v1alpha.Segment</code>
 */
class Segment extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The name for this segment. If unspecified, segments are named "Segment".
     * This name defines string value returned by the `segment` dimension. The
     * `segment` dimension prefixes segment names by the 1-based index number of
     * the segment in the request (for example "1. Segment", "2. Segment", etc.).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    protected $one_segment_scope;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name for this segment. If unspecified, segments are named "Segment".
     *           This name defines string value returned by the `segment` dimension. The
     *           `segment` dimension prefixes segment names by the 1-based index number of
     *           the segment in the request (for example "1. Segment", "2. Segment", etc.).
     *     @type \Google\Analytics\Data\V1alpha\UserSegment $user_segment
     *           User segments are subsets of users who engaged with your site or app.
     *     @type \Google\Analytics\Data\V1alpha\SessionSegment $session_segment
     *           Session segments are subsets of the sessions that occurred on your site
     *           or app.
     *     @type \Google\Analytics\Data\V1alpha\EventSegment $event_segment
     *           Event segments are subsets of events that were triggered on your site or
     *           app.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Alpha\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * The name for this segment. If unspecified, segments are named "Segment".
     * This name defines string value returned by the `segment` dimension. The
     * `segment` dimension prefixes segment names by the 1-based index number of
     * the segment in the request (for example "1. Segment", "2. Segment", etc.).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * The name for this segment. If unspecified, segments are named "Segment".
     * This name defines string value returned by the `segment` dimension. The
     * `segment` dimension prefixes segment names by the 1-based index number of
     * the segment in the request (for example "1. Segment", "2. Segment", etc.).
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        return $this;
    }
    /**
     * User segments are subsets of users who engaged with your site or app.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.UserSegment user_segment = 2;</code>
     * @return \Google\Analytics\Data\V1alpha\UserSegment|null
     */
    public function getUserSegment()
    {
        return $this->readOneof(2);
    }
    public function hasUserSegment()
    {
        return $this->hasOneof(2);
    }
    /**
     * User segments are subsets of users who engaged with your site or app.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.UserSegment user_segment = 2;</code>
     * @param \Google\Analytics\Data\V1alpha\UserSegment $var
     * @return $this
     */
    public function setUserSegment($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\UserSegment::class);
        $this->writeOneof(2, $var);
        return $this;
    }
    /**
     * Session segments are subsets of the sessions that occurred on your site
     * or app.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SessionSegment session_segment = 3;</code>
     * @return \Google\Analytics\Data\V1alpha\SessionSegment|null
     */
    public function getSessionSegment()
    {
        return $this->readOneof(3);
    }
    public function hasSessionSegment()
    {
        return $this->hasOneof(3);
    }
    /**
     * Session segments are subsets of the sessions that occurred on your site
     * or app.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.SessionSegment session_segment = 3;</code>
     * @param \Google\Analytics\Data\V1alpha\SessionSegment $var
     * @return $this
     */
    public function setSessionSegment($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\SessionSegment::class);
        $this->writeOneof(3, $var);
        return $this;
    }
    /**
     * Event segments are subsets of events that were triggered on your site or
     * app.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegment event_segment = 4;</code>
     * @return \Google\Analytics\Data\V1alpha\EventSegment|null
     */
    public function getEventSegment()
    {
        return $this->readOneof(4);
    }
    public function hasEventSegment()
    {
        return $this->hasOneof(4);
    }
    /**
     * Event segments are subsets of events that were triggered on your site or
     * app.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1alpha.EventSegment event_segment = 4;</code>
     * @param \Google\Analytics\Data\V1alpha\EventSegment $var
     * @return $this
     */
    public function setEventSegment($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1alpha\EventSegment::class);
        $this->writeOneof(4, $var);
        return $this;
    }
    /**
     * @return string
     */
    public function getOneSegmentScope()
    {
        return $this->whichOneof("one_segment_scope");
    }
}
