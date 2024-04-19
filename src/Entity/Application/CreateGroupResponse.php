<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateGroupResponse
{

    /**
     * @var Group $CreateGroupResult
     */
    protected $CreateGroupResult = null;

    /**
     * @param Group $CreateGroupResult
     */
    public function __construct($CreateGroupResult)
    {
      $this->CreateGroupResult = $CreateGroupResult;
    }

    /**
     * @return Group
     */
    public function getCreateGroupResult()
    {
      return $this->CreateGroupResult;
    }

    /**
     * @param Group $CreateGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateGroupResponse
     */
    public function setCreateGroupResult($CreateGroupResult)
    {
      $this->CreateGroupResult = $CreateGroupResult;
      return $this;
    }

}
