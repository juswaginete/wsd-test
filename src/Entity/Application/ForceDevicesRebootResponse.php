<?php

namespace WSD\BrightSignApi\Entity\Application;

class ForceDevicesRebootResponse
{

    /**
     * @var boolean $ForceDevicesRebootResult
     */
    protected $ForceDevicesRebootResult = null;

    /**
     * @param boolean $ForceDevicesRebootResult
     */
    public function __construct($ForceDevicesRebootResult)
    {
      $this->ForceDevicesRebootResult = $ForceDevicesRebootResult;
    }

    /**
     * @return boolean
     */
    public function getForceDevicesRebootResult()
    {
      return $this->ForceDevicesRebootResult;
    }

    /**
     * @param boolean $ForceDevicesRebootResult
     * @return \WSD\BrightSignApi\Entity\Application\ForceDevicesRebootResponse
     */
    public function setForceDevicesRebootResult($ForceDevicesRebootResult)
    {
      $this->ForceDevicesRebootResult = $ForceDevicesRebootResult;
      return $this;
    }

}
