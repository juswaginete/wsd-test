<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallPresentationUsageByNameResponse
{

    /**
     * @var boolean $CheckBrightWallPresentationUsageByNameResult
     */
    protected $CheckBrightWallPresentationUsageByNameResult = null;

    /**
     * @param boolean $CheckBrightWallPresentationUsageByNameResult
     */
    public function __construct($CheckBrightWallPresentationUsageByNameResult)
    {
      $this->CheckBrightWallPresentationUsageByNameResult = $CheckBrightWallPresentationUsageByNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallPresentationUsageByNameResult()
    {
      return $this->CheckBrightWallPresentationUsageByNameResult;
    }

    /**
     * @param boolean $CheckBrightWallPresentationUsageByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallPresentationUsageByNameResponse
     */
    public function setCheckBrightWallPresentationUsageByNameResult($CheckBrightWallPresentationUsageByNameResult)
    {
      $this->CheckBrightWallPresentationUsageByNameResult = $CheckBrightWallPresentationUsageByNameResult;
      return $this;
    }

}
