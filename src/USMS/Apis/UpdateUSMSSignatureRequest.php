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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class UpdateUSMSSignatureRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "UpdateUSMSSignature"]);
        $this->markRequired("ProjectId");
        $this->markRequired("SigId");
        $this->markRequired("SigContent");
        $this->markRequired("SigType");
        $this->markRequired("SigPurpose");
    }

    

    /**
     * ProjectId: 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId()
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId($projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * SigId: 签名ID（也即短信签名申请时的工单ID），支持以数组的方式，举例，以SigIds.0、SigIds.1...SigIds.N方式传入
     *
     * @return string|null
     */
    public function getSigId()
    {
        return $this->get("SigId");
    }

    /**
     * SigId: 签名ID（也即短信签名申请时的工单ID），支持以数组的方式，举例，以SigIds.0、SigIds.1...SigIds.N方式传入
     *
     * @param string $sigId
     */
    public function setSigId($sigId)
    {
        $this->set("SigId", $sigId);
    }

    /**
     * SigContent: 新的短信签名内容；长度为2-12个字符, 可包含中文、数字和符号；无需填写【】或[]，系统会自动添加
     *
     * @return string|null
     */
    public function getSigContent()
    {
        return $this->get("SigContent");
    }

    /**
     * SigContent: 新的短信签名内容；长度为2-12个字符, 可包含中文、数字和符号；无需填写【】或[]，系统会自动添加
     *
     * @param string $sigContent
     */
    public function setSigContent($sigContent)
    {
        $this->set("SigContent", $sigContent);
    }

    /**
     * SigType: 签名类型，说明如下：0-公司或企业的全称或简称；1-App应用的全称或简称；2-工信部备案网站的全称或简称；3-公众号或小程序的全称或简称；4-商标名的全称或简称；5-政府/机关事业单位/其他单位的全称或简称；
     *
     * @return integer|null
     */
    public function getSigType()
    {
        return $this->get("SigType");
    }

    /**
     * SigType: 签名类型，说明如下：0-公司或企业的全称或简称；1-App应用的全称或简称；2-工信部备案网站的全称或简称；3-公众号或小程序的全称或简称；4-商标名的全称或简称；5-政府/机关事业单位/其他单位的全称或简称；
     *
     * @param int $sigType
     */
    public function setSigType($sigType)
    {
        $this->set("SigType", $sigType);
    }

    /**
     * SigPurpose: 签名用途，0-自用，1-他用；
     *
     * @return integer|null
     */
    public function getSigPurpose()
    {
        return $this->get("SigPurpose");
    }

    /**
     * SigPurpose: 签名用途，0-自用，1-他用；
     *
     * @param int $sigPurpose
     */
    public function setSigPurpose($sigPurpose)
    {
        $this->set("SigPurpose", $sigPurpose);
    }

    /**
     * File: 短信签名的资质证明文件内容，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB。内容格式如下: [file type];[code type],[base64]  如：image/jpeg;base64,5YaF5a65
     *
     * @return string|null
     */
    public function getFile()
    {
        return $this->get("File");
    }

    /**
     * File: 短信签名的资质证明文件内容，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB。内容格式如下: [file type];[code type],[base64]  如：image/jpeg;base64,5YaF5a65
     *
     * @param string $file
     */
    public function setFile($file)
    {
        $this->set("File", $file);
    }

    /**
     * CertificateType: 签名的资质证明文件类型，需与签名类型保持一致，说明如下：0-三证合一/企业营业执照/组织机构代码证书/社会信用代码证书；1-应用商店后台开发者管理截图；2-备案服务商的备案成功截图(含域名，网站名称，备案号)；3-公众号或小程序的管理界面截图；4-商标注册证书；5-组织机构代码证书、社会信用代码证书；
     *
     * @return integer|null
     */
    public function getCertificateType()
    {
        return $this->get("CertificateType");
    }

    /**
     * CertificateType: 签名的资质证明文件类型，需与签名类型保持一致，说明如下：0-三证合一/企业营业执照/组织机构代码证书/社会信用代码证书；1-应用商店后台开发者管理截图；2-备案服务商的备案成功截图(含域名，网站名称，备案号)；3-公众号或小程序的管理界面截图；4-商标注册证书；5-组织机构代码证书、社会信用代码证书；
     *
     * @param int $certificateType
     */
    public function setCertificateType($certificateType)
    {
        $this->set("CertificateType", $certificateType);
    }

    /**
     * ProxyFile: 短信签名授权委托文件内容，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB；当您是代理并使用第三方的签名时（也即SigPurpose为1-他用），该项为必填项；格式和File类似。
     *
     * @return string|null
     */
    public function getProxyFile()
    {
        return $this->get("ProxyFile");
    }

    /**
     * ProxyFile: 短信签名授权委托文件内容，需先进行base64编码格式转换，此处填写转换后的字符串。文件大小不超过4 MB；当您是代理并使用第三方的签名时（也即SigPurpose为1-他用），该项为必填项；格式和File类似。
     *
     * @param string $proxyFile
     */
    public function setProxyFile($proxyFile)
    {
        $this->set("ProxyFile", $proxyFile);
    }

    /**
     * Document: 短信签名的资质证明文件URL，若未更改审核材料，则该处使用已上传审核材料的URL链接，否则使用File参数
     *
     * @return string|null
     */
    public function getDocument()
    {
        return $this->get("Document");
    }

    /**
     * Document: 短信签名的资质证明文件URL，若未更改审核材料，则该处使用已上传审核材料的URL链接，否则使用File参数
     *
     * @param string $document
     */
    public function setDocument($document)
    {
        $this->set("Document", $document);
    }

    /**
     * ProxyDoc: 短信签名授权委托文件URL，若未更改授权委托文件，则该处填写已上传的授权委托文件的URL链接，否则使用ProxyFile参数
     *
     * @return string|null
     */
    public function getProxyDoc()
    {
        return $this->get("ProxyDoc");
    }

    /**
     * ProxyDoc: 短信签名授权委托文件URL，若未更改授权委托文件，则该处填写已上传的授权委托文件的URL链接，否则使用ProxyFile参数
     *
     * @param string $proxyDoc
     */
    public function setProxyDoc($proxyDoc)
    {
        $this->set("ProxyDoc", $proxyDoc);
    }
}
