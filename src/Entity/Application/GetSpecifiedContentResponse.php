<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedContentResponse
{

    /**
     * @var ArrayOfContent $GetSpecifiedContentResult
     */
    protected $GetSpecifiedContentResult = null;

    /**
     * @param ArrayOfContent $GetSpecifiedContentResult
     */
    public function __construct($GetSpecifiedContentResult)
    {
      $this->GetSpecifiedContentResult = $GetSpecifiedContentResult;
    }

    /**
     * @return ArrayOfContent
     */
    public function getGetSpecifiedContentResult()
    {
      return $this->GetSpecifiedContentResult;
    }

    /**
     * @param ArrayOfContent $GetSpecifiedContentResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedContentResponse
     */
    public function setGetSpecifiedContentResult($GetSpecifiedContentResult)
    {
      $this->GetSpecifiedContentResult = $GetSpecifiedContentResult;
      return $this;
    }

}
