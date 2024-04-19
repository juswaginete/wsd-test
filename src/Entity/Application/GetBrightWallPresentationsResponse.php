<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallPresentationsResponse
{

    /**
     * @var PagedBrightWallPresentationList $GetBrightWallPresentationsResult
     */
    protected $GetBrightWallPresentationsResult = null;

    /**
     * @param PagedBrightWallPresentationList $GetBrightWallPresentationsResult
     */
    public function __construct($GetBrightWallPresentationsResult)
    {
      $this->GetBrightWallPresentationsResult = $GetBrightWallPresentationsResult;
    }

    /**
     * @return PagedBrightWallPresentationList
     */
    public function getGetBrightWallPresentationsResult()
    {
      return $this->GetBrightWallPresentationsResult;
    }

    /**
     * @param PagedBrightWallPresentationList $GetBrightWallPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallPresentationsResponse
     */
    public function setGetBrightWallPresentationsResult($GetBrightWallPresentationsResult)
    {
      $this->GetBrightWallPresentationsResult = $GetBrightWallPresentationsResult;
      return $this;
    }

}
