<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateBrightWallConfigurationResponse
{

    /**
     * @var BrightWallConfiguration $CreateBrightWallConfigurationResult
     */
    protected $CreateBrightWallConfigurationResult = null;

    /**
     * @param BrightWallConfiguration $CreateBrightWallConfigurationResult
     */
    public function __construct($CreateBrightWallConfigurationResult)
    {
      $this->CreateBrightWallConfigurationResult = $CreateBrightWallConfigurationResult;
    }

    /**
     * @return BrightWallConfiguration
     */
    public function getCreateBrightWallConfigurationResult()
    {
      return $this->CreateBrightWallConfigurationResult;
    }

    /**
     * @param BrightWallConfiguration $CreateBrightWallConfigurationResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateBrightWallConfigurationResponse
     */
    public function setCreateBrightWallConfigurationResult($CreateBrightWallConfigurationResult)
    {
      $this->CreateBrightWallConfigurationResult = $CreateBrightWallConfigurationResult;
      return $this;
    }

}
