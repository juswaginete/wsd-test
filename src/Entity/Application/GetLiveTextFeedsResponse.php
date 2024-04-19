<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetLiveTextFeedsResponse
{

    /**
     * @var PagedLiveTextFeedList $GetLiveTextFeedsResult
     */
    protected $GetLiveTextFeedsResult = null;

    /**
     * @param PagedLiveTextFeedList $GetLiveTextFeedsResult
     */
    public function __construct($GetLiveTextFeedsResult)
    {
      $this->GetLiveTextFeedsResult = $GetLiveTextFeedsResult;
    }

    /**
     * @return PagedLiveTextFeedList
     */
    public function getGetLiveTextFeedsResult()
    {
      return $this->GetLiveTextFeedsResult;
    }

    /**
     * @param PagedLiveTextFeedList $GetLiveTextFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetLiveTextFeedsResponse
     */
    public function setGetLiveTextFeedsResult($GetLiveTextFeedsResult)
    {
      $this->GetLiveTextFeedsResult = $GetLiveTextFeedsResult;
      return $this;
    }

}
