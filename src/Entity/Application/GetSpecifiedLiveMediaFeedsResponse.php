<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedLiveMediaFeedsResponse
{

    /**
     * @var ArrayOfLiveMediaFeed $GetSpecifiedLiveMediaFeedsResult
     */
    protected $GetSpecifiedLiveMediaFeedsResult = null;

    /**
     * @param ArrayOfLiveMediaFeed $GetSpecifiedLiveMediaFeedsResult
     */
    public function __construct($GetSpecifiedLiveMediaFeedsResult)
    {
      $this->GetSpecifiedLiveMediaFeedsResult = $GetSpecifiedLiveMediaFeedsResult;
    }

    /**
     * @return ArrayOfLiveMediaFeed
     */
    public function getGetSpecifiedLiveMediaFeedsResult()
    {
      return $this->GetSpecifiedLiveMediaFeedsResult;
    }

    /**
     * @param ArrayOfLiveMediaFeed $GetSpecifiedLiveMediaFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedLiveMediaFeedsResponse
     */
    public function setGetSpecifiedLiveMediaFeedsResult($GetSpecifiedLiveMediaFeedsResult)
    {
      $this->GetSpecifiedLiveMediaFeedsResult = $GetSpecifiedLiveMediaFeedsResult;
      return $this;
    }

}
