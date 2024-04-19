<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckWebPageUsageByNameResponse
{

    /**
     * @var boolean $CheckWebPageUsageByNameResult
     */
    protected $CheckWebPageUsageByNameResult = null;

    /**
     * @param boolean $CheckWebPageUsageByNameResult
     */
    public function __construct($CheckWebPageUsageByNameResult)
    {
      $this->CheckWebPageUsageByNameResult = $CheckWebPageUsageByNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckWebPageUsageByNameResult()
    {
      return $this->CheckWebPageUsageByNameResult;
    }

    /**
     * @param boolean $CheckWebPageUsageByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckWebPageUsageByNameResponse
     */
    public function setCheckWebPageUsageByNameResult($CheckWebPageUsageByNameResult)
    {
      $this->CheckWebPageUsageByNameResult = $CheckWebPageUsageByNameResult;
      return $this;
    }

}
