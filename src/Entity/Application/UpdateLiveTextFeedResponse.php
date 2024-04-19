<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateLiveTextFeedResponse
{

    /**
     * @var boolean $UpdateLiveTextFeedResult
     */
    protected $UpdateLiveTextFeedResult = null;

    /**
     * @param boolean $UpdateLiveTextFeedResult
     */
    public function __construct($UpdateLiveTextFeedResult)
    {
      $this->UpdateLiveTextFeedResult = $UpdateLiveTextFeedResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateLiveTextFeedResult()
    {
      return $this->UpdateLiveTextFeedResult;
    }

    /**
     * @param boolean $UpdateLiveTextFeedResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateLiveTextFeedResponse
     */
    public function setUpdateLiveTextFeedResult($UpdateLiveTextFeedResult)
    {
      $this->UpdateLiveTextFeedResult = $UpdateLiveTextFeedResult;
      return $this;
    }

}
