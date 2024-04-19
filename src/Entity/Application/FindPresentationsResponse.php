<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindPresentationsResponse
{

    /**
     * @var PagedPresentationList $FindPresentationsResult
     */
    protected $FindPresentationsResult = null;

    /**
     * @param PagedPresentationList $FindPresentationsResult
     */
    public function __construct($FindPresentationsResult)
    {
      $this->FindPresentationsResult = $FindPresentationsResult;
    }

    /**
     * @return PagedPresentationList
     */
    public function getFindPresentationsResult()
    {
      return $this->FindPresentationsResult;
    }

    /**
     * @param PagedPresentationList $FindPresentationsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindPresentationsResponse
     */
    public function setFindPresentationsResult($FindPresentationsResult)
    {
      $this->FindPresentationsResult = $FindPresentationsResult;
      return $this;
    }

}
