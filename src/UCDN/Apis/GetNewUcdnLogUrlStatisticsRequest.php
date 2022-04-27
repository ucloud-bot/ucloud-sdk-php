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

use UCloud\Core\Request\Request;

class GetNewUcdnLogUrlStatisticsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "GetNewUcdnLogUrlStatistics"]);
        $this->markRequired("DomainId");
    }

    

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * DomainId: 域名Id
     *
     * @return string|null
     */
    public function getDomainId(): string
    {
        return $this->get("DomainId");
    }

    /**
     * DomainId: 域名Id
     *
     * @param string $domainId
     */
    public function setDomainId(string $domainId)
    {
        $this->set("DomainId", $domainId);
    }

    /**
     * Areacode: 查询带宽区域 cn代表国内 abroad代表海外 只支持国内
     *
     * @return string|null
     */
    public function getAreacode(): string
    {
        return $this->get("Areacode");
    }

    /**
     * Areacode: 查询带宽区域 cn代表国内 abroad代表海外 只支持国内
     *
     * @param string $areacode
     */
    public function setAreacode(string $areacode)
    {
        $this->set("Areacode", $areacode);
    }

    /**
     * BeginTime: 查询带宽的起始时间，格式：时间戳。BeginTime和EndTime必须同时赋值
     *
     * @return integer|null
     */
    public function getBeginTime(): int
    {
        return $this->get("BeginTime");
    }

    /**
     * BeginTime: 查询带宽的起始时间，格式：时间戳。BeginTime和EndTime必须同时赋值
     *
     * @param int $beginTime
     */
    public function setBeginTime(int $beginTime)
    {
        $this->set("BeginTime", $beginTime);
    }

    /**
     * EndTime: 查询统计日志的结束时间，格式：时间戳,最多可拉取30天
     *
     * @return integer|null
     */
    public function getEndTime(): int
    {
        return $this->get("EndTime");
    }

    /**
     * EndTime: 查询统计日志的结束时间，格式：时间戳,最多可拉取30天
     *
     * @param int $endTime
     */
    public function setEndTime(int $endTime)
    {
        $this->set("EndTime", $endTime);
    }

    /**
     * OrderBy: 0表示按流量降序排列，1表示按照下载次数降序排列，默认为0
     *
     * @return integer|null
     */
    public function getOrderBy(): int
    {
        return $this->get("OrderBy");
    }

    /**
     * OrderBy: 0表示按流量降序排列，1表示按照下载次数降序排列，默认为0
     *
     * @param int $orderBy
     */
    public function setOrderBy(int $orderBy)
    {
        $this->set("OrderBy", $orderBy);
    }

    /**
     * Limit: 返回的结果数量限制，默认1000
     *
     * @return integer|null
     */
    public function getLimit(): int
    {
        return $this->get("Limit");
    }

    /**
     * Limit: 返回的结果数量限制，默认1000
     *
     * @param int $limit
     */
    public function setLimit(int $limit)
    {
        $this->set("Limit", $limit);
    }
}
