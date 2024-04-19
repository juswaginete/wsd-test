<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameLiveTextFeed
{

    /**
     * @var int $liveTextFeedId
     */
    protected $liveTextFeedId = null;

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @param int $liveTextFeedId
     * @param string $newName
     */
    public function __construct($liveTextFeedId, $newName)
    {
      $this->liveTextFeedId = $liveTextFeedId;
      $this->newName = $newName;
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
     * @return \WSD\BrightSignApi\Entity\Application\RenameLiveTextFeed
     */
    public function setLiveTextFeedId($liveTextFeedId)
    {
      $this->liveTextFeedId = $liveTextFeedId;
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
     * @return \WSD\BrightSignApi\Entity\Application\RenameLiveTextFeed
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

}
