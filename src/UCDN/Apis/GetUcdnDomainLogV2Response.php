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

namespace UCloud\UCDN\Apis;

use UCloud\Core\Response\Response;

use UCloud\UCDN\Models\DomanLogList;
use UCloud\UCDN\Models\LogInfo;

class GetUcdnDomainLogV2Response extends Response
{

    /**
     * DomainLogSet:
     *
     * @return DomanLogListModel[]|null
     */
    public function getDomainLogSet()
    {
        $items = $this->get("DomainLogSet");
        if ($items == null) {
            return [];
        }
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new DomanLogListModel($item));
        }
        return $result;
    }

    /**
     * DomainLogSet:
     *
     * @param DomanLogListModel[] $domainLogSet
     */
    public function setDomainLogSet(array $domainLogSet)
    {
        $result = [];
        foreach ($domainLogSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }
}