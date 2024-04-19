<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallGroupByNameResponse
{

    /**
     * @var BrightWallGroup $GetBrightWallGroupByNameResult
     */
    protected $GetBrightWallGroupByNameResult = null;

    /**
     * @param BrightWallGroup $GetBrightWallGroupByNameResult
     */
    public function __construct($GetBrightWallGroupByNameResult)
    {
      $this->GetBrightWallGroupByNameResult = $GetBrightWallGroupByNameResult;
    }

    /**
     * @return BrightWallGroup
     */
    public function getGetBrightWallGroupByNameResult()
    {
      return $this->GetBrightWallGroupByNameResult;
    }

    /**
     * @param BrightWallGroup $GetBrightWallGroupByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroupByNameResponse
     */
    public function setGetBrightWallGroupByNameResult($GetBrightWallGroupByNameResult)
    {
      $this->GetBrightWallGroupByNameResult = $GetBrightWallGroupByNameResult;
      return $this;
    }

}
