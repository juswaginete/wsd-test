<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateBrightWallConfigurationResponse
{

    /**
     * @var boolean $UpdateBrightWallConfigurationResult
     */
    protected $UpdateBrightWallConfigurationResult = null;

    /**
     * @param boolean $UpdateBrightWallConfigurationResult
     */
    public function __construct($UpdateBrightWallConfigurationResult)
    {
      $this->UpdateBrightWallConfigurationResult = $UpdateBrightWallConfigurationResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateBrightWallConfigurationResult()
    {
      return $this->UpdateBrightWallConfigurationResult;
    }

    /**
     * @param boolean $UpdateBrightWallConfigurationResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateBrightWallConfigurationResponse
     */
    public function setUpdateBrightWallConfigurationResult($UpdateBrightWallConfigurationResult)
    {
      $this->UpdateBrightWallConfigurationResult = $UpdateBrightWallConfigurationResult;
      return $this;
    }

}
