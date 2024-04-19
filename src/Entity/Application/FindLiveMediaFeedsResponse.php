<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindLiveMediaFeedsResponse
{

    /**
     * @var PagedLiveMediaFeedList $FindLiveMediaFeedsResult
     */
    protected $FindLiveMediaFeedsResult = null;

    /**
     * @param PagedLiveMediaFeedList $FindLiveMediaFeedsResult
     */
    public function __construct($FindLiveMediaFeedsResult)
    {
      $this->FindLiveMediaFeedsResult = $FindLiveMediaFeedsResult;
    }

    /**
     * @return PagedLiveMediaFeedList
     */
    public function getFindLiveMediaFeedsResult()
    {
      return $this->FindLiveMediaFeedsResult;
    }

    /**
     * @param PagedLiveMediaFeedList $FindLiveMediaFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindLiveMediaFeedsResponse
     */
    public function setFindLiveMediaFeedsResult($FindLiveMediaFeedsResult)
    {
      $this->FindLiveMediaFeedsResult = $FindLiveMediaFeedsResult;
      return $this;
    }

}
