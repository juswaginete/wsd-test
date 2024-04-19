<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindDynamicPlaylistsResponse
{

    /**
     * @var PagedDynamicPlaylistList $FindDynamicPlaylistsResult
     */
    protected $FindDynamicPlaylistsResult = null;

    /**
     * @param PagedDynamicPlaylistList $FindDynamicPlaylistsResult
     */
    public function __construct($FindDynamicPlaylistsResult)
    {
      $this->FindDynamicPlaylistsResult = $FindDynamicPlaylistsResult;
    }

    /**
     * @return PagedDynamicPlaylistList
     */
    public function getFindDynamicPlaylistsResult()
    {
      return $this->FindDynamicPlaylistsResult;
    }

    /**
     * @param PagedDynamicPlaylistList $FindDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindDynamicPlaylistsResponse
     */
    public function setFindDynamicPlaylistsResult($FindDynamicPlaylistsResult)
    {
      $this->FindDynamicPlaylistsResult = $FindDynamicPlaylistsResult;
      return $this;
    }

}
