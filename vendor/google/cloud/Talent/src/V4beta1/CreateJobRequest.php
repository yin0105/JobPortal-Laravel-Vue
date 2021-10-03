<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/job_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input only.
 * Create job request.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.CreateJobRequest</code>
 */
class CreateJobRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/api-test-project/tenant/foo".
     * Tenant id is optional and a default tenant is created if unspecified, for
     * example, "projects/api-test-project".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Required.
     * The Job to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Job job = 2;</code>
     */
    private $job = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required.
     *           The resource name of the tenant under which the job is created.
     *           The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     *           "projects/api-test-project/tenant/foo".
     *           Tenant id is optional and a default tenant is created if unspecified, for
     *           example, "projects/api-test-project".
     *     @type \Google\Cloud\Talent\V4beta1\Job $job
     *           Required.
     *           The Job to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\JobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/api-test-project/tenant/foo".
     * Tenant id is optional and a default tenant is created if unspecified, for
     * example, "projects/api-test-project".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required.
     * The resource name of the tenant under which the job is created.
     * The format is "projects/{project_id}/tenants/{tenant_id}", for example,
     * "projects/api-test-project/tenant/foo".
     * Tenant id is optional and a default tenant is created if unspecified, for
     * example, "projects/api-test-project".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required.
     * The Job to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Job job = 2;</code>
     * @return \Google\Cloud\Talent\V4beta1\Job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Required.
     * The Job to be created.
     *
     * Generated from protobuf field <code>.google.cloud.talent.v4beta1.Job job = 2;</code>
     * @param \Google\Cloud\Talent\V4beta1\Job $var
     * @return $this
     */
    public function setJob($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Talent\V4beta1\Job::class);
        $this->job = $var;

        return $this;
    }

}

