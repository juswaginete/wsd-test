<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceResponse
{

    /**
     * @var Device $GetDeviceResult
     */
    protected $GetDeviceResult = null;

    /**
     * @param Device $GetDeviceResult
     */
    public function __construct($GetDeviceResult)
    {
      $this->GetDeviceResult = $GetDeviceResult;
    }

    /**
     * @return Device
     */
    public function getGetDeviceResult()
    {
      return $this->GetDeviceResult;
    }

    /**
     * @param Device $GetDeviceResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceResponse
     */
    public function setGetDeviceResult($GetDeviceResult)
    {
      $this->GetDeviceResult = $GetDeviceResult;
      return $this;
    }

}
