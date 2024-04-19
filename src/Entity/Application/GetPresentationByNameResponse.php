<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetPresentationByNameResponse
{

    /**
     * @var Presentation $GetPresentationByNameResult
     */
    protected $GetPresentationByNameResult = null;

    /**
     * @param Presentation $GetPresentationByNameResult
     */
    public function __construct($GetPresentationByNameResult)
    {
      $this->GetPresentationByNameResult = $GetPresentationByNameResult;
    }

    /**
     * @return Presentation
     */
    public function getGetPresentationByNameResult()
    {
      return $this->GetPresentationByNameResult;
    }

    /**
     * @param Presentation $GetPresentationByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetPresentationByNameResponse
     */
    public function setGetPresentationByNameResult($GetPresentationByNameResult)
    {
      $this->GetPresentationByNameResult = $GetPresentationByNameResult;
      return $this;
    }

}
