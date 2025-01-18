<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/policy.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Cloud\Iam\V1;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Specifies the audit configuration for a service.
 * The configuration determines which permission types are logged, and what
 * identities, if any, are exempted from logging.
 * An AuditConfig must have one or more AuditLogConfigs.
 * If there are AuditConfigs for both `allServices` and a specific service,
 * the union of the two AuditConfigs is used for that service: the log_types
 * specified in each AuditConfig are enabled, and the exempted_members in each
 * AuditLogConfig are exempted.
 * Example Policy with multiple AuditConfigs:
 *     {
 *       "audit_configs": [
 *         {
 *           "service": "allServices",
 *           "audit_log_configs": [
 *             {
 *               "log_type": "DATA_READ",
 *               "exempted_members": [
 *                 "user:jose&#64;example.com"
 *               ]
 *             },
 *             {
 *               "log_type": "DATA_WRITE"
 *             },
 *             {
 *               "log_type": "ADMIN_READ"
 *             }
 *           ]
 *         },
 *         {
 *           "service": "sampleservice.googleapis.com",
 *           "audit_log_configs": [
 *             {
 *               "log_type": "DATA_READ"
 *             },
 *             {
 *               "log_type": "DATA_WRITE",
 *               "exempted_members": [
 *                 "user:aliya&#64;example.com"
 *               ]
 *             }
 *           ]
 *         }
 *       ]
 *     }
 * For sampleservice, this policy enables DATA_READ, DATA_WRITE and ADMIN_READ
 * logging. It also exempts `jose&#64;example.com` from DATA_READ logging, and
 * `aliya&#64;example.com` from DATA_WRITE logging.
 *
 * Generated from protobuf message <code>google.iam.v1.AuditConfig</code>
 */
class AuditConfig extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Specifies a service that will be enabled for audit logging.
     * For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     * `allServices` is a special value that covers all services.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     */
    protected $service = '';
    /**
     * The configuration for logging of each type of permission.
     *
     * Generated from protobuf field <code>repeated .google.iam.v1.AuditLogConfig audit_log_configs = 3;</code>
     */
    private $audit_log_configs;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           Specifies a service that will be enabled for audit logging.
     *           For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     *           `allServices` is a special value that covers all services.
     *     @type array<\Google\Cloud\Iam\V1\AuditLogConfig>|\Google\Protobuf\Internal\RepeatedField $audit_log_configs
     *           The configuration for logging of each type of permission.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Iam\V1\Policy::initOnce();
        parent::__construct($data);
    }
    /**
     * Specifies a service that will be enabled for audit logging.
     * For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     * `allServices` is a special value that covers all services.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * Specifies a service that will be enabled for audit logging.
     * For example, `storage.googleapis.com`, `cloudsql.googleapis.com`.
     * `allServices` is a special value that covers all services.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;
        return $this;
    }
    /**
     * The configuration for logging of each type of permission.
     *
     * Generated from protobuf field <code>repeated .google.iam.v1.AuditLogConfig audit_log_configs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuditLogConfigs()
    {
        return $this->audit_log_configs;
    }
    /**
     * The configuration for logging of each type of permission.
     *
     * Generated from protobuf field <code>repeated .google.iam.v1.AuditLogConfig audit_log_configs = 3;</code>
     * @param array<\Google\Cloud\Iam\V1\AuditLogConfig>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuditLogConfigs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Cloud\Iam\V1\AuditLogConfig::class);
        $this->audit_log_configs = $arr;
        return $this;
    }
}