<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteBrightWallResponse
{

    /**
     * @var boolean $DeleteBrightWallResult
     */
    protected $DeleteBrightWallResult = null;

    /**
     * @param boolean $DeleteBrightWallResult
     */
    public function __construct($DeleteBrightWallResult)
    {
      $this->DeleteBrightWallResult = $DeleteBrightWallResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteBrightWallResult()
    {
      return $this->DeleteBrightWallResult;
    }

    /**
     * @param boolean $DeleteBrightWallResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWallResponse
     */
    public function setDeleteBrightWallResult($DeleteBrightWallResult)
    {
      $this->DeleteBrightWallResult = $DeleteBrightWallResult;
      return $this;
    }

}
