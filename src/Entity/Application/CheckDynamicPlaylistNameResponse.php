<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckDynamicPlaylistNameResponse
{

    /**
     * @var boolean $CheckDynamicPlaylistNameResult
     */
    protected $CheckDynamicPlaylistNameResult = null;

    /**
     * @param boolean $CheckDynamicPlaylistNameResult
     */
    public function __construct($CheckDynamicPlaylistNameResult)
    {
      $this->CheckDynamicPlaylistNameResult = $CheckDynamicPlaylistNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckDynamicPlaylistNameResult()
    {
      return $this->CheckDynamicPlaylistNameResult;
    }

    /**
     * @param boolean $CheckDynamicPlaylistNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckDynamicPlaylistNameResponse
     */
    public function setCheckDynamicPlaylistNameResult($CheckDynamicPlaylistNameResult)
    {
      $this->CheckDynamicPlaylistNameResult = $CheckDynamicPlaylistNameResult;
      return $this;
    }

}
