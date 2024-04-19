<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceLogsSettingsResponse
{

    /**
     * @var boolean $UpdateDeviceLogsSettingsResult
     */
    protected $UpdateDeviceLogsSettingsResult = null;

    /**
     * @param boolean $UpdateDeviceLogsSettingsResult
     */
    public function __construct($UpdateDeviceLogsSettingsResult)
    {
      $this->UpdateDeviceLogsSettingsResult = $UpdateDeviceLogsSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateDeviceLogsSettingsResult()
    {
      return $this->UpdateDeviceLogsSettingsResult;
    }

    /**
     * @param boolean $UpdateDeviceLogsSettingsResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceLogsSettingsResponse
     */
    public function setUpdateDeviceLogsSettingsResult($UpdateDeviceLogsSettingsResult)
    {
      $this->UpdateDeviceLogsSettingsResult = $UpdateDeviceLogsSettingsResult;
      return $this;
    }

}
