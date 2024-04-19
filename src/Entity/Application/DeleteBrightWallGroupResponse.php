<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteBrightWallGroupResponse
{

    /**
     * @var boolean $DeleteBrightWallGroupResult
     */
    protected $DeleteBrightWallGroupResult = null;

    /**
     * @param boolean $DeleteBrightWallGroupResult
     */
    public function __construct($DeleteBrightWallGroupResult)
    {
      $this->DeleteBrightWallGroupResult = $DeleteBrightWallGroupResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteBrightWallGroupResult()
    {
      return $this->DeleteBrightWallGroupResult;
    }

    /**
     * @param boolean $DeleteBrightWallGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWallGroupResponse
     */
    public function setDeleteBrightWallGroupResult($DeleteBrightWallGroupResult)
    {
      $this->DeleteBrightWallGroupResult = $DeleteBrightWallGroupResult;
      return $this;
    }

}
