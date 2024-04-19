<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetAllDevicesResponse
{

    /**
     * @var PagedDeviceList $GetAllDevicesResult
     */
    protected $GetAllDevicesResult = null;

    /**
     * @param PagedDeviceList $GetAllDevicesResult
     */
    public function __construct($GetAllDevicesResult)
    {
      $this->GetAllDevicesResult = $GetAllDevicesResult;
    }

    /**
     * @return PagedDeviceList
     */
    public function getGetAllDevicesResult()
    {
      return $this->GetAllDevicesResult;
    }

    /**
     * @param PagedDeviceList $GetAllDevicesResult
     * @return \WSD\BrightSignApi\Entity\Application\GetAllDevicesResponse
     */
    public function setGetAllDevicesResult($GetAllDevicesResult)
    {
      $this->GetAllDevicesResult = $GetAllDevicesResult;
      return $this;
    }

}
