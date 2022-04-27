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
namespace UCloud\UK8S\Apis;

use UCloud\Core\Response\Response;
use UCloud\UK8S\Models\UhostInfo;
use UCloud\UK8S\Models\IPSet;
use UCloud\UK8S\Models\DiskSet;
use UCloud\UK8S\Models\UhostInfo;
use UCloud\UK8S\Models\IPSet;
use UCloud\UK8S\Models\DiskSet;
use UCloud\UK8S\Models\KubeProxy;

class DescribeUK8SClusterResponse extends Response
{
    

    /**
     * ClusterName: 资源名字
     *
     * @return string|null
     */
    public function getClusterName(): string
    {
        return $this->get("ClusterName");
    }

    /**
     * ClusterName: 资源名字
     *
     * @param string $clusterName
     */
    public function setClusterName(string $clusterName)
    {
        $this->set("ClusterName", $clusterName);
    }

    /**
     * ClusterId: 集群ID
     *
     * @return string|null
     */
    public function getClusterId(): string
    {
        return $this->get("ClusterId");
    }

    /**
     * ClusterId: 集群ID
     *
     * @param string $clusterId
     */
    public function setClusterId(string $clusterId)
    {
        $this->set("ClusterId", $clusterId);
    }

    /**
     * VPCId: 所属VPC
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: 所属VPC
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 所属子网
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 所属子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * PodCIDR: Pod网段
     *
     * @return string|null
     */
    public function getPodCIDR(): string
    {
        return $this->get("PodCIDR");
    }

    /**
     * PodCIDR: Pod网段
     *
     * @param string $podCIDR
     */
    public function setPodCIDR(string $podCIDR)
    {
        $this->set("PodCIDR", $podCIDR);
    }

    /**
     * ServiceCIDR: 服务网段
     *
     * @return string|null
     */
    public function getServiceCIDR(): string
    {
        return $this->get("ServiceCIDR");
    }

    /**
     * ServiceCIDR: 服务网段
     *
     * @param string $serviceCIDR
     */
    public function setServiceCIDR(string $serviceCIDR)
    {
        $this->set("ServiceCIDR", $serviceCIDR);
    }

    /**
     * MasterCount: Master 节点数量
     *
     * @return integer|null
     */
    public function getMasterCount(): int
    {
        return $this->get("MasterCount");
    }

    /**
     * MasterCount: Master 节点数量
     *
     * @param int $masterCount
     */
    public function setMasterCount(int $masterCount)
    {
        $this->set("MasterCount", $masterCount);
    }

    /**
     * MasterList: Master节点配置信息，具体参考UhostInfo。托管版不返回该信息
     *
     * @return UhostInfo[]|null
     */
    public function getMasterList(): array
    {
        $items = $this->get("MasterList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UhostInfo($item));
        }
        return $result;
    }

    /**
     * MasterList: Master节点配置信息，具体参考UhostInfo。托管版不返回该信息
     *
     * @param UhostInfo[] $masterList
     */
    public function setMasterList(array $masterList)
    {
        $result = [];
        foreach ($masterList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * NodeList: Node节点配置信息,具体参考UhostInfo
     *
     * @return UhostInfo[]|null
     */
    public function getNodeList(): array
    {
        $items = $this->get("NodeList") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UhostInfo($item));
        }
        return $result;
    }

