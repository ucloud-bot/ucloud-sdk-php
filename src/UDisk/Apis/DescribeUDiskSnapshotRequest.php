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
namespace UCloud\UDisk\Apis;

use UCloud\Core\Request\Request;

class DescribeUDiskSnapshotRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "DescribeUDiskSnapshot"]);
        $this->markRequired("Region");
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
     * Offset: 数据偏移量, 默认为0
     *
     * @return integer|null
     */
    public function getOffset(): int
    {
        return $this->get("Offset");
    }

    /**
     * Offset: 数据偏移量, 默认为0
     *
     * @param int $offset
     */
    public function setOffset(int $offset)
    {
        $this->set("Offset", $offset);
    }

    /**
     * Limit: 返回数据长度, 默认为20
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回数据长度, 默认为20
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }

    /**
     * UDiskId: UDiskId,返回该盘所做快照.(必须同时传Zone)
     *
     * @return string|null
     */
    public function getUDiskId(): string
    {
        return $this->get("UDiskId");
    }

    /**
     * UDiskId: UDiskId,返回该盘所做快照.(必须同时传Zone)
     *
     * @param string $uDiskId
     */
    public function setUDiskId(string $uDiskId)
    {
        $this->set("UDiskId", $uDiskId);
    }

    /**
     * SnapshotId: 快照id，SnapshotId , UDiskId 同时传SnapshotId优先
     *
     * @return string|null
     */
    public function getSnapshotId(): string
    {
        return $this->get("SnapshotId");
    }

    /**
     * SnapshotId: 快照id，SnapshotId , UDiskId 同时传SnapshotId优先
     *
     * @param string $snapshotId
     */
    public function setSnapshotId(string $snapshotId)
    {
        $this->set("SnapshotId", $snapshotId);
    }
}
