<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateLiveTextFeedResponse
{

    /**
     * @var LiveTextFeed $CreateLiveTextFeedResult
     */
    protected $CreateLiveTextFeedResult = null;

    /**
     * @param LiveTextFeed $CreateLiveTextFeedResult
     */
    public function __construct($CreateLiveTextFeedResult)
    {
      $this->CreateLiveTextFeedResult = $CreateLiveTextFeedResult;
    }

    /**
     * @return LiveTextFeed
     */
    public function getCreateLiveTextFeedResult()
    {
      return $this->CreateLiveTextFeedResult;
    }

    /**
     * @param LiveTextFeed $CreateLiveTextFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateLiveTextFeedResponse
     */
    public function setCreateLiveTextFeedResult($CreateLiveTextFeedResult)
    {
      $this->CreateLiveTextFeedResult = $CreateLiveTextFeedResult;
      return $this;
    }

}
