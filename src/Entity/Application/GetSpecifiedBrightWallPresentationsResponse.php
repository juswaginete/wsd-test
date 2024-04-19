<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedBrightWallPresentationsResponse
{

    /**
     * @var ArrayOfBrightWallPresentation $GetSpecifiedBrightWallPresentationsResult
     */
    protected $GetSpecifiedBrightWallPresentationsResult = null;

    /**
     * @param ArrayOfBrightWallPresentation $GetSpecifiedBrightWallPresentationsResult
     */
    public function __construct($GetSpecifiedBrightWallPresentationsResult)
    {
      $this->GetSpecifiedBrightWallPresentationsResult = $GetSpecifiedBrightWallPresentationsResult;
    }

    /**
     * @return ArrayOfBrightWallPresentation
     */
    public function getGetSpecifiedBrightWallPresentationsResult()
    {
      return $this->GetSpecifiedBrightWallPresentationsResult;
    }

    /**
     * @param ArrayOfBrightWallPresentation $GetSpecifiedBrightWallPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedBrightWallPresentationsResponse
     */
    public function setGetSpecifiedBrightWallPresentationsResult($GetSpecifiedBrightWallPresentationsResult)
    {
      $this->GetSpecifiedBrightWallPresentationsResult = $GetSpecifiedBrightWallPresentationsResult;
      return $this;
    }

}
