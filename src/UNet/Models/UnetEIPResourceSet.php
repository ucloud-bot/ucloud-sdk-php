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
namespace UCloud\UNet\Models;

use UCloud\Core\Response\Response;

class UnetEIPResourceSet extends Response
{
    

    /**
     * ResourceType: 已绑定的资源类型, 枚举值为: uhost, 云主机；natgw：NAT网关；ulb：负载均衡器；upm: 物理机; hadoophost: 大数据集群;fortresshost：堡垒机；udockhost：容器；udhost：私有专区主机；vpngw：IPSec VPN；ucdr：云灾备；dbaudit：数据库审计，uni：虚拟网卡。
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: 已绑定的资源类型, 枚举值为: uhost, 云主机；natgw：NAT网关；ulb：负载均衡器；upm: 物理机; hadoophost: 大数据集群;fortresshost：堡垒机；udockhost：容器；udhost：私有专区主机；vpngw：IPSec VPN；ucdr：云灾备；dbaudit：数据库审计，uni：虚拟网卡。
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ResourceName: 已绑定的资源名称
     *
     * @return string|null
     */
    public function getResourceName(): string
    {
        return $this->get("ResourceName");
    }

    /**
     * ResourceName: 已绑定的资源名称
     *
     * @param string $resourceName
     */
    public function setResourceName(string $resourceName)
    {
        $this->set("ResourceName", $resourceName);
    }

    /**
     * ResourceID: 已绑定资源的资源ID
     *
     * @return string|null
     */
    public function getResourceID(): string
    {
        return $this->get("ResourceID");
    }

    /**
     * ResourceID: 已绑定资源的资源ID
     *
     * @param string $resourceID
     */
    public function setResourceID(string $resourceID)
    {
        $this->set("ResourceID", $resourceID);
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的类型。uni，虚拟网卡。
     *
     * @return string|null
     */
    public function getSubResourceType(): string
    {
        return $this->get("SubResourceType");
    }

    /**
     * SubResourceType: 资源绑定的虚拟网卡的类型。uni，虚拟网卡。
     *
     * @param string $subResourceType
     */
    public function setSubResourceType(string $subResourceType)
    {
        $this->set("SubResourceType", $subResourceType);
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的名称
     *
     * @return string|null
     */
    public function getSubResourceName(): string
    {
        return $this->get("SubResourceName");
    }

    /**
     * SubResourceName: 资源绑定的虚拟网卡的名称
     *
     * @param string $subResourceName
     */
    public function setSubResourceName(string $subResourceName)
    {
        $this->set("SubResourceName", $subResourceName);
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的ID
     *
     * @return string|null
     */
    public function getSubResourceId(): string
    {
        return $this->get("SubResourceId");
    }

    /**
     * SubResourceId: 资源绑定的虚拟网卡的ID
     *
     * @param string $subResourceId
     */
    public function setSubResourceId(string $subResourceId)
    {
        $this->set("SubResourceId", $subResourceId);
    }

    /**
     * EIPId: 弹性IP的资源ID
     *
     * @return string|null
     */
    public function getEIPId(): string
    {
        return $this->get("EIPId");
    }

    /**
     * EIPId: 弹性IP的资源ID
     *
     * @param string $eipId
     */
    public function setEIPId(string $eipId)
    {
        $this->set("EIPId", $eipId);
    }
}
