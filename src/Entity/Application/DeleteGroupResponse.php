<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteGroupResponse
{

    /**
     * @var boolean $DeleteGroupResult
     */
    protected $DeleteGroupResult = null;

    /**
     * @param boolean $DeleteGroupResult
     */
    public function __construct($DeleteGroupResult)
    {
      $this->DeleteGroupResult = $DeleteGroupResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteGroupResult()
    {
      return $this->DeleteGroupResult;
    }

    /**
     * @param boolean $DeleteGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteGroupResponse
     */
    public function setDeleteGroupResult($DeleteGroupResult)
    {
      $this->DeleteGroupResult = $DeleteGroupResult;
      return $this;
    }

}
