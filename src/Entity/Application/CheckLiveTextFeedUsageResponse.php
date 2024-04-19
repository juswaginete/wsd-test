<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckLiveTextFeedUsageResponse
{

    /**
     * @var boolean $CheckLiveTextFeedUsageResult
     */
    protected $CheckLiveTextFeedUsageResult = null;

    /**
     * @param boolean $CheckLiveTextFeedUsageResult
     */
    public function __construct($CheckLiveTextFeedUsageResult)
    {
      $this->CheckLiveTextFeedUsageResult = $CheckLiveTextFeedUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckLiveTextFeedUsageResult()
    {
      return $this->CheckLiveTextFeedUsageResult;
    }

    /**
     * @param boolean $CheckLiveTextFeedUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckLiveTextFeedUsageResponse
     */
    public function setCheckLiveTextFeedUsageResult($CheckLiveTextFeedUsageResult)
    {
      $this->CheckLiveTextFeedUsageResult = $CheckLiveTextFeedUsageResult;
      return $this;
    }

}
