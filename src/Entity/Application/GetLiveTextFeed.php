<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveTextFeed
{

    /**
     * @var int $liveTextFeedId
     */
    protected $liveTextFeedId = null;

    /**
     * @var boolean $loadContent
     */
    protected $loadContent = null;

    /**
     * @param int $liveTextFeedId
     * @param boolean $loadContent
     */
    public function __construct($liveTextFeedId, $loadContent)
    {
      $this->liveTextFeedId = $liveTextFeedId;
      $this->loadContent = $loadContent;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveTextFeed
     */
    public function setLiveTextFeedId($liveTextFeedId)
    {
      $this->liveTextFeedId = $liveTextFeedId;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveTextFeed
     */
    public function setLoadContent($loadContent)
    {
      $this->loadContent = $loadContent;
      return $this;
    }

}
