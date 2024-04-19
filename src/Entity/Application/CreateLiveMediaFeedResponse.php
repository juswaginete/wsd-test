<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateLiveMediaFeedResponse
{

    /**
     * @var LiveMediaFeed $CreateLiveMediaFeedResult
     */
    protected $CreateLiveMediaFeedResult = null;

    /**
     * @param LiveMediaFeed $CreateLiveMediaFeedResult
     */
    public function __construct($CreateLiveMediaFeedResult)
    {
      $this->CreateLiveMediaFeedResult = $CreateLiveMediaFeedResult;
    }

    /**
     * @return LiveMediaFeed
     */
    public function getCreateLiveMediaFeedResult()
    {
      return $this->CreateLiveMediaFeedResult;
    }

    /**
     * @param LiveMediaFeed $CreateLiveMediaFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateLiveMediaFeedResponse
     */
    public function setCreateLiveMediaFeedResult($CreateLiveMediaFeedResult)
    {
      $this->CreateLiveMediaFeedResult = $CreateLiveMediaFeedResult;
      return $this;
    }

}
