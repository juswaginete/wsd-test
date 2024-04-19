<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallGroupsFirmwareResponse
{

    /**
     * @var boolean $UpdateBrightWallGroupsFirmwareResult
     */
    protected $UpdateBrightWallGroupsFirmwareResult = null;

    /**
     * @param boolean $UpdateBrightWallGroupsFirmwareResult
     */
    public function __construct($UpdateBrightWallGroupsFirmwareResult)
    {
      $this->UpdateBrightWallGroupsFirmwareResult = $UpdateBrightWallGroupsFirmwareResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateBrightWallGroupsFirmwareResult()
    {
      return $this->UpdateBrightWallGroupsFirmwareResult;
    }

    /**
     * @param boolean $UpdateBrightWallGroupsFirmwareResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallGroupsFirmwareResponse
     */
    public function setUpdateBrightWallGroupsFirmwareResult($UpdateBrightWallGroupsFirmwareResult)
    {
      $this->UpdateBrightWallGroupsFirmwareResult = $UpdateBrightWallGroupsFirmwareResult;
      return $this;
    }

}
