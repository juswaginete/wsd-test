<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateBrightWallResponse
{

    /**
     * @var BrightWall $CreateBrightWallResult
     */
    protected $CreateBrightWallResult = null;

    /**
     * @param BrightWall $CreateBrightWallResult
     */
    public function __construct($CreateBrightWallResult)
    {
      $this->CreateBrightWallResult = $CreateBrightWallResult;
    }

    /**
     * @return BrightWall
     */
    public function getCreateBrightWallResult()
    {
      return $this->CreateBrightWallResult;
    }

    /**
     * @param BrightWall $CreateBrightWallResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateBrightWallResponse
     */
    public function setCreateBrightWallResult($CreateBrightWallResult)
    {
      $this->CreateBrightWallResult = $CreateBrightWallResult;
      return $this;
    }

}
