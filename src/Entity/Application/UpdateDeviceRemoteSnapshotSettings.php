<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceRemoteSnapshotSettings
{

    /**
     * @var int $deviceId
     */
    protected $deviceId = null;

    /**
     * @var RemoteSnapshotSettings $settings
     */
    protected $settings = null;

    /**
     * @param int $deviceId
     * @param RemoteSnapshotSettings $settings
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
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceRemoteSnapshotSettings
     */
    public function setDeviceId($deviceId)
    {
      $this->deviceId = $deviceId;
      return $this;
    }

    /**
     * @return RemoteSnapshotSettings
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param RemoteSnapshotSettings $settings
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceRemoteSnapshotSettings
     */
    public function setSettings($settings)
    {
      $this->settings = $settings;
      return $this;
    }

}
