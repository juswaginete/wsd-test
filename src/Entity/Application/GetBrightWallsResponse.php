<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallsResponse
{

    /**
     * @var PagedBrightWallList $GetBrightWallsResult
     */
    protected $GetBrightWallsResult = null;

    /**
     * @param PagedBrightWallList $GetBrightWallsResult
     */
    public function __construct($GetBrightWallsResult)
    {
      $this->GetBrightWallsResult = $GetBrightWallsResult;
    }

    /**
     * @return PagedBrightWallList
     */
    public function getGetBrightWallsResult()
    {
      return $this->GetBrightWallsResult;
    }

    /**
     * @param PagedBrightWallList $GetBrightWallsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallsResponse
     */
    public function setGetBrightWallsResult($GetBrightWallsResult)
    {
      $this->GetBrightWallsResult = $GetBrightWallsResult;
      return $this;
    }

}
