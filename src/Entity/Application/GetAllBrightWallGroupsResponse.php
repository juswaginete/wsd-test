<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetAllBrightWallGroupsResponse
{

    /**
     * @var PagedBrightWallGroupList $GetAllBrightWallGroupsResult
     */
    protected $GetAllBrightWallGroupsResult = null;

    /**
     * @param PagedBrightWallGroupList $GetAllBrightWallGroupsResult
     */
    public function __construct($GetAllBrightWallGroupsResult)
    {
      $this->GetAllBrightWallGroupsResult = $GetAllBrightWallGroupsResult;
    }

    /**
     * @return PagedBrightWallGroupList
     */
    public function getGetAllBrightWallGroupsResult()
    {
      return $this->GetAllBrightWallGroupsResult;
    }

    /**
     * @param PagedBrightWallGroupList $GetAllBrightWallGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetAllBrightWallGroupsResponse
     */
    public function setGetAllBrightWallGroupsResult($GetAllBrightWallGroupsResult)
    {
      $this->GetAllBrightWallGroupsResult = $GetAllBrightWallGroupsResult;
      return $this;
    }

}
