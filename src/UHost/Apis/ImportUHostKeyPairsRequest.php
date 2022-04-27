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

namespace UCloud\UHost\Apis;

use UCloud\Core\Request\Request;

class ImportUHostKeyPairsRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "ImportUHostKeyPairs"]);
        $this->markRequired("KeyPairName");
        $this->markRequired("PublicKeyBody");
    }


    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->get("Region");
    }

    /**
     * Region: 地域。 参见 [地域和可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $region
     */
    public function setRegion(string $region)
    {
        $this->set("Region", $region);
    }
    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @return string|null
     */
    public function getZone()
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 可用区。参见 [可用区列表](https://docs.ucloud.cn/api/summary/regionlist)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }
    /**
     * ProjectId: 项目ID。不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
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
     * KeyPairName: 密钥对名称。由字母，数字，符号组成，长度为1-63位。
     *
     * @return string|null
     */
    public function getKeyPairName()
    {
        return $this->get("KeyPairName");
    }

    /**
     * KeyPairName: 密钥对名称。由字母，数字，符号组成，长度为1-63位。
     *
     * @param string $keyPairName
     */
    public function setKeyPairName(string $keyPairName)
    {
        $this->set("KeyPairName", $keyPairName);
    }
    /**
     * PublicKeyBody: 密钥对的公钥内容。
     *
     * @return string|null
     */
    public function getPublicKeyBody()
    {
        return $this->get("PublicKeyBody");
    }

    /**
     * PublicKeyBody: 密钥对的公钥内容。
     *
     * @param string $publicKeyBody
     */
    public function setPublicKeyBody(string $publicKeyBody)
    {
        $this->set("PublicKeyBody", $publicKeyBody);
    }
}
