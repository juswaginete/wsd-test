<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckContentUsageResponse
{

    /**
     * @var boolean $CheckContentUsageResult
     */
    protected $CheckContentUsageResult = null;

    /**
     * @param boolean $CheckContentUsageResult
     */
    public function __construct($CheckContentUsageResult)
    {
      $this->CheckContentUsageResult = $CheckContentUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckContentUsageResult()
    {
      return $this->CheckContentUsageResult;
    }

    /**
     * @param boolean $CheckContentUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckContentUsageResponse
     */
    public function setCheckContentUsageResult($CheckContentUsageResult)
    {
      $this->CheckContentUsageResult = $CheckContentUsageResult;
      return $this;
    }

}
