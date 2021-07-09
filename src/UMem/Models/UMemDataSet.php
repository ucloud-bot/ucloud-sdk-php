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
namespace UCloud\UMem\Models;

use UCloud\Core\Response\Response;

class UMemDataSet extends Response
{
    

    /**
     * Zone: 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getZone(): string
    {
        return $this->get("Zone");
    }

    /**
     * Zone: 实例所在可用区，或者master redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $zone
     */
    public function setZone(string $zone)
    {
        $this->set("Zone", $zone);
    }

    /**
     * OwnSlave: 是否拥有只读Slave“Yes” 包含“No” 不包含
     *
     * @return string|null
     */
    public function getOwnSlave(): string
    {
        return $this->get("OwnSlave");
    }

    /**
     * OwnSlave: 是否拥有只读Slave“Yes” 包含“No” 不包含
     *
     * @param string $ownSlave
     */
    public function setOwnSlave(string $ownSlave)
    {
        $this->set("OwnSlave", $ownSlave);
    }

    /**
     * DataSet: UMEM实例列表 UMemSlaveDataSet 如果没有slave，则没有该字段
     *
     * @return UMemSlaveDataSet[]|null
     */
    public function getDataSet(): array
    {
        $items = $this->get("DataSet") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UMemSlaveDataSet($item));
        }
        return $result;
    }

    /**
     * DataSet: UMEM实例列表 UMemSlaveDataSet 如果没有slave，则没有该字段
     *
     * @param UMemSlaveDataSet[] $dataSet
     */
    public function setDataSet(array $dataSet)
    {
        $result = [];
        foreach ($dataSet as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Role: 表示实例是主库还是从库,master,slave仅主备redis返回该项参数
     *
     * @return string|null
     */
    public function getRole(): string
    {
        return $this->get("Role");
    }

    /**
     * Role: 表示实例是主库还是从库,master,slave仅主备redis返回该项参数
     *
     * @param string $role
     */
    public function setRole(string $role)
    {
        $this->set("Role", $role);
    }

    /**
     * RewriteTime: 主备redis和分布式redis运维时间0  //0点1  //1点以此类推单机版memcache不返回该项
     *
     * @return integer|null
     */
    public function getRewriteTime(): int
    {
        return $this->get("RewriteTime");
    }

    /**
     * RewriteTime: 主备redis和分布式redis运维时间0  //0点1  //1点以此类推单机版memcache不返回该项
     *
     * @param int $rewriteTime
     */
    public function setRewriteTime(int $rewriteTime)
    {
        $this->set("RewriteTime", $rewriteTime);
    }

    /**
     * VPCId: vpc
     *
     * @return string|null
     */
    public function getVPCId(): string
    {
        return $this->get("VPCId");
    }

    /**
     * VPCId: vpc
     *
     * @param string $vpcId
     */
    public function setVPCId(string $vpcId)
    {
        $this->set("VPCId", $vpcId);
    }

    /**
     * SubnetId: 子网
     *
     * @return string|null
     */
    public function getSubnetId(): string
    {
        return $this->get("SubnetId");
    }

    /**
     * SubnetId: 子网
     *
     * @param string $subnetId
     */
    public function setSubnetId(string $subnetId)
    {
        $this->set("SubnetId", $subnetId);
    }

    /**
     * ResourceId: 资源ID
     *
     * @return string|null
     */
    public function getResourceId(): string
    {
        return $this->get("ResourceId");
    }

    /**
     * ResourceId: 资源ID
     *
     * @param string $resourceId
     */
    public function setResourceId(string $resourceId)
    {
        $this->set("ResourceId", $resourceId);
    }

    /**
     * Name: 资源名称
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: 资源名称
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
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
     * ExpireTime: 到期时间
     *
     * @return integer|null
     */
    public function getExpireTime(): int
    {
        return $this->get("ExpireTime");
    }

    /**
     * ExpireTime: 到期时间
     *
     * @param int $expireTime
     */
    public function setExpireTime(int $expireTime)
    {
        $this->set("ExpireTime", $expireTime);
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: 空间类型:single(无热备),double(热备)
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }

    /**
     * Protocol: 协议类型: memcache, redis
     *
     * @return string|null
     */
    public function getProtocol(): string
    {
        return $this->get("Protocol");
    }

    /**
     * Protocol: 协议类型: memcache, redis
     *
     * @param string $protocol
     */
    public function setProtocol(string $protocol)
    {
        $this->set("Protocol", $protocol);
    }

    /**
     * Size: 容量单位GB
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 容量单位GB
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @return integer|null
     */
    public function getUsedSize(): int
    {
        return $this->get("UsedSize");
    }

    /**
     * UsedSize: 使用量单位MB
     *
     * @param int $usedSize
     */
    public function setUsedSize(int $usedSize)
    {
        $this->set("UsedSize", $usedSize);
    }

    /**
     * State: 实例状态                                  Starting                  // 创建中       Creating                  // 初始化中     CreateFail                // 创建失败     Fail                      // 创建失败     Deleting                  // 删除中       DeleteFail                // 删除失败     Running                   // 运行         Resizing                  // 容量调整中   ResizeFail                // 容量调整失败 Configing                 // 配置中       ConfigFail                // 配置失败Restarting                // 重启中SetPasswordFail    //设置密码失败
     *
     * @return string|null
     */
    public function getState(): string
    {
        return $this->get("State");
    }

    /**
     * State: 实例状态                                  Starting                  // 创建中       Creating                  // 初始化中     CreateFail                // 创建失败     Fail                      // 创建失败     Deleting                  // 删除中       DeleteFail                // 删除失败     Running                   // 运行         Resizing                  // 容量调整中   ResizeFail                // 容量调整失败 Configing                 // 配置中       ConfigFail                // 配置失败Restarting                // 重启中SetPasswordFail    //设置密码失败
     *
     * @param string $state
     */
    public function setState(string $state)
    {
        $this->set("State", $state);
    }

    /**
     * ChargeType: 计费模式，Year, Month, Dynamic, Trial
     *
     * @return string|null
     */
    public function getChargeType(): string
    {
        return $this->get("ChargeType");
    }

    /**
     * ChargeType: 计费模式，Year, Month, Dynamic, Trial
     *
     * @param string $chargeType
     */
    public function setChargeType(string $chargeType)
    {
        $this->set("ChargeType", $chargeType);
    }

    /**
     * Address: IP端口信息请，参见UMemSpaceAddressSet
     *
     * @return UMemSpaceAddressSet[]|null
     */
    public function getAddress(): array
    {
        $items = $this->get("Address") ?? [];
        $result = [];
        foreach ($items as $i => $item) {
            array_push($result, new UMemSpaceAddressSet($item));
        }
        return $result;
    }

    /**
     * Address: IP端口信息请，参见UMemSpaceAddressSet
     *
     * @param UMemSpaceAddressSet[] $address
     */
    public function setAddress(array $address)
    {
        $result = [];
        foreach ($address as $i => $item) {
            array_push($result, $item->getAll());
        }
        return $result;
    }

    /**
     * Tag: 业务组名称
     *
     * @return string|null
     */
    public function getTag(): string
    {
        return $this->get("Tag");
    }

    /**
     * Tag: 业务组名称
     *
     * @param string $tag
     */
    public function setTag(string $tag)
    {
        $this->set("Tag", $tag);
    }

    /**
     * ResourceType: distributed: 分布式版Redis,或者分布式Memcache；single：主备版Redis,或者单机Memcache；performance：高性能版
     *
     * @return string|null
     */
    public function getResourceType(): string
    {
        return $this->get("ResourceType");
    }

    /**
     * ResourceType: distributed: 分布式版Redis,或者分布式Memcache；single：主备版Redis,或者单机Memcache；performance：高性能版
     *
     * @param string $resourceType
     */
    public function setResourceType(string $resourceType)
    {
        $this->set("ResourceType", $resourceType);
    }

    /**
     * ConfigId: 节点的配置ID
     *
     * @return string|null
     */
    public function getConfigId(): string
    {
        return $this->get("ConfigId");
    }

    /**
     * ConfigId: 节点的配置ID
     *
     * @param string $configId
     */
    public function setConfigId(string $configId)
    {
        $this->set("ConfigId", $configId);
    }

    /**
     * AutoBackup: 是否需要自动备份,enable,disable
     *
     * @return string|null
     */
    public function getAutoBackup(): string
    {
        return $this->get("AutoBackup");
    }

    /**
     * AutoBackup: 是否需要自动备份,enable,disable
     *
     * @param string $autoBackup
     */
    public function setAutoBackup(string $autoBackup)
    {
        $this->set("AutoBackup", $autoBackup);
    }

    /**
     * BackupTime: 自动备份开始时间,单位小时计,范围[0-23]
     *
     * @return integer|null
     */
    public function getBackupTime(): int
    {
        return $this->get("BackupTime");
    }

    /**
     * BackupTime: 自动备份开始时间,单位小时计,范围[0-23]
     *
     * @param int $backupTime
     */
    public function setBackupTime(int $backupTime)
    {
        $this->set("BackupTime", $backupTime);
    }

    /**
     * HighAvailability: 是否开启高可用,enable,disable
     *
     * @return string|null
     */
    public function getHighAvailability(): string
    {
        return $this->get("HighAvailability");
    }

    /**
     * HighAvailability: 是否开启高可用,enable,disable
     *
     * @param string $highAvailability
     */
    public function setHighAvailability(string $highAvailability)
    {
        $this->set("HighAvailability", $highAvailability);
    }

    /**
     * Version: Redis版本信息
     *
     * @return string|null
     */
    public function getVersion(): string
    {
        return $this->get("Version");
    }

    /**
     * Version: Redis版本信息
     *
     * @param string $version
     */
    public function setVersion(string $version)
    {
        $this->set("Version", $version);
    }

    /**
     * SlaveZone: 跨机房URedis，slave redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @return string|null
     */
    public function getSlaveZone(): string
    {
        return $this->get("SlaveZone");
    }

    /**
     * SlaveZone: 跨机房URedis，slave redis所在可用区，参见 [可用区列表](../summary/regionlist.html)
     *
     * @param string $slaveZone
     */
    public function setSlaveZone(string $slaveZone)
    {
        $this->set("SlaveZone", $slaveZone);
    }
}
