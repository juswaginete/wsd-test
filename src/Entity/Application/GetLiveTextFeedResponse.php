<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveTextFeedResponse
{

    /**
     * @var LiveTextFeed $GetLiveTextFeedResult
     */
    protected $GetLiveTextFeedResult = null;

    /**
     * @param LiveTextFeed $GetLiveTextFeedResult
     */
    public function __construct($GetLiveTextFeedResult)
    {
      $this->GetLiveTextFeedResult = $GetLiveTextFeedResult;
    }

    /**
     * @return LiveTextFeed
     */
    public function getGetLiveTextFeedResult()
    {
      return $this->GetLiveTextFeedResult;
    }

    /**
     * @param LiveTextFeed $GetLiveTextFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveTextFeedResponse
     */
    public function setGetLiveTextFeedResult($GetLiveTextFeedResult)
    {
      $this->GetLiveTextFeedResult = $GetLiveTextFeedResult;
      return $this;
    }

}
