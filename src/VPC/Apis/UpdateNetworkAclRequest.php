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
namespace UCloud\VPC\Apis;

use UCloud\Core\Request\Request;

class UpdateNetworkAclRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateNetworkAcl"]);
        $this->markRequired("Region");
        $this->markRequired("AclName");
        $this->markRequired("AclId");
        $this->markRequired("Description");
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
     * AclName: Acl的名称
     *
     * @return string|null
     */
    public function getAclName(): string
    {
        return $this->get("AclName");
    }

    /**
     * AclName: Acl的名称
     *
     * @param string $aclName
     */
    public function setAclName(string $aclName)
    {
        $this->set("AclName", $aclName);
    }

    /**
     * AclId: 需要更改的ACL ID
     *
     * @return string|null
     */
    public function getAclId(): string
    {
        return $this->get("AclId");
    }

    /**
     * AclId: 需要更改的ACL ID
     *
     * @param string $aclId
     */
    public function setAclId(string $aclId)
    {
        $this->set("AclId", $aclId);
    }

    /**
     * Description: 描述
     *
     * @return string|null
     */
    public function getDescription(): string
    {
        return $this->get("Description");
    }

    /**
     * Description: 描述
     *
     * @param string $description
     */
    public function setDescription(string $description)
    {
        $this->set("Description", $description);
    }
}
