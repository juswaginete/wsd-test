<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckLiveTextFeedUsageByNameResponse
{

    /**
     * @var boolean $CheckLiveTextFeedUsageByNameResult
     */
    protected $CheckLiveTextFeedUsageByNameResult = null;

    /**
     * @param boolean $CheckLiveTextFeedUsageByNameResult
     */
    public function __construct($CheckLiveTextFeedUsageByNameResult)
    {
      $this->CheckLiveTextFeedUsageByNameResult = $CheckLiveTextFeedUsageByNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckLiveTextFeedUsageByNameResult()
    {
      return $this->CheckLiveTextFeedUsageByNameResult;
    }

    /**
     * @param boolean $CheckLiveTextFeedUsageByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckLiveTextFeedUsageByNameResponse
     */
    public function setCheckLiveTextFeedUsageByNameResult($CheckLiveTextFeedUsageByNameResult)
    {
      $this->CheckLiveTextFeedUsageByNameResult = $CheckLiveTextFeedUsageByNameResult;
      return $this;
    }

}
