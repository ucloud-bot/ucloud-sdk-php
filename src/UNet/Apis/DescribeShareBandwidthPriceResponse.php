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
namespace UCloud\UNet\Apis;

use UCloud\Core\Response\Response;

class DescribeShareBandwidthPriceResponse extends Response
{
    

    /**
     * TotalPrice: 共享带宽总价格
     *
     * @return integer|null
     */
    public function getTotalPrice(): int
    {
        return $this->get("TotalPrice");
    }

    /**
     * TotalPrice: 共享带宽总价格
     *
     * @param int $totalPrice
     */
    public function setTotalPrice(int $totalPrice)
    {
        $this->set("TotalPrice", $totalPrice);
    }
}
