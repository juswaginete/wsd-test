<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallPresentationByNameResponse
{

    /**
     * @var BrightWallPresentation $GetBrightWallPresentationByNameResult
     */
    protected $GetBrightWallPresentationByNameResult = null;

    /**
     * @param BrightWallPresentation $GetBrightWallPresentationByNameResult
     */
    public function __construct($GetBrightWallPresentationByNameResult)
    {
      $this->GetBrightWallPresentationByNameResult = $GetBrightWallPresentationByNameResult;
    }

    /**
     * @return BrightWallPresentation
     */
    public function getGetBrightWallPresentationByNameResult()
    {
      return $this->GetBrightWallPresentationByNameResult;
    }

    /**
     * @param BrightWallPresentation $GetBrightWallPresentationByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallPresentationByNameResponse
     */
    public function setGetBrightWallPresentationByNameResult($GetBrightWallPresentationByNameResult)
    {
      $this->GetBrightWallPresentationByNameResult = $GetBrightWallPresentationByNameResult;
      return $this;
    }

}
