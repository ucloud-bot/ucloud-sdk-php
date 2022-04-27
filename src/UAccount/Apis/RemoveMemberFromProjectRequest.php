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

namespace UCloud\UAccount\Apis;

use UCloud\Core\Request\Request;

class RemoveMemberFromProjectRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "RemoveMemberFromProject"]);
        $this->markRequired("ProjectId");
        $this->markRequired("MemberEmail");
    }


    /**
     * ProjectId: 项目ID，请参考[GetProjectList接口](../summary/get_project_list.html)的描述。不填写为默认项目，子帐号必须填写。
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID，请参考[GetProjectList接口](../summary/get_project_list.html)的描述。不填写为默认项目，子帐号必须填写。
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }
    /**
     * MemberEmail: 需要被移除成员Email
     *
     * @return string|null
     */
    public function getMemberEmail()
    {
        return $this->get("MemberEmail");
    }

    /**
     * MemberEmail: 需要被移除成员Email
     *
     * @param string $memberEmail
     */
    public function setMemberEmail(string $memberEmail)
    {
        $this->set("MemberEmail", $memberEmail);
    }
}
