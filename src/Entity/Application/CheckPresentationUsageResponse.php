<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckPresentationUsageResponse
{

    /**
     * @var boolean $CheckPresentationUsageResult
     */
    protected $CheckPresentationUsageResult = null;

    /**
     * @param boolean $CheckPresentationUsageResult
     */
    public function __construct($CheckPresentationUsageResult)
    {
      $this->CheckPresentationUsageResult = $CheckPresentationUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckPresentationUsageResult()
    {
      return $this->CheckPresentationUsageResult;
    }

    /**
     * @param boolean $CheckPresentationUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckPresentationUsageResponse
     */
    public function setCheckPresentationUsageResult($CheckPresentationUsageResult)
    {
      $this->CheckPresentationUsageResult = $CheckPresentationUsageResult;
      return $this;
    }

}
