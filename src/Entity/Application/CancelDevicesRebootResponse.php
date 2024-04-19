<?php

namespace WSD\BrightSignApi\Entity\Application;

class CancelDevicesRebootResponse
{

    /**
     * @var boolean $CancelDevicesRebootResult
     */
    protected $CancelDevicesRebootResult = null;

    /**
     * @param boolean $CancelDevicesRebootResult
     */
    public function __construct($CancelDevicesRebootResult)
    {
      $this->CancelDevicesRebootResult = $CancelDevicesRebootResult;
    }

    /**
     * @return boolean
     */
    public function getCancelDevicesRebootResult()
    {
      return $this->CancelDevicesRebootResult;
    }

    /**
     * @param boolean $CancelDevicesRebootResult
     * @return \WSD\BrightSignApi\Entity\Application\CancelDevicesRebootResponse
     */
    public function setCancelDevicesRebootResult($CancelDevicesRebootResult)
    {
      $this->CancelDevicesRebootResult = $CancelDevicesRebootResult;
      return $this;
    }

}
