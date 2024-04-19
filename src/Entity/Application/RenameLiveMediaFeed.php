<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameLiveMediaFeed
{

    /**
     * @var int $liveMediaFeedId
     */
    protected $liveMediaFeedId = null;

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @param int $liveMediaFeedId
     * @param string $newName
     */
    public function __construct($liveMediaFeedId, $newName)
    {
      $this->liveMediaFeedId = $liveMediaFeedId;
      $this->newName = $newName;
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
     * @return \WSD\BrightSignApi\Entity\Application\RenameLiveMediaFeed
     */
    public function setLiveMediaFeedId($liveMediaFeedId)
    {
      $this->liveMediaFeedId = $liveMediaFeedId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->newName;
    }

    /**
     * @param string $newName
     * @return \WSD\BrightSignApi\Entity\Application\RenameLiveMediaFeed
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

}
