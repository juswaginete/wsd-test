<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameLiveMediaFeedResponse
{

    /**
     * @var boolean $RenameLiveMediaFeedResult
     */
    protected $RenameLiveMediaFeedResult = null;

    /**
     * @param boolean $RenameLiveMediaFeedResult
     */
    public function __construct($RenameLiveMediaFeedResult)
    {
      $this->RenameLiveMediaFeedResult = $RenameLiveMediaFeedResult;
    }

    /**
     * @return boolean
     */
    public function getRenameLiveMediaFeedResult()
    {
      return $this->RenameLiveMediaFeedResult;
    }

    /**
     * @param boolean $RenameLiveMediaFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\RenameLiveMediaFeedResponse
     */
    public function setRenameLiveMediaFeedResult($RenameLiveMediaFeedResult)
    {
      $this->RenameLiveMediaFeedResult = $RenameLiveMediaFeedResult;
      return $this;
    }

}
