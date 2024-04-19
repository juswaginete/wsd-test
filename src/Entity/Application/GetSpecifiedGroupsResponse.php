<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedGroupsResponse
{

    /**
     * @var ArrayOfGroup $GetSpecifiedGroupsResult
     */
    protected $GetSpecifiedGroupsResult = null;

    /**
     * @param ArrayOfGroup $GetSpecifiedGroupsResult
     */
    public function __construct($GetSpecifiedGroupsResult)
    {
      $this->GetSpecifiedGroupsResult = $GetSpecifiedGroupsResult;
    }

    /**
     * @return ArrayOfGroup
     */
    public function getGetSpecifiedGroupsResult()
    {
      return $this->GetSpecifiedGroupsResult;
    }

    /**
     * @param ArrayOfGroup $GetSpecifiedGroupsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedGroupsResponse
     */
    public function setGetSpecifiedGroupsResult($GetSpecifiedGroupsResult)
    {
      $this->GetSpecifiedGroupsResult = $GetSpecifiedGroupsResult;
      return $this;
    }

}
