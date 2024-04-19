<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallGroupResponse
{

    /**
     * @var boolean $UpdateBrightWallGroupResult
     */
    protected $UpdateBrightWallGroupResult = null;

    /**
     * @param boolean $UpdateBrightWallGroupResult
     */
    public function __construct($UpdateBrightWallGroupResult)
    {
      $this->UpdateBrightWallGroupResult = $UpdateBrightWallGroupResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateBrightWallGroupResult()
    {
      return $this->UpdateBrightWallGroupResult;
    }

    /**
     * @param boolean $UpdateBrightWallGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallGroupResponse
     */
    public function setUpdateBrightWallGroupResult($UpdateBrightWallGroupResult)
    {
      $this->UpdateBrightWallGroupResult = $UpdateBrightWallGroupResult;
      return $this;
    }

}
