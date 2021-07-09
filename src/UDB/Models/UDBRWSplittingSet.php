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
namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

class UDBRWSplittingSet extends Response
{
    

    /**
     * DBId: DB实例ID
     *
     * @return string|null
     */
    public function getDBId(): string
    {
        return $this->get("DBId");
    }

    /**
     * DBId: DB实例ID
     *
     * @param string $dbId
     */
    public function setDBId(string $dbId)
    {
        $this->set("DBId", $dbId);
    }

    /**
     * Role: 主库/从库
     *
     * @return string|null
     */
    public function getRole(): string
    {
        return $this->get("Role");
    }

    /**
     * Role: 主库/从库
     *
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->set("Role", $role);
    }

    /**
     * VirtualIP: DBIP
     *
     * @return string|null
     */
    public function getVirtualIP(): string
    {
        return $this->get("VirtualIP");
    }

    /**
     * VirtualIP: DBIP
     *
     * @param string $virtualIP
     */
    public function setVirtualIP(string $virtualIP)
    {
        $this->set("VirtualIP", $virtualIP);
    }

    /**
     * ReadWeight: 读写分离比重
     *
     * @return integer|null
     */
    public function getReadWeight(): int
    {
        return $this->get("ReadWeight");
    }

    /**
     * ReadWeight: 读写分离比重
     *
     * @param int $readWeight
     */
    public function setReadWeight(int $readWeight)
    {
        $this->set("ReadWeight", $readWeight);
    }

    /**
     * State: DB状态
     *
     * @return string|null
     */
    public function getState(): string
    {
        return $this->get("State");
    }

    /**
     * State: DB状态
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }
}
