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
namespace UCloud\UDisk\Models;

use UCloud\Core\Response\Response;

class UDiskPriceDataSet extends Response
{
    

    /**
     * ChargeType: Year， Month， Dynamic，Trial
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: Year， Month， Dynamic，Trial
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Price: 实际价格 (单位: 分)
     *
     * @return integer|null
     */
    public function getPrice(): int
    {
        return $this->get("Price");
    }

    /**
     * Price: 实际价格 (单位: 分)
     *
     * @param int $price
     */
    public function setPrice(int $price)
    {
        $this->set("Price", $price);
    }

    /**
     * ChargeName: "UDataArk","SnapshotService","UDisk","Total"
     *
     * @return string|null
     */
    public function getChargeName(): string
    {
        return $this->get("ChargeName");
    }

    /**
     * ChargeName: "UDataArk","SnapshotService","UDisk","Total"
     *
     * @param string $chargeName
     */
    public function setChargeName(string $chargeName)
    {
        $this->set("ChargeName", $chargeName);
    }

    /**
     * OriginalPrice: 用户折后价(对应计费CustomPrice)
     *
     * @return integer|null
     */
    public function getOriginalPrice(): int
    {
        return $this->get("OriginalPrice");
    }

    /**
     * OriginalPrice: 用户折后价(对应计费CustomPrice)
     *
     * @param int $originalPrice
     */
    public function setOriginalPrice(int $originalPrice)
    {
        $this->set("OriginalPrice", $originalPrice);
    }

    /**
     * ListPrice: 原价(对应计费OriginalPrice)
     *
     * @return integer|null
     */
    public function getListPrice(): int
    {
        return $this->get("ListPrice");
    }

    /**
     * ListPrice: 原价(对应计费OriginalPrice)
     *
     * @param int $listPrice
     */
    public function setListPrice(int $listPrice)
    {
        $this->set("ListPrice", $listPrice);
    }
}
