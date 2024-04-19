<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDynamicPlaylistsResponse
{

    /**
     * @var PagedDynamicPlaylistList $GetDynamicPlaylistsResult
     */
    protected $GetDynamicPlaylistsResult = null;

    /**
     * @param PagedDynamicPlaylistList $GetDynamicPlaylistsResult
     */
    public function __construct($GetDynamicPlaylistsResult)
    {
      $this->GetDynamicPlaylistsResult = $GetDynamicPlaylistsResult;
    }

    /**
     * @return PagedDynamicPlaylistList
     */
    public function getGetDynamicPlaylistsResult()
    {
      return $this->GetDynamicPlaylistsResult;
    }

    /**
     * @param PagedDynamicPlaylistList $GetDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylistsResponse
     */
    public function setGetDynamicPlaylistsResult($GetDynamicPlaylistsResult)
    {
      $this->GetDynamicPlaylistsResult = $GetDynamicPlaylistsResult;
      return $this;
    }

}
