<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceErrorsResponse
{

    /**
     * @var PagedDeviceErrorList $GetDeviceErrorsResult
     */
    protected $GetDeviceErrorsResult = null;

    /**
     * @param PagedDeviceErrorList $GetDeviceErrorsResult
     */
    public function __construct($GetDeviceErrorsResult)
    {
      $this->GetDeviceErrorsResult = $GetDeviceErrorsResult;
    }

    /**
     * @return PagedDeviceErrorList
     */
    public function getGetDeviceErrorsResult()
    {
      return $this->GetDeviceErrorsResult;
    }

    /**
     * @param PagedDeviceErrorList $GetDeviceErrorsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceErrorsResponse
     */
    public function setGetDeviceErrorsResult($GetDeviceErrorsResult)
    {
      $this->GetDeviceErrorsResult = $GetDeviceErrorsResult;
      return $this;
    }

}
