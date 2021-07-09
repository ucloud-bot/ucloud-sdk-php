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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Response\Response;

class AttachUDiskResponse extends Response
{
    

    /**
     * UHostId: 挂载的UHost实例ID。【即将废弃，建议使用HostId】
     *
     * @return string|null
     */
    public function getUHostId(): string
    {
        return $this->get("UHostId");
    }

    /**
     * UHostId: 挂载的UHost实例ID。【即将废弃，建议使用HostId】
     *
     * @param string $uHostId
     */
    public function setUHostId(string $uHostId)
    {
        $this->set("UHostId", $uHostId);
    }

    /**
     * UDiskId: 挂载的UDisk实例ID
     *
     * @return string|null
     */
    public function getUDiskId(): string
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: 挂载的UDisk实例ID
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * DeviceName: 挂载的设备名称
     *
     * @return string|null
     */
    public function getDeviceName(): string
    {
        return $this->get("DeviceName");
    }

    /**
     * DeviceName: 挂载的设备名称
     *
     * @param string $deviceName
     */
    public function setDeviceName(string $deviceName)
    {
        $this->set("DeviceName", $deviceName);
    }

    /**
     * HostId: 挂载的Host实例ID
     *
     * @return string|null
     */
    public function getHostId(): string
    {
        return $this->get("HostId");
    }

    /**
     * HostId: 挂载的Host实例ID
     *
     * @param string $hostId
     */
    public function setHostId(string $hostId)
    {
        $this->set("HostId", $hostId);
    }
}
