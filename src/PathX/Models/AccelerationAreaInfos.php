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
namespace UCloud\PathX\Models;

use UCloud\Core\Response\Response;

class AccelerationAreaInfos extends Response
{
    

    /**
     * AccelerationArea: 加速区code
     *
     * @return string|null
     */
    public function getAccelerationArea(): string
    {
        return $this->get("AccelerationArea");
    }

    /**
     * AccelerationArea: 加速区code
     *
     * @param string $accelerationArea
     */
    public function setAccelerationArea(string $accelerationArea)
    {
        $this->set("AccelerationArea", $accelerationArea);
    }

    /**
     * AccelerationNodes: 加速节点信息
     *
     * @return SrcAreaInfo[]|null
     */
    public function getAccelerationNodes(): array
    {
        $items = $this->get("AccelerationNodes") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new SrcAreaInfo($item));
        }
        return $result;
    }

    /**
     * AccelerationNodes: 加速节点信息
     *
     * @param SrcAreaInfo[] $accelerationNodes
     */
    public function setAccelerationNodes(array $accelerationNodes)
    {
        $result = [];
        foreach ($accelerationNodes as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
