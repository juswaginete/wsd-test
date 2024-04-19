<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceLogsSettings
{

    /**
     * @var int $deviceId
     */
    protected $deviceId = null;

    /**
     * @var DeviceLogsSettings $settings
     */
    protected $settings = null;

    /**
     * @param int $deviceId
     * @param DeviceLogsSettings $settings
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
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceLogsSettings
     */
    public function setDeviceId($deviceId)
    {
      $this->deviceId = $deviceId;
      return $this;
    }

    /**
     * @return DeviceLogsSettings
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param DeviceLogsSettings $settings
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceLogsSettings
     */
    public function setSettings($settings)
    {
      $this->settings = $settings;
      return $this;
    }

}
