<?php

namespace WSD\BrightSignApi\Entity\Application;

class CancelDevicesRecovery
{

    /**
     * @var ArrayOfint $deviceIds
     */
    protected $deviceIds = null;

    /**
     * @param ArrayOfint $deviceIds
     */
    public function __construct($deviceIds)
    {
      $this->deviceIds = $deviceIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getDeviceIds()
    {
      return $this->deviceIds;
    }

    /**
     * @param ArrayOfint $deviceIds
     * @return \WSD\BrightSignApi\Entity\Application\CancelDevicesRecovery
     */
    public function setDeviceIds($deviceIds)
    {
      $this->deviceIds = $deviceIds;
      return $this;
    }

}
