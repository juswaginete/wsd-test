<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDynamicPlaylistResponse
{

    /**
     * @var DynamicPlaylist $GetDynamicPlaylistResult
     */
    protected $GetDynamicPlaylistResult = null;

    /**
     * @param DynamicPlaylist $GetDynamicPlaylistResult
     */
    public function __construct($GetDynamicPlaylistResult)
    {
      $this->GetDynamicPlaylistResult = $GetDynamicPlaylistResult;
    }

    /**
     * @return DynamicPlaylist
     */
    public function getGetDynamicPlaylistResult()
    {
      return $this->GetDynamicPlaylistResult;
    }

    /**
     * @param DynamicPlaylist $GetDynamicPlaylistResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylistResponse
     */
    public function setGetDynamicPlaylistResult($GetDynamicPlaylistResult)
    {
      $this->GetDynamicPlaylistResult = $GetDynamicPlaylistResult;
      return $this;
    }

}
