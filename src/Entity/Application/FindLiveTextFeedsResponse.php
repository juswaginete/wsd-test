<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindLiveTextFeedsResponse
{

    /**
     * @var PagedLiveTextFeedList $FindLiveTextFeedsResult
     */
    protected $FindLiveTextFeedsResult = null;

    /**
     * @param PagedLiveTextFeedList $FindLiveTextFeedsResult
     */
    public function __construct($FindLiveTextFeedsResult)
    {
      $this->FindLiveTextFeedsResult = $FindLiveTextFeedsResult;
    }

    /**
     * @return PagedLiveTextFeedList
     */
    public function getFindLiveTextFeedsResult()
    {
      return $this->FindLiveTextFeedsResult;
    }

    /**
     * @param PagedLiveTextFeedList $FindLiveTextFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindLiveTextFeedsResponse
     */
    public function setFindLiveTextFeedsResult($FindLiveTextFeedsResult)
    {
      $this->FindLiveTextFeedsResult = $FindLiveTextFeedsResult;
      return $this;
    }

}
