<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindBrightWallGroupsResponse
{

    /**
     * @var PagedBrightWallGroupList $FindBrightWallGroupsResult
     */
    protected $FindBrightWallGroupsResult = null;

    /**
     * @param PagedBrightWallGroupList $FindBrightWallGroupsResult
     */
    public function __construct($FindBrightWallGroupsResult)
    {
      $this->FindBrightWallGroupsResult = $FindBrightWallGroupsResult;
    }

    /**
     * @return PagedBrightWallGroupList
     */
    public function getFindBrightWallGroupsResult()
    {
      return $this->FindBrightWallGroupsResult;
    }

    /**
     * @param PagedBrightWallGroupList $FindBrightWallGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindBrightWallGroupsResponse
     */
    public function setFindBrightWallGroupsResult($FindBrightWallGroupsResult)
    {
      $this->FindBrightWallGroupsResult = $FindBrightWallGroupsResult;
      return $this;
    }

}
