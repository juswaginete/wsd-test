<?php

namespace WSD\BrightSignApi\Entity\Application;

class CancelDevicesLogsUploadResponse
{

    /**
     * @var boolean $CancelDevicesLogsUploadResult
     */
    protected $CancelDevicesLogsUploadResult = null;

    /**
     * @param boolean $CancelDevicesLogsUploadResult
     */
    public function __construct($CancelDevicesLogsUploadResult)
    {
      $this->CancelDevicesLogsUploadResult = $CancelDevicesLogsUploadResult;
    }

    /**
     * @return boolean
     */
    public function getCancelDevicesLogsUploadResult()
    {
      return $this->CancelDevicesLogsUploadResult;
    }

    /**
     * @param boolean $CancelDevicesLogsUploadResult
     * @return \WSD\BrightSignApi\Entity\Application\CancelDevicesLogsUploadResponse
     */
    public function setCancelDevicesLogsUploadResult($CancelDevicesLogsUploadResult)
    {
      $this->CancelDevicesLogsUploadResult = $CancelDevicesLogsUploadResult;
      return $this;
    }

}
