<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateLiveMediaFeedResponse
{

    /**
     * @var boolean $UpdateLiveMediaFeedResult
     */
    protected $UpdateLiveMediaFeedResult = null;

    /**
     * @param boolean $UpdateLiveMediaFeedResult
     */
    public function __construct($UpdateLiveMediaFeedResult)
    {
      $this->UpdateLiveMediaFeedResult = $UpdateLiveMediaFeedResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateLiveMediaFeedResult()
    {
      return $this->UpdateLiveMediaFeedResult;
    }

    /**
     * @param boolean $UpdateLiveMediaFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateLiveMediaFeedResponse
     */
    public function setUpdateLiveMediaFeedResult($UpdateLiveMediaFeedResult)
    {
      $this->UpdateLiveMediaFeedResult = $UpdateLiveMediaFeedResult;
      return $this;
    }

}
