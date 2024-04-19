<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallResponse
{

    /**
     * @var BrightWall $GetBrightWallResult
     */
    protected $GetBrightWallResult = null;

    /**
     * @param BrightWall $GetBrightWallResult
     */
    public function __construct($GetBrightWallResult)
    {
      $this->GetBrightWallResult = $GetBrightWallResult;
    }

    /**
     * @return BrightWall
     */
    public function getGetBrightWallResult()
    {
      return $this->GetBrightWallResult;
    }

    /**
     * @param BrightWall $GetBrightWallResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallResponse
     */
    public function setGetBrightWallResult($GetBrightWallResult)
    {
      $this->GetBrightWallResult = $GetBrightWallResult;
      return $this;
    }

}
