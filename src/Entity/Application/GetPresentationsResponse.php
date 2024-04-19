<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetPresentationsResponse
{

    /**
     * @var PagedPresentationList $GetPresentationsResult
     */
    protected $GetPresentationsResult = null;

    /**
     * @param PagedPresentationList $GetPresentationsResult
     */
    public function __construct($GetPresentationsResult)
    {
      $this->GetPresentationsResult = $GetPresentationsResult;
    }

    /**
     * @return PagedPresentationList
     */
    public function getGetPresentationsResult()
    {
      return $this->GetPresentationsResult;
    }

    /**
     * @param PagedPresentationList $GetPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetPresentationsResponse
     */
    public function setGetPresentationsResult($GetPresentationsResult)
    {
      $this->GetPresentationsResult = $GetPresentationsResult;
      return $this;
    }

}
