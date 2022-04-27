<?php
/**
 * Copyright 2022 UCloud Technology Co., Ltd.
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

class AddUK8SNodeGroupRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "AddUK8SNodeGroup"]);
        $this->markRequired("Region");
        $this->markRequired("NodeGroupName");
        $this->markRequired("ClusterId");
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
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
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
     * NodeGroupName: 节点池名字
     *
     * @return string|null
     */
    public function getNodeGroupName(): string
    {
        return $this->get("NodeGroupName");
    }

    /**
     * NodeGroupName: 节点池名字
     *
     * @param string $nodeGroupName
     */
    public function setNodeGroupName(string $nodeGroupName)
    {
        $this->set("NodeGroupName", $nodeGroupName);
    }

    /**
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId(): string
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId(string $clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * ImageId: 镜像ID
     *
     * @return string|null
     */
    public function getImageId(): string
    {
        return $this->get("ImageId");
    }

    /**
     * ImageId: 镜像ID
     *
     * @param string $imageId
     */
    public function setImageId(string $imageId)
    {
        $this->set("ImageId", $imageId);
    }

    /**
     * MachineType: 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @return string|null
     */
    public function getMachineType(): string
    {
        return $this->get("MachineType");
    }

    /**
     * MachineType: 云主机机型。枚举值["N", "C", "G", "O", "OS"]。参考[[api:uhost-api:uhost_type|云主机机型说明]]。
     *
     * @param string $machineType
     */
    public function setMachineType(string $machineType)
    {
        $this->set("MachineType", $machineType);
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *
     * @return string|null
     */
    public function getMinimalCpuPlatform(): string
    {
        return $this->get("MinimalCpuPlatform");
    }

    /**
     * MinimalCpuPlatform: 最低cpu平台，枚举值["Intel/Auto", "Intel/IvyBridge", "Intel/Haswell", "Intel/Broadwell", "Intel/Skylake", "Intel/Cascadelake"；"Intel/CascadelakeR"; “Amd/Epyc2”,"Amd/Auto"],默认值是"Intel/Auto"
     *
     * @param string $minimalCpuPlatform
     */
    public function setMinimalCpuPlatform(string $minimalCpuPlatform)
    {
        $this->set("MinimalCpuPlatform", $minimalCpuPlatform);
    }

    /**
     * CPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @return integer|null
     */
    public function getCPU(): int
    {
        return $this->get("CPU");
    }

    /**
     * CPU: GPU卡核心数。仅GPU机型支持此字段（可选范围与MachineType+GpuType相关）
     *
     * @param int $cpu
     */
    public function setCPU(int $cpu)
    {
        $this->set("CPU", $cpu);
    }

    /**
     * Mem: 内存大小。单位：MB
     *
     * @return integer|null
     */
    public function getMem(): int
    {
        return $this->get("Mem");
    }

    /**
     * Mem: 内存大小。单位：MB
     *
     * @param int $mem
     */
    public function setMem(int $mem)
    {
        $this->set("Mem", $mem);
    }

    /**
     * GpuType: GPU类型
     *
     * @return string|null
     */
    public function getGpuType(): string
    {
        return $this->get("GpuType");
    }

    /**
     * GpuType: GPU类型
     *
     * @param string $gpuType
     */
    public function setGpuType(string $gpuType)
    {
        $this->set("GpuType", $gpuType);
    }

    /**
     * GPU: GPU卡核心数
     *
     * @return integer|null
     */
    public function getGPU(): int
    {
        return $this->get("GPU");
    }

    /**
     * GPU: GPU卡核心数
     *
     * @param int $gpu
     */
    public function setGPU(int $gpu)
    {
        $this->set("GPU", $gpu);
    }

    /**
     * BootDiskType: 磁盘类型
     *
     * @return string|null
     */
    public function getBootDiskType(): string
    {
        return $this->get("BootDiskType");
    }

    /**
     * BootDiskType: 磁盘类型
     *
     * @param string $bootDiskType
     */
    public function setBootDiskType(string $bootDiskType)
    {
        $this->set("BootDiskType", $bootDiskType);
    }

    /**
     * DataDiskSize: 数据磁盘大小
     *
     * @return integer|null
     */
    public function getDataDiskSize(): int
    {
        return $this->get("DataDiskSize");
    }

    /**
     * DataDiskSize: 数据磁盘大小
     *
     * @param int $dataDiskSize
     */
    public function setDataDiskSize(int $dataDiskSize)
    {
        $this->set("DataDiskSize", $dataDiskSize);
    }

    /**
     * DataDiskType: 磁盘类型
     *
     * @return string|null
     */
    public function getDataDiskType(): string
    {
        return $this->get("DataDiskType");
    }

    /**
     * DataDiskType: 磁盘类型
     *
     * @param string $dataDiskType
     */
    public function setDataDiskType(string $dataDiskType)
    {
        $this->set("DataDiskType", $dataDiskType);
    }

    /**
     * Tag: 业务组
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ChargeType: 计费模式
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }
}
