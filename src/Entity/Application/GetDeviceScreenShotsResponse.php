<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceScreenShotsResponse
{

    /**
     * @var PagedDeviceScreenShotList $GetDeviceScreenShotsResult
     */
    protected $GetDeviceScreenShotsResult = null;

    /**
     * @param PagedDeviceScreenShotList $GetDeviceScreenShotsResult
     */
    public function __construct($GetDeviceScreenShotsResult)
    {
      $this->GetDeviceScreenShotsResult = $GetDeviceScreenShotsResult;
    }

    /**
     * @return PagedDeviceScreenShotList
     */
    public function getGetDeviceScreenShotsResult()
    {
      return $this->GetDeviceScreenShotsResult;
    }

    /**
     * @param PagedDeviceScreenShotList $GetDeviceScreenShotsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceScreenShotsResponse
     */
    public function setGetDeviceScreenShotsResult($GetDeviceScreenShotsResult)
    {
      $this->GetDeviceScreenShotsResult = $GetDeviceScreenShotsResult;
      return $this;
    }

}
