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

class DescribeUEcFirewallRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUEcFirewall"]);
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
     * FirewallId: 防火墙ID，默认为返回所有防火墙
     *
     * @return string|null
     */
    public function getFirewallId(): string
    {
        return $this->get("FirewallId");
    }

    /**
     * FirewallId: 防火墙ID，默认为返回所有防火墙
     *
     * @param string $firewallId
     */
    public function setFirewallId(string $firewallId)
    {
        $this->set("FirewallId", $firewallId);
    }

    /**
     * ResourceId: 绑定防火墙组的虚拟机资源ID
     *
     * @return string|null
     */
    public function getResourceId(): string
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 绑定防火墙组的虚拟机资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Limit: 返回数据长度，默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度，默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 列表起始位置偏移量，默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }
}
