<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindBrightWallsResponse
{

    /**
     * @var PagedBrightWallList $FindBrightWallsResult
     */
    protected $FindBrightWallsResult = null;

    /**
     * @param PagedBrightWallList $FindBrightWallsResult
     */
    public function __construct($FindBrightWallsResult)
    {
      $this->FindBrightWallsResult = $FindBrightWallsResult;
    }

    /**
     * @return PagedBrightWallList
     */
    public function getFindBrightWallsResult()
    {
      return $this->FindBrightWallsResult;
    }

    /**
     * @param PagedBrightWallList $FindBrightWallsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindBrightWallsResponse
     */
    public function setFindBrightWallsResult($FindBrightWallsResult)
    {
      $this->FindBrightWallsResult = $FindBrightWallsResult;
      return $this;
    }

}
