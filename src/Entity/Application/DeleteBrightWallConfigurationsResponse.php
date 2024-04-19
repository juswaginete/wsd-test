<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteBrightWallConfigurationsResponse
{

    /**
     * @var boolean $DeleteBrightWallConfigurationsResult
     */
    protected $DeleteBrightWallConfigurationsResult = null;

    /**
     * @param boolean $DeleteBrightWallConfigurationsResult
     */
    public function __construct($DeleteBrightWallConfigurationsResult)
    {
      $this->DeleteBrightWallConfigurationsResult = $DeleteBrightWallConfigurationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteBrightWallConfigurationsResult()
    {
      return $this->DeleteBrightWallConfigurationsResult;
    }

    /**
     * @param boolean $DeleteBrightWallConfigurationsResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWallConfigurationsResponse
     */
    public function setDeleteBrightWallConfigurationsResult($DeleteBrightWallConfigurationsResult)
    {
      $this->DeleteBrightWallConfigurationsResult = $DeleteBrightWallConfigurationsResult;
      return $this;
    }

}
