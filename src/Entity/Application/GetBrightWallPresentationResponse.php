<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallPresentationResponse
{

    /**
     * @var BrightWallPresentation $GetBrightWallPresentationResult
     */
    protected $GetBrightWallPresentationResult = null;

    /**
     * @param BrightWallPresentation $GetBrightWallPresentationResult
     */
    public function __construct($GetBrightWallPresentationResult)
    {
      $this->GetBrightWallPresentationResult = $GetBrightWallPresentationResult;
    }

    /**
     * @return BrightWallPresentation
     */
    public function getGetBrightWallPresentationResult()
    {
      return $this->GetBrightWallPresentationResult;
    }

    /**
     * @param BrightWallPresentation $GetBrightWallPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallPresentationResponse
     */
    public function setGetBrightWallPresentationResult($GetBrightWallPresentationResult)
    {
      $this->GetBrightWallPresentationResult = $GetBrightWallPresentationResult;
      return $this;
    }

}
