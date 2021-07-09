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

class DescribeURedisConfigRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeURedisConfig"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("RegionFlag");
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
     * Version: Redis版本号
     *
     * @return string|null
     */
    public function getVersion(): string
    {
        return $this->get("Version");
    }

    /**
     * Version: Redis版本号
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }

    /**
     * ConfigId: 配置文件ID
     *
     * @return string|null
     */
    public function getConfigId(): string
    {
        return $this->get("ConfigId");
    }

    /**
     * ConfigId: 配置文件ID
     *
     * @param string $configId
     */
    public function setConfigId(string $configId)
    {
        $this->set("ConfigId", $configId);
    }

    /**
     * Offset: 页显示的起始偏移, 默认值为0
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 页显示的起始偏移, 默认值为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 页显示的条目数, 默认值为10
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 页显示的条目数, 默认值为10
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }
}
