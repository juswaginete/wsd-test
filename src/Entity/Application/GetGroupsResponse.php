<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetGroupsResponse
{

    /**
     * @var PagedGroupList $GetGroupsResult
     */
    protected $GetGroupsResult = null;

    /**
     * @param PagedGroupList $GetGroupsResult
     */
    public function __construct($GetGroupsResult)
    {
      $this->GetGroupsResult = $GetGroupsResult;
    }

    /**
     * @return PagedGroupList
     */
    public function getGetGroupsResult()
    {
      return $this->GetGroupsResult;
    }

    /**
     * @param PagedGroupList $GetGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupsResponse
     */
    public function setGetGroupsResult($GetGroupsResult)
    {
      $this->GetGroupsResult = $GetGroupsResult;
      return $this;
    }

}
