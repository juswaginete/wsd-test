<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedLiveTextFeedsResponse
{

    /**
     * @var ArrayOfLiveTextFeed $GetSpecifiedLiveTextFeedsResult
     */
    protected $GetSpecifiedLiveTextFeedsResult = null;

    /**
     * @param ArrayOfLiveTextFeed $GetSpecifiedLiveTextFeedsResult
     */
    public function __construct($GetSpecifiedLiveTextFeedsResult)
    {
      $this->GetSpecifiedLiveTextFeedsResult = $GetSpecifiedLiveTextFeedsResult;
    }

    /**
     * @return ArrayOfLiveTextFeed
     */
    public function getGetSpecifiedLiveTextFeedsResult()
    {
      return $this->GetSpecifiedLiveTextFeedsResult;
    }

    /**
     * @param ArrayOfLiveTextFeed $GetSpecifiedLiveTextFeedsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedLiveTextFeedsResponse
     */
    public function setGetSpecifiedLiveTextFeedsResult($GetSpecifiedLiveTextFeedsResult)
    {
      $this->GetSpecifiedLiveTextFeedsResult = $GetSpecifiedLiveTextFeedsResult;
      return $this;
    }

}
