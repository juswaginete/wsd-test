<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallConfigurationByNameResponse
{

    /**
     * @var BrightWallConfiguration $GetBrightWallConfigurationByNameResult
     */
    protected $GetBrightWallConfigurationByNameResult = null;

    /**
     * @param BrightWallConfiguration $GetBrightWallConfigurationByNameResult
     */
    public function __construct($GetBrightWallConfigurationByNameResult)
    {
      $this->GetBrightWallConfigurationByNameResult = $GetBrightWallConfigurationByNameResult;
    }

    /**
     * @return BrightWallConfiguration
     */
    public function getGetBrightWallConfigurationByNameResult()
    {
      return $this->GetBrightWallConfigurationByNameResult;
    }

    /**
     * @param BrightWallConfiguration $GetBrightWallConfigurationByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallConfigurationByNameResponse
     */
    public function setGetBrightWallConfigurationByNameResult($GetBrightWallConfigurationByNameResult)
    {
      $this->GetBrightWallConfigurationByNameResult = $GetBrightWallConfigurationByNameResult;
      return $this;
    }

}
