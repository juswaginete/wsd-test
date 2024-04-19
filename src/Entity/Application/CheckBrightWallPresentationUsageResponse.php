<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallPresentationUsageResponse
{

    /**
     * @var boolean $CheckBrightWallPresentationUsageResult
     */
    protected $CheckBrightWallPresentationUsageResult = null;

    /**
     * @param boolean $CheckBrightWallPresentationUsageResult
     */
    public function __construct($CheckBrightWallPresentationUsageResult)
    {
      $this->CheckBrightWallPresentationUsageResult = $CheckBrightWallPresentationUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallPresentationUsageResult()
    {
      return $this->CheckBrightWallPresentationUsageResult;
    }

    /**
     * @param boolean $CheckBrightWallPresentationUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallPresentationUsageResponse
     */
    public function setCheckBrightWallPresentationUsageResult($CheckBrightWallPresentationUsageResult)
    {
      $this->CheckBrightWallPresentationUsageResult = $CheckBrightWallPresentationUsageResult;
      return $this;
    }

}
