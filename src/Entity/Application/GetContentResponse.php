<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetContentResponse
{

    /**
     * @var Content $GetContentResult
     */
    protected $GetContentResult = null;

    /**
     * @param Content $GetContentResult
     */
    public function __construct($GetContentResult)
    {
      $this->GetContentResult = $GetContentResult;
    }

    /**
     * @return Content
     */
    public function getGetContentResult()
    {
      return $this->GetContentResult;
    }

    /**
     * @param Content $GetContentResult
     * @return \WSD\BrightSignApi\Entity\Application\GetContentResponse
     */
    public function setGetContentResult($GetContentResult)
    {
      $this->GetContentResult = $GetContentResult;
      return $this;
    }

}
