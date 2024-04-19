<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetWebPagesResponse
{

    /**
     * @var PagedWebPageList $GetWebPagesResult
     */
    protected $GetWebPagesResult = null;

    /**
     * @param PagedWebPageList $GetWebPagesResult
     */
    public function __construct($GetWebPagesResult)
    {
      $this->GetWebPagesResult = $GetWebPagesResult;
    }

    /**
     * @return PagedWebPageList
     */
    public function getGetWebPagesResult()
    {
      return $this->GetWebPagesResult;
    }

    /**
     * @param PagedWebPageList $GetWebPagesResult
     * @return \WSD\BrightSignApi\Entity\Application\GetWebPagesResponse
     */
    public function setGetWebPagesResult($GetWebPagesResult)
    {
      $this->GetWebPagesResult = $GetWebPagesResult;
      return $this;
    }

}
