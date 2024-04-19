<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckLiveTextFeedNameResponse
{

    /**
     * @var boolean $CheckLiveTextFeedNameResult
     */
    protected $CheckLiveTextFeedNameResult = null;

    /**
     * @param boolean $CheckLiveTextFeedNameResult
     */
    public function __construct($CheckLiveTextFeedNameResult)
    {
      $this->CheckLiveTextFeedNameResult = $CheckLiveTextFeedNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckLiveTextFeedNameResult()
    {
      return $this->CheckLiveTextFeedNameResult;
    }

    /**
     * @param boolean $CheckLiveTextFeedNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckLiveTextFeedNameResponse
     */
    public function setCheckLiveTextFeedNameResult($CheckLiveTextFeedNameResult)
    {
      $this->CheckLiveTextFeedNameResult = $CheckLiveTextFeedNameResult;
      return $this;
    }

}
