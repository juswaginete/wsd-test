<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateBrightWallGroupResponse
{

    /**
     * @var BrightWallGroup $CreateBrightWallGroupResult
     */
    protected $CreateBrightWallGroupResult = null;

    /**
     * @param BrightWallGroup $CreateBrightWallGroupResult
     */
    public function __construct($CreateBrightWallGroupResult)
    {
      $this->CreateBrightWallGroupResult = $CreateBrightWallGroupResult;
    }

    /**
     * @return BrightWallGroup
     */
    public function getCreateBrightWallGroupResult()
    {
      return $this->CreateBrightWallGroupResult;
    }

    /**
     * @param BrightWallGroup $CreateBrightWallGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateBrightWallGroupResponse
     */
    public function setCreateBrightWallGroupResult($CreateBrightWallGroupResult)
    {
      $this->CreateBrightWallGroupResult = $CreateBrightWallGroupResult;
      return $this;
    }

}
