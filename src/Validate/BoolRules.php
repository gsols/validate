<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: validate/validate.proto

namespace Validate;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * BoolRules describes the constraints applied to `bool` values
 *
 * Generated from protobuf message <code>validate.BoolRules</code>
 */
class BoolRules extends \Google\Protobuf\Internal\Message
{
    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional bool const = 1 [json_name = "const"];</code>
     */
    protected $const = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $const
     *           Const specifies that this field must be exactly the specified value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Validate\Validate::initOnce();
        parent::__construct($data);
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional bool const = 1 [json_name = "const"];</code>
     * @return bool
     */
    public function getConst()
    {
        return isset($this->const) ? $this->const : false;
    }

    public function hasConst()
    {
        return isset($this->const);
    }

    public function clearConst()
    {
        unset($this->const);
    }

    /**
     * Const specifies that this field must be exactly the specified value
     *
     * Generated from protobuf field <code>optional bool const = 1 [json_name = "const"];</code>
     * @param bool $var
     * @return $this
     */
    public function setConst($var)
    {
        GPBUtil::checkBool($var);
        $this->const = $var;

        return $this;
    }

}

