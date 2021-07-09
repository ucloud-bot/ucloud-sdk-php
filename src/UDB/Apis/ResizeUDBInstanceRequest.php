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
namespace UCloud\UDB\Apis;

use UCloud\Core\Request\Request;

class ResizeUDBInstanceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ResizeUDBInstance"]);
        $this->markRequired("Region");
        $this->markRequired("DBId");
        $this->markRequired("MemoryLimit");
        $this->markRequired("DiskSpace");
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
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
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
     * DBId: 实例的Id
     *
     * @return string|null
     */
    public function getDBId(): string
    {
        return $this->get("DBId");
    }

    /**
     * DBId: 实例的Id
     *
     * @param string $dbId
     */
    public function setDBId(string $dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/ 12000M/16000M/ 24000M/32000M/ 48000M/64000M/96000M/128000M/192000M/256000M/320000M。
     *
     * @return integer|null
     */
    public function getMemoryLimit(): int
    {
        return $this->get("MemoryLimit");
    }

    /**
     * MemoryLimit: 内存限制(MB)，目前支持以下几档 1000M/2000M/4000M/ 6000M/8000M/ 12000M/16000M/ 24000M/32000M/ 48000M/64000M/96000M/128000M/192000M/256000M/320000M。
     *
     * @param int $memoryLimit
     */
    public function setMemoryLimit(int $memoryLimit)
    {
        $this->set("MemoryLimit", $memoryLimit);
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G-32T
     *
     * @return integer|null
     */
    public function getDiskSpace(): int
    {
        return $this->get("DiskSpace");
    }

    /**
     * DiskSpace: 磁盘空间(GB), 暂时支持20G-32T
     *
     * @param int $diskSpace
     */
    public function setDiskSpace(int $diskSpace)
    {
        $this->set("DiskSpace", $diskSpace);
    }

    /**
     * UseSSD: 是否使用SSD，默认为true
     *
     * @return boolean|null
     */
    public function getUseSSD(): bool
    {
        return $this->get("UseSSD");
    }

    /**
     * UseSSD: 是否使用SSD，默认为true
     *
     * @param boolean $useSSD
     */
    public function setUseSSD(bool $useSSD)
    {
        $this->set("UseSSD", $useSSD);
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"、“NVMe”，如果UseSSD为true ，则必选
     *
     * @return string|null
     */
    public function getSSDType(): string
    {
        return $this->get("SSDType");
    }

    /**
     * SSDType: SSD类型，可选值为"SATA"、"PCI-E"、“NVMe”，如果UseSSD为true ，则必选
     *
     * @param string $ssdType
     */
    public function setSSDType(string $ssdType)
    {
        $this->set("SSDType", $ssdType);
    }

    /**
     * UDBCId: 专区的ID，如果有值表示专区中的DB配置升降级
     *
     * @return string|null
     */
    public function getUDBCId(): string
    {
        return $this->get("UDBCId");
    }

    /**
     * UDBCId: 专区的ID，如果有值表示专区中的DB配置升降级
     *
     * @param string $udbcId
     */
    public function setUDBCId(string $udbcId)
    {
        $this->set("UDBCId", $udbcId);
    }

    /**
     * InstanceType: UDB数据库机型: "Normal": "标准机型" ,  "SATA_SSD": "SSD机型" , "PCIE_SSD": "SSD高性能机型" ,  "Normal_Volume": "标准大容量机型",  "SATA_SSD_Volume": "SSD大容量机型" ,  "PCIE_SSD_Volume": "SSD高性能大容量机型"，“NVMe_SSD”：“快杰机型”
     *
     * @return string|null
     */
    public function getInstanceType(): string
    {
        return $this->get("InstanceType");
    }

    /**
     * InstanceType: UDB数据库机型: "Normal": "标准机型" ,  "SATA_SSD": "SSD机型" , "PCIE_SSD": "SSD高性能机型" ,  "Normal_Volume": "标准大容量机型",  "SATA_SSD_Volume": "SSD大容量机型" ,  "PCIE_SSD_Volume": "SSD高性能大容量机型"，“NVMe_SSD”：“快杰机型”
     *
     * @param string $instanceType
     */
    public function setInstanceType(string $instanceType)
    {
        $this->set("InstanceType", $instanceType);
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @return string|null
     */
    public function getInstanceMode(): string
    {
        return $this->get("InstanceMode");
    }

    /**
     * InstanceMode: UDB实例模式类型, 可选值如下: "Normal": 普通版UDB实例 "HA": 高可用版UDB实例 默认是"Normal"
     *
     * @param string $instanceMode
     */
    public function setInstanceMode(string $instanceMode)
    {
        $this->set("InstanceMode", $instanceMode);
    }

    /**
     * StartAfterUpgrade: DB关闭状态下升降级，升降级后是否启动DB，默认为false
     *
     * @return boolean|null
     */
    public function getStartAfterUpgrade(): bool
    {
        return $this->get("StartAfterUpgrade");
    }

    /**
     * StartAfterUpgrade: DB关闭状态下升降级，升降级后是否启动DB，默认为false
     *
     * @param boolean $startAfterUpgrade
     */
    public function setStartAfterUpgrade(bool $startAfterUpgrade)
    {
        $this->set("StartAfterUpgrade", $startAfterUpgrade);
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @return string|null
     */
    public function getCouponId(): string
    {
        return $this->get("CouponId");
    }

    /**
     * CouponId: 使用的代金券id
     *
     * @param string $couponId
     */
    public function setCouponId(string $couponId)
    {
        $this->set("CouponId", $couponId);
    }
}
