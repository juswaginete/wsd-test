<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedWebPagesResponse
{

    /**
     * @var ArrayOfWebPage $GetSpecifiedWebPagesResult
     */
    protected $GetSpecifiedWebPagesResult = null;

    /**
     * @param ArrayOfWebPage $GetSpecifiedWebPagesResult
     */
    public function __construct($GetSpecifiedWebPagesResult)
    {
      $this->GetSpecifiedWebPagesResult = $GetSpecifiedWebPagesResult;
    }

    /**
     * @return ArrayOfWebPage
     */
    public function getGetSpecifiedWebPagesResult()
    {
      return $this->GetSpecifiedWebPagesResult;
    }

    /**
     * @param ArrayOfWebPage $GetSpecifiedWebPagesResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedWebPagesResponse
     */
    public function setGetSpecifiedWebPagesResult($GetSpecifiedWebPagesResult)
    {
      $this->GetSpecifiedWebPagesResult = $GetSpecifiedWebPagesResult;
      return $this;
    }

}
