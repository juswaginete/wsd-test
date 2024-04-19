<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckWebPageUsageResponse
{

    /**
     * @var boolean $CheckWebPageUsageResult
     */
    protected $CheckWebPageUsageResult = null;

    /**
     * @param boolean $CheckWebPageUsageResult
     */
    public function __construct($CheckWebPageUsageResult)
    {
      $this->CheckWebPageUsageResult = $CheckWebPageUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckWebPageUsageResult()
    {
      return $this->CheckWebPageUsageResult;
    }

    /**
     * @param boolean $CheckWebPageUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckWebPageUsageResponse
     */
    public function setCheckWebPageUsageResult($CheckWebPageUsageResult)
    {
      $this->CheckWebPageUsageResult = $CheckWebPageUsageResult;
      return $this;
    }

}
