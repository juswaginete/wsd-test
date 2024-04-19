<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetWebPageByNameResponse
{

    /**
     * @var WebPage $GetWebPageByNameResult
     */
    protected $GetWebPageByNameResult = null;

    /**
     * @param WebPage $GetWebPageByNameResult
     */
    public function __construct($GetWebPageByNameResult)
    {
      $this->GetWebPageByNameResult = $GetWebPageByNameResult;
    }

    /**
     * @return WebPage
     */
    public function getGetWebPageByNameResult()
    {
      return $this->GetWebPageByNameResult;
    }

    /**
     * @param WebPage $GetWebPageByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetWebPageByNameResponse
     */
    public function setGetWebPageByNameResult($GetWebPageByNameResult)
    {
      $this->GetWebPageByNameResult = $GetWebPageByNameResult;
      return $this;
    }

}
