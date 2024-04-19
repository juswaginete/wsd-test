<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDynamicPlaylistByNameResponse
{

    /**
     * @var DynamicPlaylist $GetDynamicPlaylistByNameResult
     */
    protected $GetDynamicPlaylistByNameResult = null;

    /**
     * @param DynamicPlaylist $GetDynamicPlaylistByNameResult
     */
    public function __construct($GetDynamicPlaylistByNameResult)
    {
      $this->GetDynamicPlaylistByNameResult = $GetDynamicPlaylistByNameResult;
    }

    /**
     * @return DynamicPlaylist
     */
    public function getGetDynamicPlaylistByNameResult()
    {
      return $this->GetDynamicPlaylistByNameResult;
    }

    /**
     * @param DynamicPlaylist $GetDynamicPlaylistByNameResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylistByNameResponse
     */
    public function setGetDynamicPlaylistByNameResult($GetDynamicPlaylistByNameResult)
    {
      $this->GetDynamicPlaylistByNameResult = $GetDynamicPlaylistByNameResult;
      return $this;
    }

}
