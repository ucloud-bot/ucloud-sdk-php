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
namespace UCloud\Cube\Apis;

use UCloud\Core\Response\Response;
use UCloud\Cube\Models\CubeExtendInfo;
use UCloud\Cube\Models\EIPSet;
use UCloud\Cube\Models\EIPAddr;

class GetCubeExtendInfoResponse extends Response
{
    

    /**
     * ExtendInfo: CubeExtendInfo
     *
     * @return CubeExtendInfo[]|null
     */
    public function getExtendInfo(): array
    {
        $items = $this->get("ExtendInfo") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new CubeExtendInfo($item));
        }
        return $result;
    }

    /**
     * ExtendInfo: CubeExtendInfo
     *
     * @param CubeExtendInfo[] $extendInfo
     */
    public function setExtendInfo(array $extendInfo)
    {
        $result = [];
        foreach ($extendInfo as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
