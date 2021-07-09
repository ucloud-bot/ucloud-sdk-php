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
namespace UCloud\USMS\Apis;

use UCloud\Core\Request\Request;

class CreateUSMSTemplateRequest extends Request
{
    public function __construct()
    {
        parent::__construct(["Action" => "CreateUSMSTemplate"]);
        $this->markRequired("ProjectId");
        $this->markRequired("Purpose");
        $this->markRequired("TemplateName");
        $this->markRequired("Template");
    }

    

    /**
     * ProjectId: 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @return string|null
     */
    public function getProjectId(): string
    {
        return $this->get("ProjectId");
    }

    /**
     * ProjectId: 项目ID，不填写为默认项目，子帐号必须填写。 请参考[GetProjectList接口](https://docs.ucloud.cn/api/summary/get_project_list)
     *
     * @param string $projectId
     */
    public function setProjectId(string $projectId)
    {
        $this->set("ProjectId", $projectId);
    }

    /**
     * Purpose: 短信模板用途类型：1-验证码类短信模板；2-系统通知类短信模板；3-会员推广类短信模板；
     *
     * @return integer|null
     */
    public function getPurpose(): int
    {
        return $this->get("Purpose");
    }

    /**
     * Purpose: 短信模板用途类型：1-验证码类短信模板；2-系统通知类短信模板；3-会员推广类短信模板；
     *
     * @param int $purpose
     */
    public function setPurpose(int $purpose)
    {
        $this->set("Purpose", $purpose);
    }

    /**
     * TemplateName: 短信模板名称，不超过32个字符，每个中文、符号、英文、数字等都计为1个字。
     *
     * @return string|null
     */
    public function getTemplateName(): string
    {
        return $this->get("TemplateName");
    }

    /**
     * TemplateName: 短信模板名称，不超过32个字符，每个中文、符号、英文、数字等都计为1个字。
     *
     * @param string $templateName
     */
    public function setTemplateName(string $templateName)
    {
        $this->set("TemplateName", $templateName);
    }

    /**
     * Template: 短信模板内容，说明如下：字数不超过500，每个中文、符号、英文、数组等都计为一个字；模板中的变量填写格式：{N}，其中N为大于1的整数，有多个参数时，建议N从1开始顺次，例如：{1}、{2}等；短信模板禁止仅包括变量的情况；
     *
     * @return string|null
     */
    public function getTemplate(): string
    {
        return $this->get("Template");
    }

    /**
     * Template: 短信模板内容，说明如下：字数不超过500，每个中文、符号、英文、数组等都计为一个字；模板中的变量填写格式：{N}，其中N为大于1的整数，有多个参数时，建议N从1开始顺次，例如：{1}、{2}等；短信模板禁止仅包括变量的情况；
     *
     * @param string $template
     */
    public function setTemplate(string $template)
    {
        $this->set("Template", $template);
    }

    /**
     * International: 标记是否为国际短信。true:国际短信，false:国内短信，若不传值则默认该值为false
     *
     * @return boolean|null
     */
    public function getInternational(): bool
    {
        return $this->get("International");
    }

    /**
     * International: 标记是否为国际短信。true:国际短信，false:国内短信，若不传值则默认该值为false
     *
     * @param boolean $international
     */
    public function setInternational(bool $international)
    {
        $this->set("International", $international);
    }

    /**
     * Remark: 短信模板申请原因说明，字数不超过128，每个中文、符号、英文、数字等都计为1个字。
     *
     * @return string|null
     */
    public function getRemark(): string
    {
        return $this->get("Remark");
    }

    /**
     * Remark: 短信模板申请原因说明，字数不超过128，每个中文、符号、英文、数字等都计为1个字。
     *
     * @param string $remark
     */
    public function setRemark(string $remark)
    {
        $this->set("Remark", $remark);
    }
}
