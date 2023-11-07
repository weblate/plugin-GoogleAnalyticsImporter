<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/type.proto
namespace Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf;

use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\RepeatedField;
use Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBUtil;
/**
 * A protocol buffer message type.
 *
 * Generated from protobuf message <code>google.protobuf.Type</code>
 */
class Type extends \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\Message
{
    /**
     * The fully qualified message name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * The list of fields.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Field fields = 2;</code>
     */
    private $fields;
    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     */
    private $oneofs;
    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     */
    private $options;
    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     */
    protected $source_context = null;
    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 6;</code>
     */
    protected $syntax = 0;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The fully qualified message name.
     *     @type array<\Google\Protobuf\Field>|\Google\Protobuf\Internal\RepeatedField $fields
     *           The list of fields.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $oneofs
     *           The list of types appearing in `oneof` definitions in this type.
     *     @type array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $options
     *           The protocol buffer options.
     *     @type \Google\Protobuf\SourceContext $source_context
     *           The source context.
     *     @type int $syntax
     *           The source syntax.
     * }
     */
    public function __construct($data = NULL)
    {
        \Matomo\Dependencies\GoogleAnalyticsImporter\GPBMetadata\Google\Protobuf\Type::initOnce();
        parent::__construct($data);
    }
    /**
     * The fully qualified message name.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * The fully qualified message name.
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
     * The list of fields.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Field fields = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }
    /**
     * The list of fields.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Field fields = 2;</code>
     * @param array<\Google\Protobuf\Field>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Field::class);
        $this->fields = $arr;
        return $this;
    }
    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOneofs()
    {
        return $this->oneofs;
    }
    /**
     * The list of types appearing in `oneof` definitions in this type.
     *
     * Generated from protobuf field <code>repeated string oneofs = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOneofs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::STRING);
        $this->oneofs = $arr;
        return $this;
    }
    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOptions()
    {
        return $this->options;
    }
    /**
     * The protocol buffer options.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Option options = 4;</code>
     * @param array<\Google\Protobuf\Option>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Internal\GPBType::MESSAGE, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Option::class);
        $this->options = $arr;
        return $this;
    }
    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     * @return \Google\Protobuf\SourceContext|null
     */
    public function getSourceContext()
    {
        return $this->source_context;
    }
    public function hasSourceContext()
    {
        return isset($this->source_context);
    }
    public function clearSourceContext()
    {
        unset($this->source_context);
    }
    /**
     * The source context.
     *
     * Generated from protobuf field <code>.google.protobuf.SourceContext source_context = 5;</code>
     * @param \Google\Protobuf\SourceContext $var
     * @return $this
     */
    public function setSourceContext($var)
    {
        GPBUtil::checkMessage($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\SourceContext::class);
        $this->source_context = $var;
        return $this;
    }
    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 6;</code>
     * @return int
     */
    public function getSyntax()
    {
        return $this->syntax;
    }
    /**
     * The source syntax.
     *
     * Generated from protobuf field <code>.google.protobuf.Syntax syntax = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSyntax($var)
    {
        GPBUtil::checkEnum($var, \Matomo\Dependencies\GoogleAnalyticsImporter\Google\Protobuf\Syntax::class);
        $this->syntax = $var;
        return $this;
    }
}