    /**
     * NodeList: Node节点配置信息,具体参考UhostInfo
     *
     * @param UhostInfo[] $nodeList
     */
    public function setNodeList(array $nodeList)
    {
        $result = [];
        foreach ($nodeList as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * CreateTime: 创建时间
     *
     * @return integer|null
     */
    public function getCreateTime(): int
    {
        return $this->get("CreateTime");
    }

    /**
     * CreateTime: 创建时间
     *
     * @param int $createTime
     */
    public function setCreateTime(int $createTime)
    {
        $this->set("CreateTime", $createTime);
    }

    /**
     * NodeCount: Node节点数量
     *
     * @return integer|null
     */
    public function getNodeCount(): int
    {
        return $this->get("NodeCount");
    }

    /**
     * NodeCount: Node节点数量
     *
     * @param int $nodeCount
     */
    public function setNodeCount(int $nodeCount)
    {
        $this->set("NodeCount", $nodeCount);
    }

    /**
     * ApiServer: 集群apiserver地址
     *
     * @return string|null
     */
    public function getApiServer(): string
    {
        return $this->get("ApiServer");
    }

    /**
     * ApiServer: 集群apiserver地址
     *
     * @param string $apiServer
     */
    public function setApiServer(string $apiServer)
    {
        $this->set("ApiServer", $apiServer);
    }

    /**
     * Status: 状态
     *
     * @return string|null
     */
    public function getStatus(): string
    {
        return $this->get("Status");
    }

    /**
     * Status: 状态
     *
     * @param string $status
     */
    public function setStatus(string $status)
    {
        $this->set("Status", $status);
    }

    /**
     * ExternalApiServer: 集群外部apiserver地址
     *
     * @return string|null
     */
    public function getExternalApiServer(): string
    {
        return $this->get("ExternalApiServer");
    }

    /**
     * ExternalApiServer: 集群外部apiserver地址
     *
     * @param string $externalApiServer
     */
    public function setExternalApiServer(string $externalApiServer)
    {
        $this->set("ExternalApiServer", $externalApiServer);
    }

    /**
     * KubeProxy: kube-proxy配置
     *
     * @return KubeProxy|null
     */
    public function getKubeProxy(): KubeProxy
    {
        return new KubeProxy($this->get("KubeProxy"));
    }

    /**
     * KubeProxy: kube-proxy配置
     *
     * @param KubeProxy $kubeProxy
     */
    public function setKubeProxy(KubeProxy $kubeProxy)
    {
        $this->set("KubeProxy", $kubeProxy->getAll());
    }

    /**
     * Version: K8S版本
     *
     * @return string|null
     */
    public function getVersion(): string
    {
        return $this->get("Version");
    }

    /**
     * Version: K8S版本
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }

    /**
     * ClusterDomain: 自定义或者默认的clusterdomain
     *
     * @return string|null
     */
    public function getClusterDomain(): string
    {
        return $this->get("ClusterDomain");
    }

    /**
     * ClusterDomain: 自定义或者默认的clusterdomain
     *
     * @param string $clusterDomain
     */
    public function setClusterDomain(string $clusterDomain)
    {
        $this->set("ClusterDomain", $clusterDomain);
    }

    /**
     * EtcdCert: 集群etcd服务证书
     *
     * @return string|null
     */
    public function getEtcdCert(): string
    {
        return $this->get("EtcdCert");
    }

    /**
     * EtcdCert: 集群etcd服务证书
     *
     * @param string $etcdCert
     */
    public function setEtcdCert(string $etcdCert)
    {
        $this->set("EtcdCert", $etcdCert);
    }

    /**
     * EtcdKey: 集群etcd服务密钥
     *
     * @return string|null
     */
    public function getEtcdKey(): string
    {
        return $this->get("EtcdKey");
    }

    /**
     * EtcdKey: 集群etcd服务密钥
     *
     * @param string $etcdKey
     */
    public function setEtcdKey(string $etcdKey)
    {
        $this->set("EtcdKey", $etcdKey);
    }

    /**
     * CACert: 集群CA根证书
     *
     * @return string|null
     */
    public function getCACert(): string
    {
        return $this->get("CACert");
    }

    /**
     * CACert: 集群CA根证书
     *
     * @param string $caCert
     */
    public function setCACert(string $caCert)
    {
        $this->set("CACert", $caCert);
    }

    /**
     * MasterResourceStatus: Master配置预警：Normal正常；Warning 需要升级；Error    需要紧急升级；
     *
     * @return string|null
     */
    public function getMasterResourceStatus(): string
    {
        return $this->get("MasterResourceStatus");
    }

    /**
     * MasterResourceStatus: Master配置预警：Normal正常；Warning 需要升级；Error    需要紧急升级；
     *
     * @param string $masterResourceStatus
     */
    public function setMasterResourceStatus(string $masterResourceStatus)
    {
        $this->set("MasterResourceStatus", $masterResourceStatus);
    }
}
