<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallGroupResponse
{

    /**
     * @var BrightWallGroup $GetBrightWallGroupResult
     */
    protected $GetBrightWallGroupResult = null;

    /**
     * @param BrightWallGroup $GetBrightWallGroupResult
     */
    public function __construct($GetBrightWallGroupResult)
    {
      $this->GetBrightWallGroupResult = $GetBrightWallGroupResult;
    }

    /**
     * @return BrightWallGroup
     */
    public function getGetBrightWallGroupResult()
    {
      return $this->GetBrightWallGroupResult;
    }

    /**
     * @param BrightWallGroup $GetBrightWallGroupResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroupResponse
     */
    public function setGetBrightWallGroupResult($GetBrightWallGroupResult)
    {
      $this->GetBrightWallGroupResult = $GetBrightWallGroupResult;
      return $this;
    }

}
