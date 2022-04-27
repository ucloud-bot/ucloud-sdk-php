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

namespace UCloud\UDB\Models;

use UCloud\Core\Response\Response;

use UCloud\UDB\Models\GetUDBClientConnNumResponse;

class ConnNumMap extends Response
{

    /**
     * Ip: 客户端IP
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->get("Ip");
    }

    /**
     * Ip: 客户端IP
     *
     * @param string $ip
     */
    public function setIp(string $ip)
    {
        $this->set("Ip", $ip);
    }
    /**
     * Num: 该Ip连接数
     *
     * @return integer|null
     */
    public function getNum()
    {
        return $this->get("Num");
    }

    /**
     * Num: 该Ip连接数
     *
     * @param int $num
     */
    public function setNum(int $num)
    {
        $this->set("Num", $num);
    }
}
