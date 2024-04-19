<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedDevicesResponse
{

    /**
     * @var ArrayOfDevice $GetSpecifiedDevicesResult
     */
    protected $GetSpecifiedDevicesResult = null;

    /**
     * @param ArrayOfDevice $GetSpecifiedDevicesResult
     */
    public function __construct($GetSpecifiedDevicesResult)
    {
      $this->GetSpecifiedDevicesResult = $GetSpecifiedDevicesResult;
    }

    /**
     * @return ArrayOfDevice
     */
    public function getGetSpecifiedDevicesResult()
    {
      return $this->GetSpecifiedDevicesResult;
    }

    /**
     * @param ArrayOfDevice $GetSpecifiedDevicesResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedDevicesResponse
     */
    public function setGetSpecifiedDevicesResult($GetSpecifiedDevicesResult)
    {
      $this->GetSpecifiedDevicesResult = $GetSpecifiedDevicesResult;
      return $this;
    }

}
