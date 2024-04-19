<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckLiveMediaFeedNameResponse
{

    /**
     * @var boolean $CheckLiveMediaFeedNameResult
     */
    protected $CheckLiveMediaFeedNameResult = null;

    /**
     * @param boolean $CheckLiveMediaFeedNameResult
     */
    public function __construct($CheckLiveMediaFeedNameResult)
    {
      $this->CheckLiveMediaFeedNameResult = $CheckLiveMediaFeedNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckLiveMediaFeedNameResult()
    {
      return $this->CheckLiveMediaFeedNameResult;
    }

    /**
     * @param boolean $CheckLiveMediaFeedNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckLiveMediaFeedNameResponse
     */
    public function setCheckLiveMediaFeedNameResult($CheckLiveMediaFeedNameResult)
    {
      $this->CheckLiveMediaFeedNameResult = $CheckLiveMediaFeedNameResult;
      return $this;
    }

}
