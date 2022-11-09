<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: apache/rocketmq/v2/service.proto

namespace Apache\Rocketmq\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>apache.rocketmq.v2.SendMessageResponse</code>
 */
class SendMessageResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Some implementation may have partial failure issues. Client SDK developers are expected to inspect
     * each entry for best certainty.
     *
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.SendResultEntry entries = 2;</code>
     */
    private $entries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Apache\Rocketmq\V2\Status $status
     *     @type array<\Apache\Rocketmq\V2\SendResultEntry>|\Google\Protobuf\Internal\RepeatedField $entries
     *           Some implementation may have partial failure issues. Client SDK developers are expected to inspect
     *           each entry for best certainty.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Apache\Rocketmq\V2\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 1;</code>
     * @return \Apache\Rocketmq\V2\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.apache.rocketmq.v2.Status status = 1;</code>
     * @param \Apache\Rocketmq\V2\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Apache\Rocketmq\V2\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Some implementation may have partial failure issues. Client SDK developers are expected to inspect
     * each entry for best certainty.
     *
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.SendResultEntry entries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * Some implementation may have partial failure issues. Client SDK developers are expected to inspect
     * each entry for best certainty.
     *
     * Generated from protobuf field <code>repeated .apache.rocketmq.v2.SendResultEntry entries = 2;</code>
     * @param array<\Apache\Rocketmq\V2\SendResultEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Apache\Rocketmq\V2\SendResultEntry::class);
        $this->entries = $arr;

        return $this;
    }

}

