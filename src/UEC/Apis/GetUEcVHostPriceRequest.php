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

class GetUEcVHostPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetUEcVHostPrice"]);
        $this->markRequired("IdcId");
    }

    

    /**
     * IdcId: 机房Id
     *
     * @return string|null
     */
    public function getIdcId(): string
    {
        return $this->get("IdcId");
    }

    /**
     * IdcId: 机房Id
     *
     * @param string $idcId
     */
    public function setIdcId(string $idcId)
    {
        $this->set("IdcId", $idcId);
    }

    /**
     * NodeCount: 节点数量，默认1
     *
     * @return integer|null
     */
    public function getNodeCount(): int
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: 节点数量，默认1
     *
     * @param int $nodeCount
     */
    public function setNodeCount(int $nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * CpuCore: CPU核数
     *
     * @return integer|null
     */
    public function getCpuCore(): int
    {
        return $this->get("CpuCore");
    }

    /**
     * CpuCore: CPU核数
     *
     * @param int $cpuCore
     */
    public function setCpuCore(int $cpuCore)
    {
        $this->set("CpuCore", $cpuCore);
    }

    /**
     * MemSize: 内存大小，单位GB
     *
     * @return integer|null
     */
    public function getMemSize(): int
    {
        return $this->get("MemSize");
    }

    /**
     * MemSize: 内存大小，单位GB
     *
     * @param int $memSize
     */
    public function setMemSize(int $memSize)
    {
        $this->set("MemSize", $memSize);
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB
     *
     * @return integer|null
     */
    public function getSysDiskSize(): int
    {
        return $this->get("SysDiskSize");
    }

    /**
     * SysDiskSize: 系统盘大小，单位GB
     *
     * @param int $sysDiskSize
     */
    public function setSysDiskSize(int $sysDiskSize)
    {
        $this->set("SysDiskSize", $sysDiskSize);
    }

    /**
     * DiskSize: 数据盘大小，单位GB
     *
     * @return integer|null
     */
    public function getDiskSize(): int
    {
        return $this->get("DiskSize");
    }

    /**
     * DiskSize: 数据盘大小，单位GB
     *
     * @param int $diskSize
     */
    public function setDiskSize(int $diskSize)
    {
        $this->set("DiskSize", $diskSize);
    }

    /**
     * NetLimit: 网络带宽限速，单位Mbs
     *
     * @return integer|null
     */
    public function getNetLimit(): int
    {
        return $this->get("NetLimit");
    }

    /**
     * NetLimit: 网络带宽限速，单位Mbs
     *
     * @param int $netLimit
     */
    public function setNetLimit(int $netLimit)
    {
        $this->set("NetLimit", $netLimit);
    }

    /**
     * ChargeType: 付费方式，1按时，2按月，3按年，默认2
     *
     * @return integer|null
     */
    public function getChargeType(): int
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 付费方式，1按时，2按月，3按年，默认2
     *
     * @param int $chargeType
     */
    public function setChargeType(int $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * ChargeQuantity: 月数或者年数，0计费到月底， 默认0
     *
     * @return integer|null
     */
    public function getChargeQuantity(): int
    {
        return $this->get("ChargeQuantity");
    }

    /**
     * ChargeQuantity: 月数或者年数，0计费到月底， 默认0
     *
     * @param int $chargeQuantity
     */
    public function setChargeQuantity(int $chargeQuantity)
    {
        $this->set("ChargeQuantity", $chargeQuantity);
    }

    /**
     * ProductType: 产品类型：normal（标准型），hf（高频型），默认normal
     *
     * @return string|null
     */
    public function getProductType(): string
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型：normal（标准型），hf（高频型），默认normal
     *
     * @param string $productType
     */
    public function setProductType(string $productType)
    {
        $this->set("ProductType", $productType);
    }

    /**
     * IpCount: 外网IP的数量，默认1
     *
     * @return integer|null
     */
    public function getIpCount(): int
    {
        return $this->get("IpCount");
    }

    /**
     * IpCount: 外网IP的数量，默认1
     *
     * @param int $ipCount
     */
    public function setIpCount(int $ipCount)
    {
        $this->set("IpCount", $ipCount);
    }
}
