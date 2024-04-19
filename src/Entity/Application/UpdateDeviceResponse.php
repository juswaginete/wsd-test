<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDeviceResponse
{

    /**
     * @var boolean $UpdateDeviceResult
     */
    protected $UpdateDeviceResult = null;

    /**
     * @param boolean $UpdateDeviceResult
     */
    public function __construct($UpdateDeviceResult)
    {
      $this->UpdateDeviceResult = $UpdateDeviceResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateDeviceResult()
    {
      return $this->UpdateDeviceResult;
    }

    /**
     * @param boolean $UpdateDeviceResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDeviceResponse
     */
    public function setUpdateDeviceResult($UpdateDeviceResult)
    {
      $this->UpdateDeviceResult = $UpdateDeviceResult;
      return $this;
    }

}
