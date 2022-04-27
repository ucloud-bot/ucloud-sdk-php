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
namespace UCloud\VPC\Models;

use UCloud\Core\Response\Response;

class VPCIntercomInfo extends Response
{
    

    /**
     * ProjectId: 项目Id
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目Id
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * VPCType: vpc类型（1表示托管VPC，0表示公有云VPC）
     *
     * @return integer|null
     */
    public function getVPCType(): int
    {
        return $this->get("VPCType");
    }

    /**
     * VPCType: vpc类型（1表示托管VPC，0表示公有云VPC）
     *
     * @param int $vpcType
     */
    public function setVPCType(int $vpcType)
    {
        $this->set("VPCType", $vpcType);
    }

    /**
     * AccountId: 项目Id（数字）
     *
     * @return integer|null
     */
    public function getAccountId(): int
    {
        return $this->get("AccountId");
    }

    /**
     * AccountId: 项目Id（数字）
     *
     * @param int $accountId
     */
    public function setAccountId(int $accountId)
    {
        $this->set("AccountId", $accountId);
    }

    /**
     * Network: VPC的地址空间
     *
     * @return string[]|null
     */
    public function getNetwork(): array
    {
        return $this->get("Network");
    }

    /**
     * Network: VPC的地址空间
     *
     * @param string[] $network
     */
    public function setNetwork(array $network)
    {
        $this->set("Network", $network);
    }

    /**
     * DstRegion: 所属地域
     *
     * @return string|null
     */
    public function getDstRegion(): string
    {
        return $this->get("DstRegion");
    }

    /**
     * DstRegion: 所属地域
     *
     * @param string $dstRegion
     */
    public function setDstRegion(string $dstRegion)
    {
        $this->set("DstRegion", $dstRegion);
    }

    /**
     * Name: VPC名字
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: VPC名字
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * VPCId: VPCId
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: VPCId
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * Tag: 业务组（未分组显示为 Default）
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组（未分组显示为 Default）
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }
}
