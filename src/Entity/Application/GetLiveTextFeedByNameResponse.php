<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveTextFeedByNameResponse
{

    /**
     * @var LiveTextFeed $GetLiveTextFeedByNameResult
     */
    protected $GetLiveTextFeedByNameResult = null;

    /**
     * @param LiveTextFeed $GetLiveTextFeedByNameResult
     */
    public function __construct($GetLiveTextFeedByNameResult)
    {
      $this->GetLiveTextFeedByNameResult = $GetLiveTextFeedByNameResult;
    }

    /**
     * @return LiveTextFeed
     */
    public function getGetLiveTextFeedByNameResult()
    {
      return $this->GetLiveTextFeedByNameResult;
    }

    /**
     * @param LiveTextFeed $GetLiveTextFeedByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveTextFeedByNameResponse
     */
    public function setGetLiveTextFeedByNameResult($GetLiveTextFeedByNameResult)
    {
      $this->GetLiveTextFeedByNameResult = $GetLiveTextFeedByNameResult;
      return $this;
    }

}
