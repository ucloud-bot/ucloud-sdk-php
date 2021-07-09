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
namespace UCloud\UEC\Apis;

use UCloud\Core\Request\Request;

class ModifyUEcBandwidthRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ModifyUEcBandwidth"]);
        $this->markRequired("NodeId");
        $this->markRequired("NetLimit");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * NodeId: 节点Id
     *
     * @return string|null
     */
    public function getNodeId(): string
    {
        return $this->get("NodeId");
    }

    /**
     * NodeId: 节点Id
     *
     * @param string $nodeId
     */
    public function setNodeId(string $nodeId)
    {
        $this->set("NodeId", $nodeId);
    }

    /**
     * NetLimit: 节点带宽限制，单位Mbs
     *
     * @return string|null
     */
    public function getNetLimit(): string
    {
        return $this->get("NetLimit");
    }

    /**
     * NetLimit: 节点带宽限制，单位Mbs
     *
     * @param string $netLimit
     */
    public function setNetLimit(string $netLimit)
    {
        $this->set("NetLimit", $netLimit);
    }
}
