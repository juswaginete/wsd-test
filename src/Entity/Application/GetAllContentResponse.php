<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetAllContentResponse
{

    /**
     * @var PagedContentList $GetAllContentResult
     */
    protected $GetAllContentResult = null;

    /**
     * @param PagedContentList $GetAllContentResult
     */
    public function __construct($GetAllContentResult)
    {
      $this->GetAllContentResult = $GetAllContentResult;
    }

    /**
     * @return PagedContentList
     */
    public function getGetAllContentResult()
    {
      return $this->GetAllContentResult;
    }

    /**
     * @param PagedContentList $GetAllContentResult
     * @return \WSD\BrightSignApi\Entity\Application\GetAllContentResponse
     */
    public function setGetAllContentResult($GetAllContentResult)
    {
      $this->GetAllContentResult = $GetAllContentResult;
      return $this;
    }

}
