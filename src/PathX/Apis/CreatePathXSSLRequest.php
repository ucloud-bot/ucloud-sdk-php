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
namespace UCloud\PathX\Apis;

use UCloud\Core\Request\Request;

class CreatePathXSSLRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreatePathXSSL"]);
        $this->markRequired("ProjectId");
        $this->markRequired("SSLName");
    }

    

    /**
     * ProjectId: 项目ID org-xxx格式。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID org-xxx格式。 请参考[GetProjectList接口](../summary/get_project_list.html)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SSLName: SSL证书的名字
     *
     * @return string|null
     */
    public function getSSLName(): string
    {
        return $this->get("SSLName");
    }

    /**
     * SSLName: SSL证书的名字
     *
     * @param string $sslName
     */
    public function setSSLName(string $sslName)
    {
        $this->set("SSLName", $sslName);
    }

    /**
     * SSLType: 所添加的SSL证书类型，目前只支持Pem格式
     *
     * @return string|null
     */
    public function getSSLType(): string
    {
        return $this->get("SSLType");
    }

    /**
     * SSLType: 所添加的SSL证书类型，目前只支持Pem格式
     *
     * @param string $sslType
     */
    public function setSSLType(string $sslType)
    {
        $this->set("SSLType", $sslType);
    }

    /**
     * SSLContent: SSL证书的完整内容，私钥不可使用密码，包括加密证书的私钥、用户证书或CA证书等
     *
     * @return string|null
     */
    public function getSSLContent(): string
    {
        return $this->get("SSLContent");
    }

    /**
     * SSLContent: SSL证书的完整内容，私钥不可使用密码，包括加密证书的私钥、用户证书或CA证书等
     *
     * @param string $sslContent
     */
    public function setSSLContent(string $sslContent)
    {
        $this->set("SSLContent", $sslContent);
    }

    /**
     * UserCert: 用户自签证书内容
     *
     * @return string|null
     */
    public function getUserCert(): string
    {
        return $this->get("UserCert");
    }

    /**
     * UserCert: 用户自签证书内容
     *
     * @param string $userCert
     */
    public function setUserCert(string $userCert)
    {
        $this->set("UserCert", $userCert);
    }

    /**
     * PrivateKey: 加密证书的私钥，不可使用密码保护，开启密码保护后，重启服务需要输入密码
     *
     * @return string|null
     */
    public function getPrivateKey(): string
    {
        return $this->get("PrivateKey");
    }

    /**
     * PrivateKey: 加密证书的私钥，不可使用密码保护，开启密码保护后，重启服务需要输入密码
     *
     * @param string $privateKey
     */
    public function setPrivateKey(string $privateKey)
    {
        $this->set("PrivateKey", $privateKey);
    }

    /**
     * CACert: CA颁发证书内容
     *
     * @return string|null
     */
    public function getCACert(): string
    {
        return $this->get("CACert");
    }

    /**
     * CACert: CA颁发证书内容
     *
     * @param string $caCert
     */
    public function setCACert(string $caCert)
    {
        $this->set("CACert", $caCert);
    }
}
