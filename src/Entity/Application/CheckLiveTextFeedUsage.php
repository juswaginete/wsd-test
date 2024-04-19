<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckLiveTextFeedUsage
{

    /**
     * @var int $liveTextFeedId
     */
    protected $liveTextFeedId = null;

    /**
     * @param int $liveTextFeedId
     */
    public function __construct($liveTextFeedId)
    {
      $this->liveTextFeedId = $liveTextFeedId;
    }

    /**
     * @return int
     */
    public function getLiveTextFeedId()
    {
      return $this->liveTextFeedId;
    }

    /**
     * @param int $liveTextFeedId
     * @return \WSD\BrightSignApi\Entity\Application\CheckLiveTextFeedUsage
     */
    public function setLiveTextFeedId($liveTextFeedId)
    {
      $this->liveTextFeedId = $liveTextFeedId;
      return $this;
    }

}
