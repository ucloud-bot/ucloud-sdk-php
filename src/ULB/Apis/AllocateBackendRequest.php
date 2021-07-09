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
namespace UCloud\ULB\Apis;

use UCloud\Core\Request\Request;

class AllocateBackendRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AllocateBackend"]);
        $this->markRequired("Region");
        $this->markRequired("ProjectId");
        $this->markRequired("ULBId");
        $this->markRequired("VServerId");
        $this->markRequired("ResourceType");
        $this->markRequired("ResourceId");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
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
     * ULBId: 负载均衡实例的ID
     *
     * @return string|null
     */
    public function getULBId(): string
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: 负载均衡实例的ID
     *
     * @param string $ulbId
     */
    public function setULBId(string $ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * VServerId: VServer实例的ID
     *
     * @return string|null
     */
    public function getVServerId(): string
    {
        return $this->get("VServerId");
    }

    /**
     * VServerId: VServer实例的ID
     *
     * @param string $vServerId
     */
    public function setVServerId(string $vServerId)
    {
        $this->set("VServerId", $vServerId);
    }

    /**
     * ResourceType: 所添加的后端资源的类型，枚举值：UHost -> 云主机；UNI -> 虚拟网卡；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；默认值为UHost。报文转发模式不支持UDocker、UHybrid、CUBE
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 所添加的后端资源的类型，枚举值：UHost -> 云主机；UNI -> 虚拟网卡；UPM -> 物理云主机； UDHost -> 私有专区主机；UDocker -> 容器；UHybrid->混合云主机；CUBE->Cube；默认值为UHost。报文转发模式不支持UDocker、UHybrid、CUBE
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ResourceId: 所添加的后端资源的资源ID
     *
     * @return string|null
     */
    public function getResourceId(): string
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 所添加的后端资源的资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * ResourceIP: 所添加的后端服务器的资源实例IP，当ResourceType 为 UHybrid 时有效，且必填
     *
     * @return string|null
     */
    public function getResourceIP(): string
    {
        return $this->get("ResourceIP");
    }

    /**
     * ResourceIP: 所添加的后端服务器的资源实例IP，当ResourceType 为 UHybrid 时有效，且必填
     *
     * @param string $resourceIP
     */
    public function setResourceIP(string $resourceIP)
    {
        $this->set("ResourceIP", $resourceIP);
    }

    /**
     * VPCId: 所添加的后端服务器所在的vpc，当ResourceType 为 UHybrid 时有效，且必填
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所添加的后端服务器所在的vpc，当ResourceType 为 UHybrid 时有效，且必填
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所添加的后端服务器所在的子网，当ResourceType 为 UHybrid 时有效，且必填
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所添加的后端服务器所在的子网，当ResourceType 为 UHybrid 时有效，且必填
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * Port: 所添加的后端资源服务端口，取值范围[1-65535]，默认80
     *
     * @return integer|null
     */
    public function getPort(): int
    {
        return $this->get("Port");
    }

    /**
     * Port: 所添加的后端资源服务端口，取值范围[1-65535]，默认80
     *
     * @param int $port
     */
    public function setPort(int $port)
    {
        $this->set("Port", $port);
    }

    /**
     * Weight: 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *
     * @return integer|null
     */
    public function getWeight(): int
    {
        return $this->get("Weight");
    }

    /**
     * Weight: 所添加的后端RS权重（在加权轮询算法下有效），取值范围[0-100]，默认为1
     *
     * @param int $weight
     */
    public function setWeight(int $weight)
    {
        $this->set("Weight", $weight);
    }

    /**
     * Enabled: 后端实例状态开关，枚举值： 1：启用； 0：禁用 默认为启用
     *
     * @return integer|null
     */
    public function getEnabled(): int
    {
        return $this->get("Enabled");
    }

    /**
     * Enabled: 后端实例状态开关，枚举值： 1：启用； 0：禁用 默认为启用
     *
     * @param int $enabled
     */
    public function setEnabled(int $enabled)
    {
        $this->set("Enabled", $enabled);
    }

    /**
     * IsBackup: rs是否为backup，默认为00：普通rs1：backup的rs
     *
     * @return integer|null
     */
    public function getIsBackup(): int
    {
        return $this->get("IsBackup");
    }

    /**
     * IsBackup: rs是否为backup，默认为00：普通rs1：backup的rs
     *
     * @param int $isBackup
     */
    public function setIsBackup(int $isBackup)
    {
        $this->set("IsBackup", $isBackup);
    }
}
