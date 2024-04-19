<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteLiveTextFeedsResponse
{

    /**
     * @var boolean $DeleteLiveTextFeedsResult
     */
    protected $DeleteLiveTextFeedsResult = null;

    /**
     * @param boolean $DeleteLiveTextFeedsResult
     */
    public function __construct($DeleteLiveTextFeedsResult)
    {
      $this->DeleteLiveTextFeedsResult = $DeleteLiveTextFeedsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteLiveTextFeedsResult()
    {
      return $this->DeleteLiveTextFeedsResult;
    }

    /**
     * @param boolean $DeleteLiveTextFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteLiveTextFeedsResponse
     */
    public function setDeleteLiveTextFeedsResult($DeleteLiveTextFeedsResult)
    {
      $this->DeleteLiveTextFeedsResult = $DeleteLiveTextFeedsResult;
      return $this;
    }

}
