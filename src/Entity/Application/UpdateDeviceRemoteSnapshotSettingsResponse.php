<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceRemoteSnapshotSettingsResponse
{

    /**
     * @var boolean $UpdateDeviceRemoteSnapshotSettingsResult
     */
    protected $UpdateDeviceRemoteSnapshotSettingsResult = null;

    /**
     * @param boolean $UpdateDeviceRemoteSnapshotSettingsResult
     */
    public function __construct($UpdateDeviceRemoteSnapshotSettingsResult)
    {
      $this->UpdateDeviceRemoteSnapshotSettingsResult = $UpdateDeviceRemoteSnapshotSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateDeviceRemoteSnapshotSettingsResult()
    {
      return $this->UpdateDeviceRemoteSnapshotSettingsResult;
    }

    /**
     * @param boolean $UpdateDeviceRemoteSnapshotSettingsResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceRemoteSnapshotSettingsResponse
     */
    public function setUpdateDeviceRemoteSnapshotSettingsResult($UpdateDeviceRemoteSnapshotSettingsResult)
    {
      $this->UpdateDeviceRemoteSnapshotSettingsResult = $UpdateDeviceRemoteSnapshotSettingsResult;
      return $this;
    }

}
