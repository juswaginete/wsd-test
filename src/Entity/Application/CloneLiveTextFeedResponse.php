<?php

namespace WSD\BrightSignApi\Entity\Application;

class CloneLiveTextFeedResponse
{

    /**
     * @var LiveTextFeed $CloneLiveTextFeedResult
     */
    protected $CloneLiveTextFeedResult = null;

    /**
     * @param LiveTextFeed $CloneLiveTextFeedResult
     */
    public function __construct($CloneLiveTextFeedResult)
    {
      $this->CloneLiveTextFeedResult = $CloneLiveTextFeedResult;
    }

    /**
     * @return LiveTextFeed
     */
    public function getCloneLiveTextFeedResult()
    {
      return $this->CloneLiveTextFeedResult;
    }

    /**
     * @param LiveTextFeed $CloneLiveTextFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\CloneLiveTextFeedResponse
     */
    public function setCloneLiveTextFeedResult($CloneLiveTextFeedResult)
    {
      $this->CloneLiveTextFeedResult = $CloneLiveTextFeedResult;
      return $this;
    }

}
