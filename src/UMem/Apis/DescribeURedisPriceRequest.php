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
namespace UCloud\UMem\Apis;

use UCloud\Core\Request\Request;

class DescribeURedisPriceRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeURedisPrice"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("Size");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Size: 量大小,单位:GB  取值范围[1-32]
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 量大小,单位:GB  取值范围[1-32]
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * ChargeType: 计费模式，Year， Month， Dynamic；如果不指定，则一次性获取三种计费
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，Year， Month， Dynamic；如果不指定，则一次性获取三种计费
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Quantity: 计费模式为Dynamic时，购买的时长, 默认为1
     *
     * @return integer|null
     */
    public function getQuantity(): int
    {
        return $this->get("Quantity");
    }

    /**
     * Quantity: 计费模式为Dynamic时，购买的时长, 默认为1
     *
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->set("Quantity", $quantity);
    }

    /**
     * RegionFlag: 是否是跨机房URedis(默认false)
     *
     * @return boolean|null
     */
    public function getRegionFlag(): bool
    {
        return $this->get("RegionFlag");
    }

    /**
     * RegionFlag: 是否是跨机房URedis(默认false)
     *
     * @param boolean $regionFlag
     */
    public function setRegionFlag(bool $regionFlag)
    {
        $this->set("RegionFlag", $regionFlag);
    }

    /**
     * ProductType: 产品类型：MS_Redis（标准主备版），S_Redis（从库），默认为MS_Redis
     *
     * @return string|null
     */
    public function getProductType(): string
    {
        return $this->get("ProductType");
    }

    /**
     * ProductType: 产品类型：MS_Redis（标准主备版），S_Redis（从库），默认为MS_Redis
     *
     * @param string $productType
     */
    public function setProductType(string $productType)
    {
        $this->set("ProductType", $productType);
    }
}
