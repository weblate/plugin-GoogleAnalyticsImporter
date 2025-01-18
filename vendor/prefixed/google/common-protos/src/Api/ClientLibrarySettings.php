<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/client.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * Details about how and where to publish client libraries.
 *
 * Generated from protobuf message <code>google.api.ClientLibrarySettings</code>
 */
class ClientLibrarySettings extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * Version of the API to apply these settings to. This is the full protobuf
     * package for the API, ending in the version element.
     * Examples: "google.cloud.speech.v1" and "google.spanner.admin.database.v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * Launch stage of this version of the API.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 2;</code>
     */
    protected $launch_stage = 0;
    /**
     * When using transport=rest, the client request will encode enums as
     * numbers rather than strings.
     *
     * Generated from protobuf field <code>bool rest_numeric_enums = 3;</code>
     */
    protected $rest_numeric_enums = \false;
    /**
     * Settings for legacy Java features, supported in the Service YAML.
     *
     * Generated from protobuf field <code>.google.api.JavaSettings java_settings = 21;</code>
     */
    protected $java_settings = null;
    /**
     * Settings for C++ client libraries.
     *
     * Generated from protobuf field <code>.google.api.CppSettings cpp_settings = 22;</code>
     */
    protected $cpp_settings = null;
    /**
     * Settings for PHP client libraries.
     *
     * Generated from protobuf field <code>.google.api.PhpSettings php_settings = 23;</code>
     */
    protected $php_settings = null;
    /**
     * Settings for Python client libraries.
     *
     * Generated from protobuf field <code>.google.api.PythonSettings python_settings = 24;</code>
     */
    protected $python_settings = null;
    /**
     * Settings for Node client libraries.
     *
     * Generated from protobuf field <code>.google.api.NodeSettings node_settings = 25;</code>
     */
    protected $node_settings = null;
    /**
     * Settings for .NET client libraries.
     *
     * Generated from protobuf field <code>.google.api.DotnetSettings dotnet_settings = 26;</code>
     */
    protected $dotnet_settings = null;
    /**
     * Settings for Ruby client libraries.
     *
     * Generated from protobuf field <code>.google.api.RubySettings ruby_settings = 27;</code>
     */
    protected $ruby_settings = null;
    /**
     * Settings for Go client libraries.
     *
     * Generated from protobuf field <code>.google.api.GoSettings go_settings = 28;</code>
     */
    protected $go_settings = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           Version of the API to apply these settings to. This is the full protobuf
     *           package for the API, ending in the version element.
     *           Examples: "google.cloud.speech.v1" and "google.spanner.admin.database.v1".
     *     @type int $launch_stage
     *           Launch stage of this version of the API.
     *     @type bool $rest_numeric_enums
     *           When using transport=rest, the client request will encode enums as
     *           numbers rather than strings.
     *     @type \Google\Api\JavaSettings $java_settings
     *           Settings for legacy Java features, supported in the Service YAML.
     *     @type \Google\Api\CppSettings $cpp_settings
     *           Settings for C++ client libraries.
     *     @type \Google\Api\PhpSettings $php_settings
     *           Settings for PHP client libraries.
     *     @type \Google\Api\PythonSettings $python_settings
     *           Settings for Python client libraries.
     *     @type \Google\Api\NodeSettings $node_settings
     *           Settings for Node client libraries.
     *     @type \Google\Api\DotnetSettings $dotnet_settings
     *           Settings for .NET client libraries.
     *     @type \Google\Api\RubySettings $ruby_settings
     *           Settings for Ruby client libraries.
     *     @type \Google\Api\GoSettings $go_settings
     *           Settings for Go client libraries.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Api\Client::initOnce();
        parent::__construct($data);
    }
    /**
     * Version of the API to apply these settings to. This is the full protobuf
     * package for the API, ending in the version element.
     * Examples: "google.cloud.speech.v1" and "google.spanner.admin.database.v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * Version of the API to apply these settings to. This is the full protobuf
     * package for the API, ending in the version element.
     * Examples: "google.cloud.speech.v1" and "google.spanner.admin.database.v1".
     *
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;
        return $this;
    }
    /**
     * Launch stage of this version of the API.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 2;</code>
     * @return int
     */
    public function getLaunchStage()
    {
        return $this->launch_stage;
    }
    /**
     * Launch stage of this version of the API.
     *
     * Generated from protobuf field <code>.google.api.LaunchStage launch_stage = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLaunchStage($var)
    {
        GPBUtil::checkEnum($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\LaunchStage::class);
        $this->launch_stage = $var;
        return $this;
    }
    /**
     * When using transport=rest, the client request will encode enums as
     * numbers rather than strings.
     *
     * Generated from protobuf field <code>bool rest_numeric_enums = 3;</code>
     * @return bool
     */
    public function getRestNumericEnums()
    {
        return $this->rest_numeric_enums;
    }
    /**
     * When using transport=rest, the client request will encode enums as
     * numbers rather than strings.
     *
     * Generated from protobuf field <code>bool rest_numeric_enums = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setRestNumericEnums($var)
    {
        GPBUtil::checkBool($var);
        $this->rest_numeric_enums = $var;
        return $this;
    }
    /**
     * Settings for legacy Java features, supported in the Service YAML.
     *
     * Generated from protobuf field <code>.google.api.JavaSettings java_settings = 21;</code>
     * @return \Google\Api\JavaSettings|null
     */
    public function getJavaSettings()
    {
        return $this->java_settings;
    }
    public function hasJavaSettings()
    {
        return isset($this->java_settings);
    }
    public function clearJavaSettings()
    {
        unset($this->java_settings);
    }
    /**
     * Settings for legacy Java features, supported in the Service YAML.
     *
     * Generated from protobuf field <code>.google.api.JavaSettings java_settings = 21;</code>
     * @param \Google\Api\JavaSettings $var
     * @return $this
     */
    public function setJavaSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\JavaSettings::class);
        $this->java_settings = $var;
        return $this;
    }
    /**
     * Settings for C++ client libraries.
     *
     * Generated from protobuf field <code>.google.api.CppSettings cpp_settings = 22;</code>
     * @return \Google\Api\CppSettings|null
     */
    public function getCppSettings()
    {
        return $this->cpp_settings;
    }
    public function hasCppSettings()
    {
        return isset($this->cpp_settings);
    }
    public function clearCppSettings()
    {
        unset($this->cpp_settings);
    }
    /**
     * Settings for C++ client libraries.
     *
     * Generated from protobuf field <code>.google.api.CppSettings cpp_settings = 22;</code>
     * @param \Google\Api\CppSettings $var
     * @return $this
     */
    public function setCppSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\CppSettings::class);
        $this->cpp_settings = $var;
        return $this;
    }
    /**
     * Settings for PHP client libraries.
     *
     * Generated from protobuf field <code>.google.api.PhpSettings php_settings = 23;</code>
     * @return \Google\Api\PhpSettings|null
     */
    public function getPhpSettings()
    {
        return $this->php_settings;
    }
    public function hasPhpSettings()
    {
        return isset($this->php_settings);
    }
    public function clearPhpSettings()
    {
        unset($this->php_settings);
    }
    /**
     * Settings for PHP client libraries.
     *
     * Generated from protobuf field <code>.google.api.PhpSettings php_settings = 23;</code>
     * @param \Google\Api\PhpSettings $var
     * @return $this
     */
    public function setPhpSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\PhpSettings::class);
        $this->php_settings = $var;
        return $this;
    }
    /**
     * Settings for Python client libraries.
     *
     * Generated from protobuf field <code>.google.api.PythonSettings python_settings = 24;</code>
     * @return \Google\Api\PythonSettings|null
     */
    public function getPythonSettings()
    {
        return $this->python_settings;
    }
    public function hasPythonSettings()
    {
        return isset($this->python_settings);
    }
    public function clearPythonSettings()
    {
        unset($this->python_settings);
    }
    /**
     * Settings for Python client libraries.
     *
     * Generated from protobuf field <code>.google.api.PythonSettings python_settings = 24;</code>
     * @param \Google\Api\PythonSettings $var
     * @return $this
     */
    public function setPythonSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\PythonSettings::class);
        $this->python_settings = $var;
        return $this;
    }
    /**
     * Settings for Node client libraries.
     *
     * Generated from protobuf field <code>.google.api.NodeSettings node_settings = 25;</code>
     * @return \Google\Api\NodeSettings|null
     */
    public function getNodeSettings()
    {
        return $this->node_settings;
    }
    public function hasNodeSettings()
    {
        return isset($this->node_settings);
    }
    public function clearNodeSettings()
    {
        unset($this->node_settings);
    }
    /**
     * Settings for Node client libraries.
     *
     * Generated from protobuf field <code>.google.api.NodeSettings node_settings = 25;</code>
     * @param \Google\Api\NodeSettings $var
     * @return $this
     */
    public function setNodeSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\NodeSettings::class);
        $this->node_settings = $var;
        return $this;
    }
    /**
     * Settings for .NET client libraries.
     *
     * Generated from protobuf field <code>.google.api.DotnetSettings dotnet_settings = 26;</code>
     * @return \Google\Api\DotnetSettings|null
     */
    public function getDotnetSettings()
    {
        return $this->dotnet_settings;
    }
    public function hasDotnetSettings()
    {
        return isset($this->dotnet_settings);
    }
    public function clearDotnetSettings()
    {
        unset($this->dotnet_settings);
    }
    /**
     * Settings for .NET client libraries.
     *
     * Generated from protobuf field <code>.google.api.DotnetSettings dotnet_settings = 26;</code>
     * @param \Google\Api\DotnetSettings $var
     * @return $this
     */
    public function setDotnetSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\DotnetSettings::class);
        $this->dotnet_settings = $var;
        return $this;
    }
    /**
     * Settings for Ruby client libraries.
     *
     * Generated from protobuf field <code>.google.api.RubySettings ruby_settings = 27;</code>
     * @return \Google\Api\RubySettings|null
     */
    public function getRubySettings()
    {
        return $this->ruby_settings;
    }
    public function hasRubySettings()
    {
        return isset($this->ruby_settings);
    }
    public function clearRubySettings()
    {
        unset($this->ruby_settings);
    }
    /**
     * Settings for Ruby client libraries.
     *
     * Generated from protobuf field <code>.google.api.RubySettings ruby_settings = 27;</code>
     * @param \Google\Api\RubySettings $var
     * @return $this
     */
    public function setRubySettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\RubySettings::class);
        $this->ruby_settings = $var;
        return $this;
    }
    /**
     * Settings for Go client libraries.
     *
     * Generated from protobuf field <code>.google.api.GoSettings go_settings = 28;</code>
     * @return \Google\Api\GoSettings|null
     */
    public function getGoSettings()
    {
        return $this->go_settings;
    }
    public function hasGoSettings()
    {
        return isset($this->go_settings);
    }
    public function clearGoSettings()
    {
        unset($this->go_settings);
    }
    /**
     * Settings for Go client libraries.
     *
     * Generated from protobuf field <code>.google.api.GoSettings go_settings = 28;</code>
     * @param \Google\Api\GoSettings $var
     * @return $this
     */
    public function setGoSettings($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Api\GoSettings::class);
        $this->go_settings = $var;
        return $this;
    }
}