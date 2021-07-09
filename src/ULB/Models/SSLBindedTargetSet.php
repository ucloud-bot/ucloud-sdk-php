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

class SSLBindedTargetSet extends Response
{
    

    /**
     * VServerId: SSL证书绑定到的VServer的资源ID
     *
     * @return string|null
     */
    public function getVServerId(): string
    {
        return $this->get("VServerId");
    }

    /**
     * VServerId: SSL证书绑定到的VServer的资源ID
     *
     * @param string $vServerId
     */
    public function setVServerId(string $vServerId)
    {
        $this->set("VServerId", $vServerId);
    }

    /**
     * VServerName: 对应的VServer的名字
     *
     * @return string|null
     */
    public function getVServerName(): string
    {
        return $this->get("VServerName");
    }

    /**
     * VServerName: 对应的VServer的名字
     *
     * @param string $vServerName
     */
    public function setVServerName(string $vServerName)
    {
        $this->set("VServerName", $vServerName);
    }

    /**
     * ULBId: VServer 所属的ULB实例的资源ID
     *
     * @return string|null
     */
    public function getULBId(): string
    {
        return $this->get("ULBId");
    }

    /**
     * ULBId: VServer 所属的ULB实例的资源ID
     *
     * @param string $ulbId
     */
    public function setULBId(string $ulbId)
    {
        $this->set("ULBId", $ulbId);
    }

    /**
     * ULBName: ULB实例的名称
     *
     * @return string|null
     */
    public function getULBName(): string
    {
        return $this->get("ULBName");
    }

    /**
     * ULBName: ULB实例的名称
     *
     * @param string $ulbName
     */
    public function setULBName(string $ulbName)
    {
        $this->set("ULBName", $ulbName);
    }
}
