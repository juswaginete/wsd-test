<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetPresentationResponse
{

    /**
     * @var Presentation $GetPresentationResult
     */
    protected $GetPresentationResult = null;

    /**
     * @param Presentation $GetPresentationResult
     */
    public function __construct($GetPresentationResult)
    {
      $this->GetPresentationResult = $GetPresentationResult;
    }

    /**
     * @return Presentation
     */
    public function getGetPresentationResult()
    {
      return $this->GetPresentationResult;
    }

    /**
     * @param Presentation $GetPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\GetPresentationResponse
     */
    public function setGetPresentationResult($GetPresentationResult)
    {
      $this->GetPresentationResult = $GetPresentationResult;
      return $this;
    }

}
