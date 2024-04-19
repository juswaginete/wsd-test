<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallConfigurationByNameResponse
{

    /**
     * @var boolean $CheckBrightWallConfigurationByNameResult
     */
    protected $CheckBrightWallConfigurationByNameResult = null;

    /**
     * @param boolean $CheckBrightWallConfigurationByNameResult
     */
    public function __construct($CheckBrightWallConfigurationByNameResult)
    {
      $this->CheckBrightWallConfigurationByNameResult = $CheckBrightWallConfigurationByNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallConfigurationByNameResult()
    {
      return $this->CheckBrightWallConfigurationByNameResult;
    }

    /**
     * @param boolean $CheckBrightWallConfigurationByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallConfigurationByNameResponse
     */
    public function setCheckBrightWallConfigurationByNameResult($CheckBrightWallConfigurationByNameResult)
    {
      $this->CheckBrightWallConfigurationByNameResult = $CheckBrightWallConfigurationByNameResult;
      return $this;
    }

}
