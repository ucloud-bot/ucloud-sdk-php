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
namespace UCloud\UDPN\Apis;

use UCloud\Core\Response\Response;

class AllocateUDPNResponse extends Response {
    

    /**
     * UDPNId: 资源名称
     *
     * @return string|null
     */
    public function getUDPNId(): string {
        return $this->get("UDPNId");
    }

    /**
     * UDPNId: 资源名称
     *
     * @param string $udpnId
     */
    public function setUDPNId(string $udpnId) {
        $this->set("UDPNId", $udpnId);
    }


}