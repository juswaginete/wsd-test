<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveMediaFeedResponse
{

    /**
     * @var LiveMediaFeed $GetLiveMediaFeedResult
     */
    protected $GetLiveMediaFeedResult = null;

    /**
     * @param LiveMediaFeed $GetLiveMediaFeedResult
     */
    public function __construct($GetLiveMediaFeedResult)
    {
      $this->GetLiveMediaFeedResult = $GetLiveMediaFeedResult;
    }

    /**
     * @return LiveMediaFeed
     */
    public function getGetLiveMediaFeedResult()
    {
      return $this->GetLiveMediaFeedResult;
    }

    /**
     * @param LiveMediaFeed $GetLiveMediaFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveMediaFeedResponse
     */
    public function setGetLiveMediaFeedResult($GetLiveMediaFeedResult)
    {
      $this->GetLiveMediaFeedResult = $GetLiveMediaFeedResult;
      return $this;
    }

}
