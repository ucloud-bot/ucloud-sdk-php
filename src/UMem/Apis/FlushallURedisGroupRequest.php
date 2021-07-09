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

class FlushallURedisGroupRequest extends Request {
    public function __construct()
    {
        parent::__construct(["Action" => "FlushallURedisGroup"]);
        $this->markRequired("Region");
        $this->markRequired("Zone");
        $this->markRequired("GroupId");
        $this->markRequired("FlushType");
    }

    

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getRegion(): string {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](../summary/regionlist.html)
     *
     * @param string $region
     */
    public function setRegion(string $region) {
        $this->set("Region", $region);
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone) {
        $this->set("Zone", $zone);
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId) {
        $this->set("ProjectId", $projectId);
    }

    /**
     * GroupId: 组的ID
     *
     * @return string|null
     */
    public function getGroupId(): string {
        return $this->get("GroupId");
    }

    /**
     * GroupId: 组的ID
     *
     * @param string $groupId
     */
    public function setGroupId(string $groupId) {
        $this->set("GroupId", $groupId);
    }

    /**
     * FlushType: FlushDb或FlushAll
     *
     * @return string|null
     */
    public function getFlushType(): string {
        return $this->get("FlushType");
    }

    /**
     * FlushType: FlushDb或FlushAll
     *
     * @param string $flushType
     */
    public function setFlushType(string $flushType) {
        $this->set("FlushType", $flushType);
    }

    /**
     * DbNum: 清空的db，FlushType为FlushDb，此项为必传项
     *
     * @return int|null
     */
    public function getDbNum(): int {
        return $this->get("DbNum");
    }

    /**
     * DbNum: 清空的db，FlushType为FlushDb，此项为必传项
     *
     * @param int $dbNum
     */
    public function setDbNum(int $dbNum) {
        $this->set("DbNum", $dbNum);
    }

    /**
     * TopOrganizationId: company_id
     *
     * @return int|null
     */
    public function getTopOrganizationId(): int {
        return $this->get("TopOrganizationId");
    }

    /**
     * TopOrganizationId: company_id
     *
     * @param int $topOrganizationId
     */
    public function setTopOrganizationId(int $topOrganizationId) {
        $this->set("TopOrganizationId", $topOrganizationId);
    }

    /**
     * OrganizationId: OrganizationId
     *
     * @return int|null
     */
    public function getOrganizationId(): int {
        return $this->get("OrganizationId");
    }

    /**
     * OrganizationId: OrganizationId
     *
     * @param int $organizationId
     */
    public function setOrganizationId(int $organizationId) {
        $this->set("OrganizationId", $organizationId);
    }

    /**
     * SlaveZone: 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @return string|null
     */
    public function getSlaveZone(): string {
        return $this->get("SlaveZone");
    }

    /**
     * SlaveZone: 跨机房URedis，slave所在可用区（必须和Zone在同一Region，且不可相同）
     *
     * @param string $slaveZone
     */
    public function setSlaveZone(string $slaveZone) {
        $this->set("SlaveZone", $slaveZone);
    }


}