<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedDynamicPlaylistsResponse
{

    /**
     * @var ArrayOfDynamicPlaylist $GetSpecifiedDynamicPlaylistsResult
     */
    protected $GetSpecifiedDynamicPlaylistsResult = null;

    /**
     * @param ArrayOfDynamicPlaylist $GetSpecifiedDynamicPlaylistsResult
     */
    public function __construct($GetSpecifiedDynamicPlaylistsResult)
    {
      $this->GetSpecifiedDynamicPlaylistsResult = $GetSpecifiedDynamicPlaylistsResult;
    }

    /**
     * @return ArrayOfDynamicPlaylist
     */
    public function getGetSpecifiedDynamicPlaylistsResult()
    {
      return $this->GetSpecifiedDynamicPlaylistsResult;
    }

    /**
     * @param ArrayOfDynamicPlaylist $GetSpecifiedDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedDynamicPlaylistsResponse
     */
    public function setGetSpecifiedDynamicPlaylistsResult($GetSpecifiedDynamicPlaylistsResult)
    {
      $this->GetSpecifiedDynamicPlaylistsResult = $GetSpecifiedDynamicPlaylistsResult;
      return $this;
    }

}
