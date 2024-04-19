<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteLiveMediaFeeds
{

    /**
     * @var ArrayOfint $liveMediaFeedIds
     */
    protected $liveMediaFeedIds = null;

    /**
     * @param ArrayOfint $liveMediaFeedIds
     */
    public function __construct($liveMediaFeedIds)
    {
      $this->liveMediaFeedIds = $liveMediaFeedIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getLiveMediaFeedIds()
    {
      return $this->liveMediaFeedIds;
    }

    /**
     * @param ArrayOfint $liveMediaFeedIds
     * @return \WSD\BrightSignApi\Entity\Application\DeleteLiveMediaFeeds
     */
    public function setLiveMediaFeedIds($liveMediaFeedIds)
    {
      $this->liveMediaFeedIds = $liveMediaFeedIds;
      return $this;
    }

}
