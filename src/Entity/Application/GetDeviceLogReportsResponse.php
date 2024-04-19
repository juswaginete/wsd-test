<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceLogReportsResponse
{

    /**
     * @var PagedDeviceLogReportList $GetDeviceLogReportsResult
     */
    protected $GetDeviceLogReportsResult = null;

    /**
     * @param PagedDeviceLogReportList $GetDeviceLogReportsResult
     */
    public function __construct($GetDeviceLogReportsResult)
    {
      $this->GetDeviceLogReportsResult = $GetDeviceLogReportsResult;
    }

    /**
     * @return PagedDeviceLogReportList
     */
    public function getGetDeviceLogReportsResult()
    {
      return $this->GetDeviceLogReportsResult;
    }

    /**
     * @param PagedDeviceLogReportList $GetDeviceLogReportsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceLogReportsResponse
     */
    public function setGetDeviceLogReportsResult($GetDeviceLogReportsResult)
    {
      $this->GetDeviceLogReportsResult = $GetDeviceLogReportsResult;
      return $this;
    }

}
