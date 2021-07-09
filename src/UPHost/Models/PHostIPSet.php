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
namespace UCloud\UPHost\Models;

use UCloud\Core\Response\Response;

class PHostIPSet extends Response
{
    

    /**
     * OperatorName:  国际: Internation， BGP: BGP， 内网: Private
     *
     * @return string|null
     */
    public function getOperatorName(): string
    {
        return $this->get("OperatorName");
    }

    /**
     * OperatorName:  国际: Internation， BGP: BGP， 内网: Private
     *
     * @param string $operatorName
     */
    public function setOperatorName(string $operatorName)
    {
        $this->set("OperatorName", $operatorName);
    }

    /**
     * IPId: IP资源ID(内网IP无资源ID)（待废弃）
     *
     * @return string|null
     */
    public function getIPId(): string
    {
        return $this->get("IPId");
    }

    /**
     * IPId: IP资源ID(内网IP无资源ID)（待废弃）
     *
     * @param string $ipId
     */
    public function setIPId(string $ipId)
    {
        $this->set("IPId", $ipId);
    }

    /**
     * IPAddr: IP地址，
     *
     * @return string|null
     */
    public function getIPAddr(): string
    {
        return $this->get("IPAddr");
    }

    /**
     * IPAddr: IP地址，
     *
     * @param string $ipAddr
     */
    public function setIPAddr(string $ipAddr)
    {
        $this->set("IPAddr", $ipAddr);
    }

    /**
     * MACAddr: MAC地址
     *
     * @return string|null
     */
    public function getMACAddr(): string
    {
        return $this->get("MACAddr");
    }

    /**
     * MACAddr: MAC地址
     *
     * @param string $macAddr
     */
    public function setMACAddr(string $macAddr)
    {
        $this->set("MACAddr", $macAddr);
    }

    /**
     * Bandwidth: IP对应带宽，单位Mb，内网IP不显示带宽信息
     *
     * @return integer|null
     */
    public function getBandwidth(): int
    {
        return $this->get("Bandwidth");
    }

    /**
     * Bandwidth: IP对应带宽，单位Mb，内网IP不显示带宽信息
     *
     * @param int $bandwidth
     */
    public function setBandwidth(int $bandwidth)
    {
        $this->set("Bandwidth", $bandwidth);
    }

    /**
     * SubnetId: 子网ID
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网ID
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * VPCId: VPC ID
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPC ID
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }
}
