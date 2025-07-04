<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanTaskReportUrl返回参数结构体
 *
 * @method integer getResult() 获取返回值, 0:成功, 其他值请查看“返回值”定义
 * @method void setResult(integer $Result) 设置返回值, 0:成功, 其他值请查看“返回值”定义
 * @method string getReportUrl() 获取诊断报告/堆栈信息下载链接
 * @method void setReportUrl(string $ReportUrl) 设置诊断报告/堆栈信息下载链接
 * @method string getReportTitle() 获取诊断报告/堆栈名称
 * @method void setReportTitle(string $ReportTitle) 设置诊断报告/堆栈名称
 * @method string getReportResult() 获取诊断json结果内容
 * @method void setReportResult(string $ReportResult) 设置诊断json结果内容
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanTaskReportUrlResponse extends AbstractModel
{
    /**
     * @var integer 返回值, 0:成功, 其他值请查看“返回值”定义
     */
    public $Result;

    /**
     * @var string 诊断报告/堆栈信息下载链接
     */
    public $ReportUrl;

    /**
     * @var string 诊断报告/堆栈名称
     */
    public $ReportTitle;

    /**
     * @var string 诊断json结果内容
     */
    public $ReportResult;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Result 返回值, 0:成功, 其他值请查看“返回值”定义
     * @param string $ReportUrl 诊断报告/堆栈信息下载链接
     * @param string $ReportTitle 诊断报告/堆栈名称
     * @param string $ReportResult 诊断json结果内容
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("ReportUrl",$param) and $param["ReportUrl"] !== null) {
            $this->ReportUrl = $param["ReportUrl"];
        }

        if (array_key_exists("ReportTitle",$param) and $param["ReportTitle"] !== null) {
            $this->ReportTitle = $param["ReportTitle"];
        }

        if (array_key_exists("ReportResult",$param) and $param["ReportResult"] !== null) {
            $this->ReportResult = $param["ReportResult"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
