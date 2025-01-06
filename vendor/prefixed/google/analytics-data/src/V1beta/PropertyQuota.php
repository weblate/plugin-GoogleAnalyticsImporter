<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/data/v1beta/data.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Current state of all quotas for this Analytics Property. If any quota for a
 * property is exhausted, all requests to that property will return Resource
 * Exhausted errors.
 *
 * Generated from protobuf message <code>google.analytics.data.v1beta.PropertyQuota</code>
 */
class PropertyQuota extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Standard Analytics Properties can use up to 200,000 tokens per day;
     * Analytics 360 Properties can use 2,000,000 tokens per day. Most requests
     * consume fewer than 10 tokens.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_day = 1;</code>
     */
    private $tokens_per_day = null;
    /**
     * Standard Analytics Properties can use up to 40,000 tokens per hour;
     * Analytics 360 Properties can use 400,000 tokens per hour. An API request
     * consumes a single number of tokens, and that number is deducted from all of
     * the hourly, daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_hour = 2;</code>
     */
    private $tokens_per_hour = null;
    /**
     * Standard Analytics Properties can send up to 10 concurrent requests;
     * Analytics 360 Properties can use up to 50 concurrent requests.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus concurrent_requests = 3;</code>
     */
    private $concurrent_requests = null;
    /**
     * Standard Analytics Properties and cloud project pairs can have up to 10
     * server errors per hour; Analytics 360 Properties and cloud project pairs
     * can have up to 50 server errors per hour.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus server_errors_per_project_per_hour = 4;</code>
     */
    private $server_errors_per_project_per_hour = null;
    /**
     * Analytics Properties can send up to 120 requests with potentially
     * thresholded dimensions per hour. In a batch request, each report request
     * is individually counted for this quota if the request contains potentially
     * thresholded dimensions.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus potentially_thresholded_requests_per_hour = 5;</code>
     */
    private $potentially_thresholded_requests_per_hour = null;
    /**
     * Analytics Properties can use up to 35% of their tokens per project per
     * hour. This amounts to standard Analytics Properties can use up to 14,000
     * tokens per project per hour, and Analytics 360 Properties can use 140,000
     * tokens per project per hour. An API request consumes a single number of
     * tokens, and that number is deducted from all of the hourly, daily, and per
     * project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_project_per_hour = 6;</code>
     */
    private $tokens_per_project_per_hour = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Analytics\Data\V1beta\QuotaStatus $tokens_per_day
     *           Standard Analytics Properties can use up to 200,000 tokens per day;
     *           Analytics 360 Properties can use 2,000,000 tokens per day. Most requests
     *           consume fewer than 10 tokens.
     *     @type \Google\Analytics\Data\V1beta\QuotaStatus $tokens_per_hour
     *           Standard Analytics Properties can use up to 40,000 tokens per hour;
     *           Analytics 360 Properties can use 400,000 tokens per hour. An API request
     *           consumes a single number of tokens, and that number is deducted from all of
     *           the hourly, daily, and per project hourly quotas.
     *     @type \Google\Analytics\Data\V1beta\QuotaStatus $concurrent_requests
     *           Standard Analytics Properties can send up to 10 concurrent requests;
     *           Analytics 360 Properties can use up to 50 concurrent requests.
     *     @type \Google\Analytics\Data\V1beta\QuotaStatus $server_errors_per_project_per_hour
     *           Standard Analytics Properties and cloud project pairs can have up to 10
     *           server errors per hour; Analytics 360 Properties and cloud project pairs
     *           can have up to 50 server errors per hour.
     *     @type \Google\Analytics\Data\V1beta\QuotaStatus $potentially_thresholded_requests_per_hour
     *           Analytics Properties can send up to 120 requests with potentially
     *           thresholded dimensions per hour. In a batch request, each report request
     *           is individually counted for this quota if the request contains potentially
     *           thresholded dimensions.
     *     @type \Google\Analytics\Data\V1beta\QuotaStatus $tokens_per_project_per_hour
     *           Analytics Properties can use up to 35% of their tokens per project per
     *           hour. This amounts to standard Analytics Properties can use up to 14,000
     *           tokens per project per hour, and Analytics 360 Properties can use 140,000
     *           tokens per project per hour. An API request consumes a single number of
     *           tokens, and that number is deducted from all of the hourly, daily, and per
     *           project hourly quotas.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Analytics\Data\V1Beta\Data::initOnce();
        parent::__construct($data);
    }
    /**
     * Standard Analytics Properties can use up to 200,000 tokens per day;
     * Analytics 360 Properties can use 2,000,000 tokens per day. Most requests
     * consume fewer than 10 tokens.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_day = 1;</code>
     * @return \Google\Analytics\Data\V1beta\QuotaStatus|null
     */
    public function getTokensPerDay()
    {
        return $this->tokens_per_day;
    }
    public function hasTokensPerDay()
    {
        return isset($this->tokens_per_day);
    }
    public function clearTokensPerDay()
    {
        unset($this->tokens_per_day);
    }
    /**
     * Standard Analytics Properties can use up to 200,000 tokens per day;
     * Analytics 360 Properties can use 2,000,000 tokens per day. Most requests
     * consume fewer than 10 tokens.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_day = 1;</code>
     * @param \Google\Analytics\Data\V1beta\QuotaStatus $var
     * @return $this
     */
    public function setTokensPerDay($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\QuotaStatus::class);
        $this->tokens_per_day = $var;
        return $this;
    }
    /**
     * Standard Analytics Properties can use up to 40,000 tokens per hour;
     * Analytics 360 Properties can use 400,000 tokens per hour. An API request
     * consumes a single number of tokens, and that number is deducted from all of
     * the hourly, daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_hour = 2;</code>
     * @return \Google\Analytics\Data\V1beta\QuotaStatus|null
     */
    public function getTokensPerHour()
    {
        return $this->tokens_per_hour;
    }
    public function hasTokensPerHour()
    {
        return isset($this->tokens_per_hour);
    }
    public function clearTokensPerHour()
    {
        unset($this->tokens_per_hour);
    }
    /**
     * Standard Analytics Properties can use up to 40,000 tokens per hour;
     * Analytics 360 Properties can use 400,000 tokens per hour. An API request
     * consumes a single number of tokens, and that number is deducted from all of
     * the hourly, daily, and per project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_hour = 2;</code>
     * @param \Google\Analytics\Data\V1beta\QuotaStatus $var
     * @return $this
     */
    public function setTokensPerHour($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\QuotaStatus::class);
        $this->tokens_per_hour = $var;
        return $this;
    }
    /**
     * Standard Analytics Properties can send up to 10 concurrent requests;
     * Analytics 360 Properties can use up to 50 concurrent requests.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus concurrent_requests = 3;</code>
     * @return \Google\Analytics\Data\V1beta\QuotaStatus|null
     */
    public function getConcurrentRequests()
    {
        return $this->concurrent_requests;
    }
    public function hasConcurrentRequests()
    {
        return isset($this->concurrent_requests);
    }
    public function clearConcurrentRequests()
    {
        unset($this->concurrent_requests);
    }
    /**
     * Standard Analytics Properties can send up to 10 concurrent requests;
     * Analytics 360 Properties can use up to 50 concurrent requests.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus concurrent_requests = 3;</code>
     * @param \Google\Analytics\Data\V1beta\QuotaStatus $var
     * @return $this
     */
    public function setConcurrentRequests($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\QuotaStatus::class);
        $this->concurrent_requests = $var;
        return $this;
    }
    /**
     * Standard Analytics Properties and cloud project pairs can have up to 10
     * server errors per hour; Analytics 360 Properties and cloud project pairs
     * can have up to 50 server errors per hour.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus server_errors_per_project_per_hour = 4;</code>
     * @return \Google\Analytics\Data\V1beta\QuotaStatus|null
     */
    public function getServerErrorsPerProjectPerHour()
    {
        return $this->server_errors_per_project_per_hour;
    }
    public function hasServerErrorsPerProjectPerHour()
    {
        return isset($this->server_errors_per_project_per_hour);
    }
    public function clearServerErrorsPerProjectPerHour()
    {
        unset($this->server_errors_per_project_per_hour);
    }
    /**
     * Standard Analytics Properties and cloud project pairs can have up to 10
     * server errors per hour; Analytics 360 Properties and cloud project pairs
     * can have up to 50 server errors per hour.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus server_errors_per_project_per_hour = 4;</code>
     * @param \Google\Analytics\Data\V1beta\QuotaStatus $var
     * @return $this
     */
    public function setServerErrorsPerProjectPerHour($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\QuotaStatus::class);
        $this->server_errors_per_project_per_hour = $var;
        return $this;
    }
    /**
     * Analytics Properties can send up to 120 requests with potentially
     * thresholded dimensions per hour. In a batch request, each report request
     * is individually counted for this quota if the request contains potentially
     * thresholded dimensions.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus potentially_thresholded_requests_per_hour = 5;</code>
     * @return \Google\Analytics\Data\V1beta\QuotaStatus|null
     */
    public function getPotentiallyThresholdedRequestsPerHour()
    {
        return $this->potentially_thresholded_requests_per_hour;
    }
    public function hasPotentiallyThresholdedRequestsPerHour()
    {
        return isset($this->potentially_thresholded_requests_per_hour);
    }
    public function clearPotentiallyThresholdedRequestsPerHour()
    {
        unset($this->potentially_thresholded_requests_per_hour);
    }
    /**
     * Analytics Properties can send up to 120 requests with potentially
     * thresholded dimensions per hour. In a batch request, each report request
     * is individually counted for this quota if the request contains potentially
     * thresholded dimensions.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus potentially_thresholded_requests_per_hour = 5;</code>
     * @param \Google\Analytics\Data\V1beta\QuotaStatus $var
     * @return $this
     */
    public function setPotentiallyThresholdedRequestsPerHour($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\QuotaStatus::class);
        $this->potentially_thresholded_requests_per_hour = $var;
        return $this;
    }
    /**
     * Analytics Properties can use up to 35% of their tokens per project per
     * hour. This amounts to standard Analytics Properties can use up to 14,000
     * tokens per project per hour, and Analytics 360 Properties can use 140,000
     * tokens per project per hour. An API request consumes a single number of
     * tokens, and that number is deducted from all of the hourly, daily, and per
     * project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_project_per_hour = 6;</code>
     * @return \Google\Analytics\Data\V1beta\QuotaStatus|null
     */
    public function getTokensPerProjectPerHour()
    {
        return $this->tokens_per_project_per_hour;
    }
    public function hasTokensPerProjectPerHour()
    {
        return isset($this->tokens_per_project_per_hour);
    }
    public function clearTokensPerProjectPerHour()
    {
        unset($this->tokens_per_project_per_hour);
    }
    /**
     * Analytics Properties can use up to 35% of their tokens per project per
     * hour. This amounts to standard Analytics Properties can use up to 14,000
     * tokens per project per hour, and Analytics 360 Properties can use 140,000
     * tokens per project per hour. An API request consumes a single number of
     * tokens, and that number is deducted from all of the hourly, daily, and per
     * project hourly quotas.
     *
     * Generated from protobuf field <code>.google.analytics.data.v1beta.QuotaStatus tokens_per_project_per_hour = 6;</code>
     * @param \Google\Analytics\Data\V1beta\QuotaStatus $var
     * @return $this
     */
    public function setTokensPerProjectPerHour($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Analytics\Data\V1beta\QuotaStatus::class);
        $this->tokens_per_project_per_hour = $var;
        return $this;
    }
}
