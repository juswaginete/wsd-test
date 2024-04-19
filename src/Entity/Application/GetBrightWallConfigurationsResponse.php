<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallConfigurationsResponse
{

    /**
     * @var PagedBrightWallConfigurationList $GetBrightWallConfigurationsResult
     */
    protected $GetBrightWallConfigurationsResult = null;

    /**
     * @param PagedBrightWallConfigurationList $GetBrightWallConfigurationsResult
     */
    public function __construct($GetBrightWallConfigurationsResult)
    {
      $this->GetBrightWallConfigurationsResult = $GetBrightWallConfigurationsResult;
    }

    /**
     * @return PagedBrightWallConfigurationList
     */
    public function getGetBrightWallConfigurationsResult()
    {
      return $this->GetBrightWallConfigurationsResult;
    }

    /**
     * @param PagedBrightWallConfigurationList $GetBrightWallConfigurationsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallConfigurationsResponse
     */
    public function setGetBrightWallConfigurationsResult($GetBrightWallConfigurationsResult)
    {
      $this->GetBrightWallConfigurationsResult = $GetBrightWallConfigurationsResult;
      return $this;
    }

}
