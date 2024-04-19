<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallResponse
{

    /**
     * @var boolean $UpdateBrightWallResult
     */
    protected $UpdateBrightWallResult = null;

    /**
     * @param boolean $UpdateBrightWallResult
     */
    public function __construct($UpdateBrightWallResult)
    {
      $this->UpdateBrightWallResult = $UpdateBrightWallResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateBrightWallResult()
    {
      return $this->UpdateBrightWallResult;
    }

    /**
     * @param boolean $UpdateBrightWallResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallResponse
     */
    public function setUpdateBrightWallResult($UpdateBrightWallResult)
    {
      $this->UpdateBrightWallResult = $UpdateBrightWallResult;
      return $this;
    }

}
