<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteBrightWallPresentationsResponse
{

    /**
     * @var boolean $DeleteBrightWallPresentationsResult
     */
    protected $DeleteBrightWallPresentationsResult = null;

    /**
     * @param boolean $DeleteBrightWallPresentationsResult
     */
    public function __construct($DeleteBrightWallPresentationsResult)
    {
      $this->DeleteBrightWallPresentationsResult = $DeleteBrightWallPresentationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteBrightWallPresentationsResult()
    {
      return $this->DeleteBrightWallPresentationsResult;
    }

    /**
     * @param boolean $DeleteBrightWallPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteBrightWallPresentationsResponse
     */
    public function setDeleteBrightWallPresentationsResult($DeleteBrightWallPresentationsResult)
    {
      $this->DeleteBrightWallPresentationsResult = $DeleteBrightWallPresentationsResult;
      return $this;
    }

}
