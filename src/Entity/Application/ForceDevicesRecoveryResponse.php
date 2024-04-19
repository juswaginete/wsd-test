<?php

namespace WSD\BrightSignApi\Entity\Application;

class ForceDevicesRecoveryResponse
{

    /**
     * @var boolean $ForceDevicesRecoveryResult
     */
    protected $ForceDevicesRecoveryResult = null;

    /**
     * @param boolean $ForceDevicesRecoveryResult
     */
    public function __construct($ForceDevicesRecoveryResult)
    {
      $this->ForceDevicesRecoveryResult = $ForceDevicesRecoveryResult;
    }

    /**
     * @return boolean
     */
    public function getForceDevicesRecoveryResult()
    {
      return $this->ForceDevicesRecoveryResult;
    }

    /**
     * @param boolean $ForceDevicesRecoveryResult
     * @return \WSD\BrightSignApi\Entity\Application\ForceDevicesRecoveryResponse
     */
    public function setForceDevicesRecoveryResult($ForceDevicesRecoveryResult)
    {
      $this->ForceDevicesRecoveryResult = $ForceDevicesRecoveryResult;
      return $this;
    }

}
