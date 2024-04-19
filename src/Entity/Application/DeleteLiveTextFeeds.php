<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteLiveTextFeeds
{

    /**
     * @var ArrayOfint $liveTextFeedIds
     */
    protected $liveTextFeedIds = null;

    /**
     * @param ArrayOfint $liveTextFeedIds
     */
    public function __construct($liveTextFeedIds)
    {
      $this->liveTextFeedIds = $liveTextFeedIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getLiveTextFeedIds()
    {
      return $this->liveTextFeedIds;
    }

    /**
     * @param ArrayOfint $liveTextFeedIds
     * @return \WSD\BrightSignApi\Entity\Application\DeleteLiveTextFeeds
     */
    public function setLiveTextFeedIds($liveTextFeedIds)
    {
      $this->liveTextFeedIds = $liveTextFeedIds;
      return $this;
    }

}
