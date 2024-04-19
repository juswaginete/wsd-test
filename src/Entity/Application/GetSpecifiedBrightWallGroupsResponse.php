<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedBrightWallGroupsResponse
{

    /**
     * @var ArrayOfBrightWallGroup $GetSpecifiedBrightWallGroupsResult
     */
    protected $GetSpecifiedBrightWallGroupsResult = null;

    /**
     * @param ArrayOfBrightWallGroup $GetSpecifiedBrightWallGroupsResult
     */
    public function __construct($GetSpecifiedBrightWallGroupsResult)
    {
      $this->GetSpecifiedBrightWallGroupsResult = $GetSpecifiedBrightWallGroupsResult;
    }

    /**
     * @return ArrayOfBrightWallGroup
     */
    public function getGetSpecifiedBrightWallGroupsResult()
    {
      return $this->GetSpecifiedBrightWallGroupsResult;
    }

    /**
     * @param ArrayOfBrightWallGroup $GetSpecifiedBrightWallGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedBrightWallGroupsResponse
     */
    public function setGetSpecifiedBrightWallGroupsResult($GetSpecifiedBrightWallGroupsResult)
    {
      $this->GetSpecifiedBrightWallGroupsResult = $GetSpecifiedBrightWallGroupsResult;
      return $this;
    }

}
