<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallConfigurationResponse
{

    /**
     * @var BrightWallConfiguration $GetBrightWallConfigurationResult
     */
    protected $GetBrightWallConfigurationResult = null;

    /**
     * @param BrightWallConfiguration $GetBrightWallConfigurationResult
     */
    public function __construct($GetBrightWallConfigurationResult)
    {
      $this->GetBrightWallConfigurationResult = $GetBrightWallConfigurationResult;
    }

    /**
     * @return BrightWallConfiguration
     */
    public function getGetBrightWallConfigurationResult()
    {
      return $this->GetBrightWallConfigurationResult;
    }

    /**
     * @param BrightWallConfiguration $GetBrightWallConfigurationResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallConfigurationResponse
     */
    public function setGetBrightWallConfigurationResult($GetBrightWallConfigurationResult)
    {
      $this->GetBrightWallConfigurationResult = $GetBrightWallConfigurationResult;
      return $this;
    }

}
