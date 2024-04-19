<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetAllBrightWallPresentationsResponse
{

    /**
     * @var PagedBrightWallPresentationList $GetAllBrightWallPresentationsResult
     */
    protected $GetAllBrightWallPresentationsResult = null;

    /**
     * @param PagedBrightWallPresentationList $GetAllBrightWallPresentationsResult
     */
    public function __construct($GetAllBrightWallPresentationsResult)
    {
      $this->GetAllBrightWallPresentationsResult = $GetAllBrightWallPresentationsResult;
    }

    /**
     * @return PagedBrightWallPresentationList
     */
    public function getGetAllBrightWallPresentationsResult()
    {
      return $this->GetAllBrightWallPresentationsResult;
    }

    /**
     * @param PagedBrightWallPresentationList $GetAllBrightWallPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetAllBrightWallPresentationsResponse
     */
    public function setGetAllBrightWallPresentationsResult($GetAllBrightWallPresentationsResult)
    {
      $this->GetAllBrightWallPresentationsResult = $GetAllBrightWallPresentationsResult;
      return $this;
    }

}
