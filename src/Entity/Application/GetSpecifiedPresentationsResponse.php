<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedPresentationsResponse
{

    /**
     * @var ArrayOfPresentation $GetSpecifiedPresentationsResult
     */
    protected $GetSpecifiedPresentationsResult = null;

    /**
     * @param ArrayOfPresentation $GetSpecifiedPresentationsResult
     */
    public function __construct($GetSpecifiedPresentationsResult)
    {
      $this->GetSpecifiedPresentationsResult = $GetSpecifiedPresentationsResult;
    }

    /**
     * @return ArrayOfPresentation
     */
    public function getGetSpecifiedPresentationsResult()
    {
      return $this->GetSpecifiedPresentationsResult;
    }

    /**
     * @param ArrayOfPresentation $GetSpecifiedPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedPresentationsResponse
     */
    public function setGetSpecifiedPresentationsResult($GetSpecifiedPresentationsResult)
    {
      $this->GetSpecifiedPresentationsResult = $GetSpecifiedPresentationsResult;
      return $this;
    }

}
