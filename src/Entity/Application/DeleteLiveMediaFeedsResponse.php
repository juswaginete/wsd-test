<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteLiveMediaFeedsResponse
{

    /**
     * @var boolean $DeleteLiveMediaFeedsResult
     */
    protected $DeleteLiveMediaFeedsResult = null;

    /**
     * @param boolean $DeleteLiveMediaFeedsResult
     */
    public function __construct($DeleteLiveMediaFeedsResult)
    {
      $this->DeleteLiveMediaFeedsResult = $DeleteLiveMediaFeedsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteLiveMediaFeedsResult()
    {
      return $this->DeleteLiveMediaFeedsResult;
    }

    /**
     * @param boolean $DeleteLiveMediaFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteLiveMediaFeedsResponse
     */
    public function setDeleteLiveMediaFeedsResult($DeleteLiveMediaFeedsResult)
    {
      $this->DeleteLiveMediaFeedsResult = $DeleteLiveMediaFeedsResult;
      return $this;
    }

}
