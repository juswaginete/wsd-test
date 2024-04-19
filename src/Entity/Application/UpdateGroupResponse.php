<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateGroupResponse
{

    /**
     * @var boolean $UpdateGroupResult
     */
    protected $UpdateGroupResult = null;

    /**
     * @param boolean $UpdateGroupResult
     */
    public function __construct($UpdateGroupResult)
    {
      $this->UpdateGroupResult = $UpdateGroupResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateGroupResult()
    {
      return $this->UpdateGroupResult;
    }

    /**
     * @param boolean $UpdateGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupResponse
     */
    public function setUpdateGroupResult($UpdateGroupResult)
    {
      $this->UpdateGroupResult = $UpdateGroupResult;
      return $this;
    }

}
