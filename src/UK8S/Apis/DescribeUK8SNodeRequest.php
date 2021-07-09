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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Request\Request;

class DescribeUK8SNodeRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUK8SNode"]);
        $this->markRequired("Region");
        $this->markRequired("ClusterId");
        $this->markRequired("Name");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
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
     * ClusterId: UK8S 集群 Id
     *
     * @return string|null
     */
    public function getClusterId(): string
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: UK8S 集群 Id
     *
     * @param string $clusterId
     */
    public function setClusterId(string $clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * Name: K8S 节点IP或者节点ID
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: K8S 节点IP或者节点ID
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }
}
