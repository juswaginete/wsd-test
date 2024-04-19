<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeletePresentationsResponse
{

    /**
     * @var boolean $DeletePresentationsResult
     */
    protected $DeletePresentationsResult = null;

    /**
     * @param boolean $DeletePresentationsResult
     */
    public function __construct($DeletePresentationsResult)
    {
      $this->DeletePresentationsResult = $DeletePresentationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeletePresentationsResult()
    {
      return $this->DeletePresentationsResult;
    }

    /**
     * @param boolean $DeletePresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\DeletePresentationsResponse
     */
    public function setDeletePresentationsResult($DeletePresentationsResult)
    {
      $this->DeletePresentationsResult = $DeletePresentationsResult;
      return $this;
    }

}
