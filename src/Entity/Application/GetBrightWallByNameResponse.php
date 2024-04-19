<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallByNameResponse
{

    /**
     * @var BrightWall $GetBrightWallByNameResult
     */
    protected $GetBrightWallByNameResult = null;

    /**
     * @param BrightWall $GetBrightWallByNameResult
     */
    public function __construct($GetBrightWallByNameResult)
    {
      $this->GetBrightWallByNameResult = $GetBrightWallByNameResult;
    }

    /**
     * @return BrightWall
     */
    public function getGetBrightWallByNameResult()
    {
      return $this->GetBrightWallByNameResult;
    }

    /**
     * @param BrightWall $GetBrightWallByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallByNameResponse
     */
    public function setGetBrightWallByNameResult($GetBrightWallByNameResult)
    {
      $this->GetBrightWallByNameResult = $GetBrightWallByNameResult;
      return $this;
    }

}
