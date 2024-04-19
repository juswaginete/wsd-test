<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteBrightWallConfigurations
{

    /**
     * @var ArrayOfint $configurationIds
     */
    protected $configurationIds = null;

    /**
     * @param ArrayOfint $configurationIds
     */
    public function __construct($configurationIds)
    {
      $this->configurationIds = $configurationIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getConfigurationIds()
    {
      return $this->configurationIds;
    }

    /**
     * @param ArrayOfint $configurationIds
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWallConfigurations
     */
    public function setConfigurationIds($configurationIds)
    {
      $this->configurationIds = $configurationIds;
      return $this;
    }

}
