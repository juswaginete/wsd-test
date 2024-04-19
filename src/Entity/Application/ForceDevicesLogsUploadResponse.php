<?php

namespace WSD\BrightSignApi\Entity\Application;

class ForceDevicesLogsUploadResponse
{

    /**
     * @var boolean $ForceDevicesLogsUploadResult
     */
    protected $ForceDevicesLogsUploadResult = null;

    /**
     * @param boolean $ForceDevicesLogsUploadResult
     */
    public function __construct($ForceDevicesLogsUploadResult)
    {
      $this->ForceDevicesLogsUploadResult = $ForceDevicesLogsUploadResult;
    }

    /**
     * @return boolean
     */
    public function getForceDevicesLogsUploadResult()
    {
      return $this->ForceDevicesLogsUploadResult;
    }

    /**
     * @param boolean $ForceDevicesLogsUploadResult
     * @return \WSD\BrightSignApi\Entity\Application\ForceDevicesLogsUploadResponse
     */
    public function setForceDevicesLogsUploadResult($ForceDevicesLogsUploadResult)
    {
      $this->ForceDevicesLogsUploadResult = $ForceDevicesLogsUploadResult;
      return $this;
    }

}
