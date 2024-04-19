<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallConfiguration
{

    /**
     * @var int $configurationId
     */
    protected $configurationId = null;

    /**
     * @param int $configurationId
     */
    public function __construct($configurationId)
    {
      $this->configurationId = $configurationId;
    }

    /**
     * @return int
     */
    public function getConfigurationId()
    {
      return $this->configurationId;
    }

    /**
     * @param int $configurationId
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallConfiguration
     */
    public function setConfigurationId($configurationId)
    {
      $this->configurationId = $configurationId;
      return $this;
    }

}
