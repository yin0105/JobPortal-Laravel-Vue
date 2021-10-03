<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video segment level annotation results for label detection.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.LabelSegment</code>
 */
class LabelSegment extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segment where a label was detected.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     */
    private $segment = null;
    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     */
    private $confidence = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\VideoIntelligence\V1\VideoSegment $segment
     *           Video segment where a label was detected.
     *     @type float $confidence
     *           Confidence that the label is accurate. Range: [0, 1].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct($data);
    }

    /**
     * Video segment where a label was detected.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\VideoSegment
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Video segment where a label was detected.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.VideoSegment segment = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment $var
     * @return $this
     */
    public function setSegment($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segment = $var;

        return $this;
    }

    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @return float
     */
    public function getConfidence()
    {
        return $this->confidence;
    }

    /**
     * Confidence that the label is accurate. Range: [0, 1].
     *
     * Generated from protobuf field <code>float confidence = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setConfidence($var)
    {
        GPBUtil::checkFloat($var);
        $this->confidence = $var;

        return $this;
    }

}

