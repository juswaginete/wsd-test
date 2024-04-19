<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateBrightWallPresentationResponse
{

    /**
     * @var BrightWallPresentation $CreateBrightWallPresentationResult
     */
    protected $CreateBrightWallPresentationResult = null;

    /**
     * @param BrightWallPresentation $CreateBrightWallPresentationResult
     */
    public function __construct($CreateBrightWallPresentationResult)
    {
      $this->CreateBrightWallPresentationResult = $CreateBrightWallPresentationResult;
    }

    /**
     * @return BrightWallPresentation
     */
    public function getCreateBrightWallPresentationResult()
    {
      return $this->CreateBrightWallPresentationResult;
    }

    /**
     * @param BrightWallPresentation $CreateBrightWallPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateBrightWallPresentationResponse
     */
    public function setCreateBrightWallPresentationResult($CreateBrightWallPresentationResult)
    {
      $this->CreateBrightWallPresentationResult = $CreateBrightWallPresentationResult;
      return $this;
    }

}
