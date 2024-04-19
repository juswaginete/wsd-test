<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDevice
{

    /**
     * @var int $deviceId
     */
    protected $deviceId = null;

    /**
     * @param int $deviceId
     */
    public function __construct($deviceId)
    {
      $this->deviceId = $deviceId;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetDevice
     */
    public function setDeviceId($deviceId)
    {
      $this->deviceId = $deviceId;
      return $this;
    }

}
