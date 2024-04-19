<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameDeviceResponse
{

    /**
     * @var boolean $RenameDeviceResult
     */
    protected $RenameDeviceResult = null;

    /**
     * @param boolean $RenameDeviceResult
     */
    public function __construct($RenameDeviceResult)
    {
      $this->RenameDeviceResult = $RenameDeviceResult;
    }

    /**
     * @return boolean
     */
    public function getRenameDeviceResult()
    {
      return $this->RenameDeviceResult;
    }

    /**
     * @param boolean $RenameDeviceResult
     * @return \WSD\BrightSignApi\Entity\Application\RenameDeviceResponse
     */
    public function setRenameDeviceResult($RenameDeviceResult)
    {
      $this->RenameDeviceResult = $RenameDeviceResult;
      return $this;
    }

}
