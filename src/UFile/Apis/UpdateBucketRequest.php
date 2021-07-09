<?php
/**
 * Copyright 2021 UCloud Technology Co., Ltd.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *  http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace UCloud\UFile\Apis;

use UCloud\Core\Request\Request;

class UpdateBucketRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateBucket"]);
        $this->markRequired("BucketName");
        $this->markRequired("Type");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * BucketName: 待修改Bucket的名称
     *
     * @return string|null
     */
    public function getBucketName(): string
    {
        return $this->get("BucketName");
    }

    /**
     * BucketName: 待修改Bucket的名称
     *
     * @param string $bucketName
     */
    public function setBucketName(string $bucketName)
    {
        $this->set("BucketName", $bucketName);
    }

    /**
     * Type: Bucket访问类型;public或private
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: Bucket访问类型;public或private
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }
}
