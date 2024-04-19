<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateDynamicPlaylistResponse
{

    /**
     * @var boolean $UpdateDynamicPlaylistResult
     */
    protected $UpdateDynamicPlaylistResult = null;

    /**
     * @param boolean $UpdateDynamicPlaylistResult
     */
    public function __construct($UpdateDynamicPlaylistResult)
    {
      $this->UpdateDynamicPlaylistResult = $UpdateDynamicPlaylistResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateDynamicPlaylistResult()
    {
      return $this->UpdateDynamicPlaylistResult;
    }

    /**
     * @param boolean $UpdateDynamicPlaylistResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateDynamicPlaylistResponse
     */
    public function setUpdateDynamicPlaylistResult($UpdateDynamicPlaylistResult)
    {
      $this->UpdateDynamicPlaylistResult = $UpdateDynamicPlaylistResult;
      return $this;
    }

}
