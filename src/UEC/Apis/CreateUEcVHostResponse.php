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
use UCloud\UEC\Models\NodeList;

class CreateUEcVHostResponse extends Response
{
    

    /**
     * NodeList: 节点id（详情参考NodeList）
     *
     * @return NodeList[]|null
     */
    public function getNodeList(): array
    {
        $items = $this->get("NodeList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new NodeList($item));
        }
        return $result;
    }

    /**
     * NodeList: 节点id（详情参考NodeList）
     *
     * @param NodeList[] $nodeList
     */
    public function setNodeList(array $nodeList)
    {
        $result = [];
        foreach ($nodeList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}
