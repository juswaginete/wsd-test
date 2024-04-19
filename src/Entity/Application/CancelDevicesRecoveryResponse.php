<?php

namespace WSD\BrightSignApi\Entity\Application;

class CancelDevicesRecoveryResponse
{

    /**
     * @var boolean $CancelDevicesRecoveryResult
     */
    protected $CancelDevicesRecoveryResult = null;

    /**
     * @param boolean $CancelDevicesRecoveryResult
     */
    public function __construct($CancelDevicesRecoveryResult)
    {
      $this->CancelDevicesRecoveryResult = $CancelDevicesRecoveryResult;
    }

    /**
     * @return boolean
     */
    public function getCancelDevicesRecoveryResult()
    {
      return $this->CancelDevicesRecoveryResult;
    }

    /**
     * @param boolean $CancelDevicesRecoveryResult
     * @return \WSD\BrightSignApi\Entity\Application\CancelDevicesRecoveryResponse
     */
    public function setCancelDevicesRecoveryResult($CancelDevicesRecoveryResult)
    {
      $this->CancelDevicesRecoveryResult = $CancelDevicesRecoveryResult;
      return $this;
    }

}
