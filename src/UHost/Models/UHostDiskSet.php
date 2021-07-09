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
namespace UCloud\UHost\Models;

use UCloud\Core\Response\Response;

class UHostDiskSet extends Response
{
    

    /**
     * DiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @return string|null
     */
    public function getDiskType(): string
    {
        return $this->get("DiskType");
    }

    /**
     * DiskType: 磁盘类型。请参考[[api:uhost-api:disk_type|磁盘类型]]。
     *
     * @param string $diskType
     */
    public function setDiskType(string $diskType)
    {
        $this->set("DiskType", $diskType);
    }

    /**
     * IsBoot: 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @return string|null
     */
    public function getIsBoot(): string
    {
        return $this->get("IsBoot");
    }

    /**
     * IsBoot: 是否是系统盘。枚举值：\\ > True，是系统盘 \\ > False，是数据盘（默认）。Disks数组中有且只能有一块盘是系统盘。
     *
     * @param string $isBoot
     */
    public function setIsBoot(string $isBoot)
    {
        $this->set("IsBoot", $isBoot);
    }

    /**
     * Encrypted: "true": 加密盘 "false"：非加密盘
     *
     * @return string|null
     */
    public function getEncrypted(): string
    {
        return $this->get("Encrypted");
    }

    /**
     * Encrypted: "true": 加密盘 "false"：非加密盘
     *
     * @param string $encrypted
     */
    public function setEncrypted(string $encrypted)
    {
        $this->set("Encrypted", $encrypted);
    }

    /**
     * Type: 【建议不再使用】磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *
     * @return string|null
     */
    public function getType(): string
    {
        return $this->get("Type");
    }

    /**
     * Type: 【建议不再使用】磁盘类型。系统盘: Boot，数据盘: Data,网络盘：Udisk
     *
     * @param string $type
     */
    public function setType(string $type)
    {
        $this->set("Type", $type);
    }

    /**
     * DiskId: 磁盘ID
     *
     * @return string|null
     */
    public function getDiskId(): string
    {
        return $this->get("DiskId");
    }

    /**
     * DiskId: 磁盘ID
     *
     * @param string $diskId
     */
    public function setDiskId(string $diskId)
    {
        $this->set("DiskId", $diskId);
    }

    /**
     * Name: UDisk名字（仅当磁盘是UDisk时返回）
     *
     * @return string|null
     */
    public function getName(): string
    {
        return $this->get("Name");
    }

    /**
     * Name: UDisk名字（仅当磁盘是UDisk时返回）
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->set("Name", $name);
    }

    /**
     * Drive: 磁盘盘符
     *
     * @return string|null
     */
    public function getDrive(): string
    {
        return $this->get("Drive");
    }

    /**
     * Drive: 磁盘盘符
     *
     * @param string $drive
     */
    public function setDrive(string $drive)
    {
        $this->set("Drive", $drive);
    }

    /**
     * Size: 磁盘大小，单位: GB
     *
     * @return integer|null
     */
    public function getSize(): int
    {
        return $this->get("Size");
    }

    /**
     * Size: 磁盘大小，单位: GB
     *
     * @param int $size
     */
    public function setSize(int $size)
    {
        $this->set("Size", $size);
    }

    /**
     * BackupType: 备份方案。若开通了数据方舟，则为DATAARK
     *
     * @return string|null
     */
    public function getBackupType(): string
    {
        return $this->get("BackupType");
    }

    /**
     * BackupType: 备份方案。若开通了数据方舟，则为DATAARK
     *
     * @param string $backupType
     */
    public function setBackupType(string $backupType)
    {
        $this->set("BackupType", $backupType);
    }
}
