<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindGroupsResponse
{

    /**
     * @var PagedGroupList $FindGroupsResult
     */
    protected $FindGroupsResult = null;

    /**
     * @param PagedGroupList $FindGroupsResult
     */
    public function __construct($FindGroupsResult)
    {
      $this->FindGroupsResult = $FindGroupsResult;
    }

    /**
     * @return PagedGroupList
     */
    public function getFindGroupsResult()
    {
      return $this->FindGroupsResult;
    }

    /**
     * @param PagedGroupList $FindGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindGroupsResponse
     */
    public function setFindGroupsResult($FindGroupsResult)
    {
      $this->FindGroupsResult = $FindGroupsResult;
      return $this;
    }

}
