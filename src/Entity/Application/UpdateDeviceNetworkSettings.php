<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceNetworkSettings
{

    /**
     * @var int $deviceId
     */
    protected $deviceId = null;

    /**
     * @var DeviceNetworkSettings $settings
     */
    protected $settings = null;

    /**
     * @param int $deviceId
     * @param DeviceNetworkSettings $settings
     */
    public function __construct($deviceId, $settings)
    {
      $this->deviceId = $deviceId;
      $this->settings = $settings;
    }

    /**
     * @return int
     */
    public function getDeviceId()
    {
      return $this->deviceId;
    }

    /**
     * @param int $deviceId
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceNetworkSettings
     */
    public function setDeviceId($deviceId)
    {
      $this->deviceId = $deviceId;
      return $this;
    }

    /**
     * @return DeviceNetworkSettings
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param DeviceNetworkSettings $settings
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceNetworkSettings
     */
    public function setSettings($settings)
    {
      $this->settings = $settings;
      return $this;
    }

}
