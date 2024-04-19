<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateGroupsFirmwareResponse
{

    /**
     * @var boolean $UpdateGroupsFirmwareResult
     */
    protected $UpdateGroupsFirmwareResult = null;

    /**
     * @param boolean $UpdateGroupsFirmwareResult
     */
    public function __construct($UpdateGroupsFirmwareResult)
    {
      $this->UpdateGroupsFirmwareResult = $UpdateGroupsFirmwareResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateGroupsFirmwareResult()
    {
      return $this->UpdateGroupsFirmwareResult;
    }

    /**
     * @param boolean $UpdateGroupsFirmwareResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmwareResponse
     */
    public function setUpdateGroupsFirmwareResult($UpdateGroupsFirmwareResult)
    {
      $this->UpdateGroupsFirmwareResult = $UpdateGroupsFirmwareResult;
      return $this;
    }

}
