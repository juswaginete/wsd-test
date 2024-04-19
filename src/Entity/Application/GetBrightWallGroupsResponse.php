<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallGroupsResponse
{

    /**
     * @var PagedBrightWallGroupList $GetBrightWallGroupsResult
     */
    protected $GetBrightWallGroupsResult = null;

    /**
     * @param PagedBrightWallGroupList $GetBrightWallGroupsResult
     */
    public function __construct($GetBrightWallGroupsResult)
    {
      $this->GetBrightWallGroupsResult = $GetBrightWallGroupsResult;
    }

    /**
     * @return PagedBrightWallGroupList
     */
    public function getGetBrightWallGroupsResult()
    {
      return $this->GetBrightWallGroupsResult;
    }

    /**
     * @param PagedBrightWallGroupList $GetBrightWallGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroupsResponse
     */
    public function setGetBrightWallGroupsResult($GetBrightWallGroupsResult)
    {
      $this->GetBrightWallGroupsResult = $GetBrightWallGroupsResult;
      return $this;
    }

}
