<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteDevicesResponse
{

    /**
     * @var boolean $DeleteDevicesResult
     */
    protected $DeleteDevicesResult = null;

    /**
     * @param boolean $DeleteDevicesResult
     */
    public function __construct($DeleteDevicesResult)
    {
      $this->DeleteDevicesResult = $DeleteDevicesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDevicesResult()
    {
      return $this->DeleteDevicesResult;
    }

    /**
     * @param boolean $DeleteDevicesResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteDevicesResponse
     */
    public function setDeleteDevicesResult($DeleteDevicesResult)
    {
      $this->DeleteDevicesResult = $DeleteDevicesResult;
      return $this;
    }

}
