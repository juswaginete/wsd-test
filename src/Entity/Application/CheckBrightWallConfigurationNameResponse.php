<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallConfigurationNameResponse
{

    /**
     * @var boolean $CheckBrightWallConfigurationNameResult
     */
    protected $CheckBrightWallConfigurationNameResult = null;

    /**
     * @param boolean $CheckBrightWallConfigurationNameResult
     */
    public function __construct($CheckBrightWallConfigurationNameResult)
    {
      $this->CheckBrightWallConfigurationNameResult = $CheckBrightWallConfigurationNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallConfigurationNameResult()
    {
      return $this->CheckBrightWallConfigurationNameResult;
    }

    /**
     * @param boolean $CheckBrightWallConfigurationNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallConfigurationNameResponse
     */
    public function setCheckBrightWallConfigurationNameResult($CheckBrightWallConfigurationNameResult)
    {
      $this->CheckBrightWallConfigurationNameResult = $CheckBrightWallConfigurationNameResult;
      return $this;
    }

}
