<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/client.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Describes the generator configuration for a method.
 *
 * Generated from protobuf message <code>google.api.MethodSettings</code>
 */
class MethodSettings extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The fully qualified name of the method, for which the options below apply.
     * This is used to find the method to apply the options.
     * Example:
     *    publishing:
     *      method_settings:
     *      - selector: google.storage.control.v2.StorageControl.CreateFolder
     *        # method settings for CreateFolder...
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     */
    protected $selector = '';
    /**
     * Describes settings to use for long-running operations when generating
     * API methods for RPCs. Complements RPCs that use the annotations in
     * google/longrunning/operations.proto.
     * Example of a YAML configuration::
     *    publishing:
     *      method_settings:
     *      - selector: google.cloud.speech.v2.Speech.BatchRecognize
     *        long_running:
     *          initial_poll_delay: 60s # 1 minute
     *          poll_delay_multiplier: 1.5
     *          max_poll_delay: 360s # 6 minutes
     *          total_poll_timeout: 54000s # 90 minutes
     *
     * Generated from protobuf field <code>.google.api.MethodSettings.LongRunning long_running = 2;</code>
     */
    protected $long_running = null;
    /**
     * List of top-level fields of the request message, that should be
     * automatically populated by the client libraries based on their
     * (google.api.field_info).format. Currently supported format: UUID4.
     * Example of a YAML configuration:
     *    publishing:
     *      method_settings:
     *      - selector: google.example.v1.ExampleService.CreateExample
     *        auto_populated_fields:
     *        - request_id
     *
     * Generated from protobuf field <code>repeated string auto_populated_fields = 3;</code>
     */
    private $auto_populated_fields;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $selector
     *           The fully qualified name of the method, for which the options below apply.
     *           This is used to find the method to apply the options.
     *           Example:
     *              publishing:
     *                method_settings:
     *                - selector: google.storage.control.v2.StorageControl.CreateFolder
     *                  # method settings for CreateFolder...
     *     @type \Google\Api\MethodSettings\LongRunning $long_running
     *           Describes settings to use for long-running operations when generating
     *           API methods for RPCs. Complements RPCs that use the annotations in
     *           google/longrunning/operations.proto.
     *           Example of a YAML configuration::
     *              publishing:
     *                method_settings:
     *                - selector: google.cloud.speech.v2.Speech.BatchRecognize
     *                  long_running:
     *                    initial_poll_delay: 60s # 1 minute
     *                    poll_delay_multiplier: 1.5
     *                    max_poll_delay: 360s # 6 minutes
     *                    total_poll_timeout: 54000s # 90 minutes
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $auto_populated_fields
     *           List of top-level fields of the request message, that should be
     *           automatically populated by the client libraries based on their
     *           (google.api.field_info).format. Currently supported format: UUID4.
     *           Example of a YAML configuration:
     *              publishing:
     *                method_settings:
     *                - selector: google.example.v1.ExampleService.CreateExample
     *                  auto_populated_fields:
     *                  - request_id
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Client::initOnce();
        parent::__construct($data);
    }
    /**
     * The fully qualified name of the method, for which the options below apply.
     * This is used to find the method to apply the options.
     * Example:
     *    publishing:
     *      method_settings:
     *      - selector: google.storage.control.v2.StorageControl.CreateFolder
     *        # method settings for CreateFolder...
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @return string
     */
    public function getSelector()
    {
        return $this->selector;
    }
    /**
     * The fully qualified name of the method, for which the options below apply.
     * This is used to find the method to apply the options.
     * Example:
     *    publishing:
     *      method_settings:
     *      - selector: google.storage.control.v2.StorageControl.CreateFolder
     *        # method settings for CreateFolder...
     *
     * Generated from protobuf field <code>string selector = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSelector($var)
    {
        GPBUtil::checkString($var, True);
        $this->selector = $var;
        return $this;
    }
    /**
     * Describes settings to use for long-running operations when generating
     * API methods for RPCs. Complements RPCs that use the annotations in
     * google/longrunning/operations.proto.
     * Example of a YAML configuration::
     *    publishing:
     *      method_settings:
     *      - selector: google.cloud.speech.v2.Speech.BatchRecognize
     *        long_running:
     *          initial_poll_delay: 60s # 1 minute
     *          poll_delay_multiplier: 1.5
     *          max_poll_delay: 360s # 6 minutes
     *          total_poll_timeout: 54000s # 90 minutes
     *
     * Generated from protobuf field <code>.google.api.MethodSettings.LongRunning long_running = 2;</code>
     * @return \Google\Api\MethodSettings\LongRunning|null
     */
    public function getLongRunning()
    {
        return $this->long_running;
    }
    public function hasLongRunning()
    {
        return isset($this->long_running);
    }
    public function clearLongRunning()
    {
        unset($this->long_running);
    }
    /**
     * Describes settings to use for long-running operations when generating
     * API methods for RPCs. Complements RPCs that use the annotations in
     * google/longrunning/operations.proto.
     * Example of a YAML configuration::
     *    publishing:
     *      method_settings:
     *      - selector: google.cloud.speech.v2.Speech.BatchRecognize
     *        long_running:
     *          initial_poll_delay: 60s # 1 minute
     *          poll_delay_multiplier: 1.5
     *          max_poll_delay: 360s # 6 minutes
     *          total_poll_timeout: 54000s # 90 minutes
     *
     * Generated from protobuf field <code>.google.api.MethodSettings.LongRunning long_running = 2;</code>
     * @param \Google\Api\MethodSettings\LongRunning $var
     * @return $this
     */
    public function setLongRunning($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\MethodSettings\LongRunning::class);
        $this->long_running = $var;
        return $this;
    }
    /**
     * List of top-level fields of the request message, that should be
     * automatically populated by the client libraries based on their
     * (google.api.field_info).format. Currently supported format: UUID4.
     * Example of a YAML configuration:
     *    publishing:
     *      method_settings:
     *      - selector: google.example.v1.ExampleService.CreateExample
     *        auto_populated_fields:
     *        - request_id
     *
     * Generated from protobuf field <code>repeated string auto_populated_fields = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAutoPopulatedFields()
    {
        return $this->auto_populated_fields;
    }
    /**
     * List of top-level fields of the request message, that should be
     * automatically populated by the client libraries based on their
     * (google.api.field_info).format. Currently supported format: UUID4.
     * Example of a YAML configuration:
     *    publishing:
     *      method_settings:
     *      - selector: google.example.v1.ExampleService.CreateExample
     *        auto_populated_fields:
     *        - request_id
     *
     * Generated from protobuf field <code>repeated string auto_populated_fields = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAutoPopulatedFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::STRING);
        $this->auto_populated_fields = $arr;
        return $this;
    }
}
