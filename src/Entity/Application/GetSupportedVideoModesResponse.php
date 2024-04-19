<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSupportedVideoModesResponse
{

    /**
     * @var ArrayOfVideoMode $GetSupportedVideoModesResult
     */
    protected $GetSupportedVideoModesResult = null;

    /**
     * @param ArrayOfVideoMode $GetSupportedVideoModesResult
     */
    public function __construct($GetSupportedVideoModesResult)
    {
      $this->GetSupportedVideoModesResult = $GetSupportedVideoModesResult;
    }

    /**
     * @return ArrayOfVideoMode
     */
    public function getGetSupportedVideoModesResult()
    {
      return $this->GetSupportedVideoModesResult;
    }

    /**
     * @param ArrayOfVideoMode $GetSupportedVideoModesResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSupportedVideoModesResponse
     */
    public function setGetSupportedVideoModesResult($GetSupportedVideoModesResult)
    {
      $this->GetSupportedVideoModesResult = $GetSupportedVideoModesResult;
      return $this;
    }

}
