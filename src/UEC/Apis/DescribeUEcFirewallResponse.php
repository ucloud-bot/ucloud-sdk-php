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
namespace UCloud\UEC\Apis;

use UCloud\Core\Response\Response;
use UCloud\UEC\Models\FirewallInfo;
use UCloud\UEC\Models\RuleInfo;

class DescribeUEcFirewallResponse extends Response
{
    

    /**
     * FirewallSet: 防火墙组详细信息，参见 FirewallInfo
     *
     * @return FirewallInfo[]|null
     */
    public function getFirewallSet(): array
    {
        $items = $this->get("FirewallSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new FirewallInfo($item));
        }
        return $result;
    }

    /**
     * FirewallSet: 防火墙组详细信息，参见 FirewallInfo
     *
     * @param FirewallInfo[] $firewallSet
     */
    public function setFirewallSet(array $firewallSet)
    {
        $result = [];
        foreach ($firewallSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * TotalCount: 满足条件的节点总数
     *
     * @return integer|null
     */
    public function getTotalCount(): int
    {
        return $this->get("TotalCount");
    }

    /**
     * TotalCount: 满足条件的节点总数
     *
     * @param int $totalCount
     */
    public function setTotalCount(int $totalCount)
    {
        $this->set("TotalCount", $totalCount);
    }
}
