<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckDynamicPlaylistUsageResponse
{

    /**
     * @var boolean $CheckDynamicPlaylistUsageResult
     */
    protected $CheckDynamicPlaylistUsageResult = null;

    /**
     * @param boolean $CheckDynamicPlaylistUsageResult
     */
    public function __construct($CheckDynamicPlaylistUsageResult)
    {
      $this->CheckDynamicPlaylistUsageResult = $CheckDynamicPlaylistUsageResult;
    }

    /**
     * @return boolean
     */
    public function getCheckDynamicPlaylistUsageResult()
    {
      return $this->CheckDynamicPlaylistUsageResult;
    }

    /**
     * @param boolean $CheckDynamicPlaylistUsageResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckDynamicPlaylistUsageResponse
     */
    public function setCheckDynamicPlaylistUsageResult($CheckDynamicPlaylistUsageResult)
    {
      $this->CheckDynamicPlaylistUsageResult = $CheckDynamicPlaylistUsageResult;
      return $this;
    }

}
