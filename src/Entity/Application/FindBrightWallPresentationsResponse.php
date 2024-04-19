<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindBrightWallPresentationsResponse
{

    /**
     * @var PagedBrightWallPresentationList $FindBrightWallPresentationsResult
     */
    protected $FindBrightWallPresentationsResult = null;

    /**
     * @param PagedBrightWallPresentationList $FindBrightWallPresentationsResult
     */
    public function __construct($FindBrightWallPresentationsResult)
    {
      $this->FindBrightWallPresentationsResult = $FindBrightWallPresentationsResult;
    }

    /**
     * @return PagedBrightWallPresentationList
     */
    public function getFindBrightWallPresentationsResult()
    {
      return $this->FindBrightWallPresentationsResult;
    }

    /**
     * @param PagedBrightWallPresentationList $FindBrightWallPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindBrightWallPresentationsResponse
     */
    public function setFindBrightWallPresentationsResult($FindBrightWallPresentationsResult)
    {
      $this->FindBrightWallPresentationsResult = $FindBrightWallPresentationsResult;
      return $this;
    }

}
