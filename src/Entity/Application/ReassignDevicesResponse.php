<?php

namespace WSD\BrightSignApi\Entity\Application;

class ReassignDevicesResponse
{

    /**
     * @var boolean $ReassignDevicesResult
     */
    protected $ReassignDevicesResult = null;

    /**
     * @param boolean $ReassignDevicesResult
     */
    public function __construct($ReassignDevicesResult)
    {
      $this->ReassignDevicesResult = $ReassignDevicesResult;
    }

    /**
     * @return boolean
     */
    public function getReassignDevicesResult()
    {
      return $this->ReassignDevicesResult;
    }

    /**
     * @param boolean $ReassignDevicesResult
     * @return \WSD\BrightSignApi\Entity\Application\ReassignDevicesResponse
     */
    public function setReassignDevicesResult($ReassignDevicesResult)
    {
      $this->ReassignDevicesResult = $ReassignDevicesResult;
      return $this;
    }

}
