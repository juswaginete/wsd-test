<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckDynamicPlaylistUsageByNameResponse
{

    /**
     * @var boolean $CheckDynamicPlaylistUsageByNameResult
     */
    protected $CheckDynamicPlaylistUsageByNameResult = null;

    /**
     * @param boolean $CheckDynamicPlaylistUsageByNameResult
     */
    public function __construct($CheckDynamicPlaylistUsageByNameResult)
    {
      $this->CheckDynamicPlaylistUsageByNameResult = $CheckDynamicPlaylistUsageByNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckDynamicPlaylistUsageByNameResult()
    {
      return $this->CheckDynamicPlaylistUsageByNameResult;
    }

    /**
     * @param boolean $CheckDynamicPlaylistUsageByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckDynamicPlaylistUsageByNameResponse
     */
    public function setCheckDynamicPlaylistUsageByNameResult($CheckDynamicPlaylistUsageByNameResult)
    {
      $this->CheckDynamicPlaylistUsageByNameResult = $CheckDynamicPlaylistUsageByNameResult;
      return $this;
    }

}
