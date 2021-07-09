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
namespace UCloud\ULB\Models;

use UCloud\Core\Response\Response;

class ULBPolicySet extends Response
{
    

    /**
     * PolicyId: 内容转发Id，默认内容转发类型下为空。
     *
     * @return string|null
     */
    public function getPolicyId(): string
    {
        return $this->get("PolicyId");
    }

    /**
     * PolicyId: 内容转发Id，默认内容转发类型下为空。
     *
     * @param string $policyId
     */
    public function setPolicyId(string $policyId)
    {
        $this->set("PolicyId", $policyId);
    }

    /**
     * PolicyType: 内容类型，枚举值：Custom -> 客户自定义；Default -> 默认内容转发
     *
     * @return string|null
     */
    public function getPolicyType(): string
    {
        return $this->get("PolicyType");
    }

    /**
     * PolicyType: 内容类型，枚举值：Custom -> 客户自定义；Default -> 默认内容转发
     *
     * @param string $policyType
     */
    public function setPolicyType(string $policyType)
    {
        $this->set("PolicyType", $policyType);
    }

    /**
     * Type: 内容转发匹配字段的类型，枚举值：Domain -> 域名；Path -> 路径； 默认内容转发类型下为空
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: 内容转发匹配字段的类型，枚举值：Domain -> 域名；Path -> 路径； 默认内容转发类型下为空
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }

    /**
     * Match: 内容转发匹配字段;默认内容转发类型下为空。
     *
     * @return string|null
     */
    public function getMatch(): string
    {
        return $this->get("Match");
    }

    /**
     * Match: 内容转发匹配字段;默认内容转发类型下为空。
     *
     * @param string $match
     */
    public function setMatch(string $match)
    {
        $this->set("Match", $match);
    }

    /**
     * PolicyPriority: 内容转发优先级，范围[1,9999]，数字越大优先级越高。默认内容转发规则下为0。
     *
     * @return integer|null
     */
    public function getPolicyPriority(): int
    {
        return $this->get("PolicyPriority");
    }

    /**
     * PolicyPriority: 内容转发优先级，范围[1,9999]，数字越大优先级越高。默认内容转发规则下为0。
     *
     * @param int $policyPriority
     */
    public function setPolicyPriority(int $policyPriority)
    {
        $this->set("PolicyPriority", $policyPriority);
    }

    /**
     * VServerId: 所属VServerId
     *
     * @return string|null
     */
    public function getVServerId(): string
    {
        return $this->get("VServerId");
    }

    /**
     * VServerId: 所属VServerId
     *
     * @param string $vServerId
     */
    public function setVServerId(string $vServerId)
    {
        $this->set("VServerId", $vServerId);
    }

    /**
     * TotalCount: 默认内容转发类型下返回当前rs总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 默认内容转发类型下返回当前rs总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }

    /**
     * BackendSet: 内容转发下rs的详细信息，参考PolicyBackendSet
     *
     * @return PolicyBackendSet[]|null
     */
    public function getBackendSet(): array
    {
        $items = $this->get("BackendSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new PolicyBackendSet($item));
        }
        return $result;
    }

    /**
     * BackendSet: 内容转发下rs的详细信息，参考PolicyBackendSet
     *
     * @param PolicyBackendSet[] $backendSet
     */
    public function setBackendSet(array $backendSet)
    {
        $result = [];
        foreach ($backendSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
