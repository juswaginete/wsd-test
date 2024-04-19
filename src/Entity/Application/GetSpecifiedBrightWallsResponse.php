<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedBrightWallsResponse
{

    /**
     * @var ArrayOfBrightWall $GetSpecifiedBrightWallsResult
     */
    protected $GetSpecifiedBrightWallsResult = null;

    /**
     * @param ArrayOfBrightWall $GetSpecifiedBrightWallsResult
     */
    public function __construct($GetSpecifiedBrightWallsResult)
    {
      $this->GetSpecifiedBrightWallsResult = $GetSpecifiedBrightWallsResult;
    }

    /**
     * @return ArrayOfBrightWall
     */
    public function getGetSpecifiedBrightWallsResult()
    {
      return $this->GetSpecifiedBrightWallsResult;
    }

    /**
     * @param ArrayOfBrightWall $GetSpecifiedBrightWallsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedBrightWallsResponse
     */
    public function setGetSpecifiedBrightWallsResult($GetSpecifiedBrightWallsResult)
    {
      $this->GetSpecifiedBrightWallsResult = $GetSpecifiedBrightWallsResult;
      return $this;
    }

}
