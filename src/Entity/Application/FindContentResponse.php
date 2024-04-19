<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindContentResponse
{

    /**
     * @var PagedContentList $FindContentResult
     */
    protected $FindContentResult = null;

    /**
     * @param PagedContentList $FindContentResult
     */
    public function __construct($FindContentResult)
    {
      $this->FindContentResult = $FindContentResult;
    }

    /**
     * @return PagedContentList
     */
    public function getFindContentResult()
    {
      return $this->FindContentResult;
    }

    /**
     * @param PagedContentList $FindContentResult
     * @return \WSD\BrightSignApi\Entity\Application\FindContentResponse
     */
    public function setFindContentResult($FindContentResult)
    {
      $this->FindContentResult = $FindContentResult;
      return $this;
    }

}
