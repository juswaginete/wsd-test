<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveMediaFeedsResponse
{

    /**
     * @var PagedLiveMediaFeedList $GetLiveMediaFeedsResult
     */
    protected $GetLiveMediaFeedsResult = null;

    /**
     * @param PagedLiveMediaFeedList $GetLiveMediaFeedsResult
     */
    public function __construct($GetLiveMediaFeedsResult)
    {
      $this->GetLiveMediaFeedsResult = $GetLiveMediaFeedsResult;
    }

    /**
     * @return PagedLiveMediaFeedList
     */
    public function getGetLiveMediaFeedsResult()
    {
      return $this->GetLiveMediaFeedsResult;
    }

    /**
     * @param PagedLiveMediaFeedList $GetLiveMediaFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveMediaFeedsResponse
     */
    public function setGetLiveMediaFeedsResult($GetLiveMediaFeedsResult)
    {
      $this->GetLiveMediaFeedsResult = $GetLiveMediaFeedsResult;
      return $this;
    }

}
