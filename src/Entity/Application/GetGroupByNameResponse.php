<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetGroupByNameResponse
{

    /**
     * @var Group $GetGroupByNameResult
     */
    protected $GetGroupByNameResult = null;

    /**
     * @param Group $GetGroupByNameResult
     */
    public function __construct($GetGroupByNameResult)
    {
      $this->GetGroupByNameResult = $GetGroupByNameResult;
    }

    /**
     * @return Group
     */
    public function getGetGroupByNameResult()
    {
      return $this->GetGroupByNameResult;
    }

    /**
     * @param Group $GetGroupByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupByNameResponse
     */
    public function setGetGroupByNameResult($GetGroupByNameResult)
    {
      $this->GetGroupByNameResult = $GetGroupByNameResult;
      return $this;
    }

}
