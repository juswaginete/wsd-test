<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindImageVideoDynamicPlaylistsResponse
{

    /**
     * @var PagedImageVideoDynamicPlaylistList $FindImageVideoDynamicPlaylistsResult
     */
    protected $FindImageVideoDynamicPlaylistsResult = null;

    /**
     * @param PagedImageVideoDynamicPlaylistList $FindImageVideoDynamicPlaylistsResult
     */
    public function __construct($FindImageVideoDynamicPlaylistsResult)
    {
      $this->FindImageVideoDynamicPlaylistsResult = $FindImageVideoDynamicPlaylistsResult;
    }

    /**
     * @return PagedImageVideoDynamicPlaylistList
     */
    public function getFindImageVideoDynamicPlaylistsResult()
    {
      return $this->FindImageVideoDynamicPlaylistsResult;
    }

    /**
     * @param PagedImageVideoDynamicPlaylistList $FindImageVideoDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindImageVideoDynamicPlaylistsResponse
     */
    public function setFindImageVideoDynamicPlaylistsResult($FindImageVideoDynamicPlaylistsResult)
    {
      $this->FindImageVideoDynamicPlaylistsResult = $FindImageVideoDynamicPlaylistsResult;
      return $this;
    }

}
