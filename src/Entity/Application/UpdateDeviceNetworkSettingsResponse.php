<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceNetworkSettingsResponse
{

    /**
     * @var boolean $UpdateDeviceNetworkSettingsResult
     */
    protected $UpdateDeviceNetworkSettingsResult = null;

    /**
     * @param boolean $UpdateDeviceNetworkSettingsResult
     */
    public function __construct($UpdateDeviceNetworkSettingsResult)
    {
      $this->UpdateDeviceNetworkSettingsResult = $UpdateDeviceNetworkSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateDeviceNetworkSettingsResult()
    {
      return $this->UpdateDeviceNetworkSettingsResult;
    }

    /**
     * @param boolean $UpdateDeviceNetworkSettingsResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceNetworkSettingsResponse
     */
    public function setUpdateDeviceNetworkSettingsResult($UpdateDeviceNetworkSettingsResult)
    {
      $this->UpdateDeviceNetworkSettingsResult = $UpdateDeviceNetworkSettingsResult;
      return $this;
    }

}
