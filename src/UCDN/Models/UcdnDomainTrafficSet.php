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
namespace UCloud\UCDN\Models;

use UCloud\Core\Response\Response;

class UcdnDomainTrafficSet extends Response {
    

    /**
     * Time: 流量获取的时间点，格式为Unix Timestamp
     *
     * @return int|null
     */
    public function getTime(): int {
        return $this->get("Time");
    }

    /**
     * Time: 流量获取的时间点，格式为Unix Timestamp
     *
     * @param int $time
     */
    public function setTime(int $time) {
        $this->set("Time", $time);
    }

    /**
     * Value: 查询每日流量总值，单位：GB
     *
     * @return float|null
     */
    public function getValue(): float {
        return $this->get("Value");
    }

    /**
     * Value: 查询每日流量总值，单位：GB
     *
     * @param float $value
     */
    public function setValue(float $value) {
        $this->set("Value", $value);
    }


}