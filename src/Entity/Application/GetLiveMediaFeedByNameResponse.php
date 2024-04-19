<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveMediaFeedByNameResponse
{

    /**
     * @var LiveMediaFeed $GetLiveMediaFeedByNameResult
     */
    protected $GetLiveMediaFeedByNameResult = null;

    /**
     * @param LiveMediaFeed $GetLiveMediaFeedByNameResult
     */
    public function __construct($GetLiveMediaFeedByNameResult)
    {
      $this->GetLiveMediaFeedByNameResult = $GetLiveMediaFeedByNameResult;
    }

    /**
     * @return LiveMediaFeed
     */
    public function getGetLiveMediaFeedByNameResult()
    {
      return $this->GetLiveMediaFeedByNameResult;
    }

    /**
     * @param LiveMediaFeed $GetLiveMediaFeedByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveMediaFeedByNameResponse
     */
    public function setGetLiveMediaFeedByNameResult($GetLiveMediaFeedByNameResult)
    {
      $this->GetLiveMediaFeedByNameResult = $GetLiveMediaFeedByNameResult;
      return $this;
    }

}
