<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceBySerialResponse
{

    /**
     * @var Device $GetDeviceBySerialResult
     */
    protected $GetDeviceBySerialResult = null;

    /**
     * @param Device $GetDeviceBySerialResult
     */
    public function __construct($GetDeviceBySerialResult)
    {
      $this->GetDeviceBySerialResult = $GetDeviceBySerialResult;
    }

    /**
     * @return Device
     */
    public function getGetDeviceBySerialResult()
    {
      return $this->GetDeviceBySerialResult;
    }

    /**
     * @param Device $GetDeviceBySerialResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceBySerialResponse
     */
    public function setGetDeviceBySerialResult($GetDeviceBySerialResult)
    {
      $this->GetDeviceBySerialResult = $GetDeviceBySerialResult;
      return $this;
    }

}
