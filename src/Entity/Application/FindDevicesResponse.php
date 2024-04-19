<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindDevicesResponse
{

    /**
     * @var PagedDeviceList $FindDevicesResult
     */
    protected $FindDevicesResult = null;

    /**
     * @param PagedDeviceList $FindDevicesResult
     */
    public function __construct($FindDevicesResult)
    {
      $this->FindDevicesResult = $FindDevicesResult;
    }

    /**
     * @return PagedDeviceList
     */
    public function getFindDevicesResult()
    {
      return $this->FindDevicesResult;
    }

    /**
     * @param PagedDeviceList $FindDevicesResult
     * @return \WSD\BrightSignApi\Entity\Application\FindDevicesResponse
     */
    public function setFindDevicesResult($FindDevicesResult)
    {
      $this->FindDevicesResult = $FindDevicesResult;
      return $this;
    }

}
