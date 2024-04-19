<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveMediaFeed
{

    /**
     * @var int $liveMediaFeedId
     */
    protected $liveMediaFeedId = null;

    /**
     * @var boolean $loadContent
     */
    protected $loadContent = null;

    /**
     * @param int $liveMediaFeedId
     * @param boolean $loadContent
     */
    public function __construct($liveMediaFeedId, $loadContent)
    {
      $this->liveMediaFeedId = $liveMediaFeedId;
      $this->loadContent = $loadContent;
    }

    /**
     * @return int
     */
    public function getLiveMediaFeedId()
    {
      return $this->liveMediaFeedId;
    }

    /**
     * @param int $liveMediaFeedId
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveMediaFeed
     */
    public function setLiveMediaFeedId($liveMediaFeedId)
    {
      $this->liveMediaFeedId = $liveMediaFeedId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadContent()
    {
      return $this->loadContent;
    }

    /**
     * @param boolean $loadContent
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveMediaFeed
     */
    public function setLoadContent($loadContent)
    {
      $this->loadContent = $loadContent;
      return $this;
    }

}
