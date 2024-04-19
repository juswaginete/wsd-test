<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckWebPageNameResponse
{

    /**
     * @var boolean $CheckWebPageNameResult
     */
    protected $CheckWebPageNameResult = null;

    /**
     * @param boolean $CheckWebPageNameResult
     */
    public function __construct($CheckWebPageNameResult)
    {
      $this->CheckWebPageNameResult = $CheckWebPageNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckWebPageNameResult()
    {
      return $this->CheckWebPageNameResult;
    }

    /**
     * @param boolean $CheckWebPageNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckWebPageNameResponse
     */
    public function setCheckWebPageNameResult($CheckWebPageNameResult)
    {
      $this->CheckWebPageNameResult = $CheckWebPageNameResult;
      return $this;
    }

}
