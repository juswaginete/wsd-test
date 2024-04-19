<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetWebPageResponse
{

    /**
     * @var WebPage $GetWebPageResult
     */
    protected $GetWebPageResult = null;

    /**
     * @param WebPage $GetWebPageResult
     */
    public function __construct($GetWebPageResult)
    {
      $this->GetWebPageResult = $GetWebPageResult;
    }

    /**
     * @return WebPage
     */
    public function getGetWebPageResult()
    {
      return $this->GetWebPageResult;
    }

    /**
     * @param WebPage $GetWebPageResult
     * @return \WSD\BrightSignApi\Entity\Application\GetWebPageResponse
     */
    public function setGetWebPageResult($GetWebPageResult)
    {
      $this->GetWebPageResult = $GetWebPageResult;
      return $this;
    }

}
