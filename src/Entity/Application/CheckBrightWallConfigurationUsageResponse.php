<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallConfigurationUsageResponse
{

    /**
     * @var boolean $CheckBrightWallConfigurationUsageResult
     */
    protected $CheckBrightWallConfigurationUsageResult = null;

    /**
     * @param boolean $CheckBrightWallConfigurationUsageResult
     */
    public function __construct($CheckBrightWallConfigurationUsageResult)
    {
      $this->CheckBrightWallConfigurationUsageResult = $CheckBrightWallConfigurationUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallConfigurationUsageResult()
    {
      return $this->CheckBrightWallConfigurationUsageResult;
    }

    /**
     * @param boolean $CheckBrightWallConfigurationUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallConfigurationUsageResponse
     */
    public function setCheckBrightWallConfigurationUsageResult($CheckBrightWallConfigurationUsageResult)
    {
      $this->CheckBrightWallConfigurationUsageResult = $CheckBrightWallConfigurationUsageResult;
      return $this;
    }

}
