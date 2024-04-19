<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindWebPagesResponse
{

    /**
     * @var PagedWebPageList $FindWebPagesResult
     */
    protected $FindWebPagesResult = null;

    /**
     * @param PagedWebPageList $FindWebPagesResult
     */
    public function __construct($FindWebPagesResult)
    {
      $this->FindWebPagesResult = $FindWebPagesResult;
    }

    /**
     * @return PagedWebPageList
     */
    public function getFindWebPagesResult()
    {
      return $this->FindWebPagesResult;
    }

    /**
     * @param PagedWebPageList $FindWebPagesResult
     * @return \WSD\BrightSignApi\Entity\Application\FindWebPagesResponse
     */
    public function setFindWebPagesResult($FindWebPagesResult)
    {
      $this->FindWebPagesResult = $FindWebPagesResult;
      return $this;
    }

}
