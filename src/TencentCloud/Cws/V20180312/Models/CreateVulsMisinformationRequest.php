<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cws\V20180312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getVulIds() 获取漏洞ID列表
 * @method void setVulIds(array $VulIds) 设置漏洞ID列表
 */

/**
 *CreateVulsMisinformation请求参数结构体
 */
class CreateVulsMisinformationRequest extends AbstractModel
{
    /**
     * @var array 漏洞ID列表
     */
    public $VulIds;
    /**
     * @param array $VulIds 漏洞ID列表
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VulIds",$param) and $param["VulIds"] !== null) {
            $this->VulIds = [];
            foreach ($param["VulIds"] as $key => $value){
                $obj = new uint64();
                $obj->deserialize($value);
                array_push($this->VulIds, $obj);
            }
        }
    }
}