<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameLiveTextFeedResponse
{

    /**
     * @var boolean $RenameLiveTextFeedResult
     */
    protected $RenameLiveTextFeedResult = null;

    /**
     * @param boolean $RenameLiveTextFeedResult
     */
    public function __construct($RenameLiveTextFeedResult)
    {
      $this->RenameLiveTextFeedResult = $RenameLiveTextFeedResult;
    }

    /**
     * @return boolean
     */
    public function getRenameLiveTextFeedResult()
    {
      return $this->RenameLiveTextFeedResult;
    }

    /**
     * @param boolean $RenameLiveTextFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\RenameLiveTextFeedResponse
     */
    public function setRenameLiveTextFeedResult($RenameLiveTextFeedResult)
    {
      $this->RenameLiveTextFeedResult = $RenameLiveTextFeedResult;
      return $this;
    }

}
