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
namespace UCloud\UEC\Models;

use UCloud\Core\Response\Response;

class ResourceInfo extends Response
{
    

    /**
     * ResourceId: 资源Id
     *
     * @return string|null
     */
    public function getResourceId(): string
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源Id
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * PublicIpList: 节点公网Ip列表
     *
     * @return string[]|null
     */
    public function getPublicIpList(): array
    {
        return $this->get("PublicIpList");
    }

    /**
     * PublicIpList: 节点公网Ip列表
     *
     * @param string[] $publicIpList
     */
    public function setPublicIpList(array $publicIpList)
    {
        $this->set("PublicIpList", $publicIpList);
    }

    /**
     * Name: 节点名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 节点名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * State: 节点状态，1部署中，2待启动，3启动中，4运行中，5正在停止，6已停止，7正在更新，8正在重启，9正在删除， 10已经删除,11异常
     *
     * @return integer|null
     */
    public function getState(): int
    {
        return $this->get("State");
    }

    /**
     * State: 节点状态，1部署中，2待启动，3启动中，4运行中，5正在停止，6已停止，7正在更新，8正在重启，9正在删除， 10已经删除,11异常
     *
     * @param int $state
     */
    public function setState(int $state)
    {
        $this->set("State", $state);
    }

    /**
     * Remark: 节点备注
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 节点备注
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
}
