<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallPresentationResponse
{

    /**
     * @var boolean $UpdateBrightWallPresentationResult
     */
    protected $UpdateBrightWallPresentationResult = null;

    /**
     * @param boolean $UpdateBrightWallPresentationResult
     */
    public function __construct($UpdateBrightWallPresentationResult)
    {
      $this->UpdateBrightWallPresentationResult = $UpdateBrightWallPresentationResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateBrightWallPresentationResult()
    {
      return $this->UpdateBrightWallPresentationResult;
    }

    /**
     * @param boolean $UpdateBrightWallPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallPresentationResponse
     */
    public function setUpdateBrightWallPresentationResult($UpdateBrightWallPresentationResult)
    {
      $this->UpdateBrightWallPresentationResult = $UpdateBrightWallPresentationResult;
      return $this;
    }

}
