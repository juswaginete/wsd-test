<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetImageVideoDynamicPlaylistsResponse
{

    /**
     * @var PagedImageVideoDynamicPlaylistList $GetImageVideoDynamicPlaylistsResult
     */
    protected $GetImageVideoDynamicPlaylistsResult = null;

    /**
     * @param PagedImageVideoDynamicPlaylistList $GetImageVideoDynamicPlaylistsResult
     */
    public function __construct($GetImageVideoDynamicPlaylistsResult)
    {
      $this->GetImageVideoDynamicPlaylistsResult = $GetImageVideoDynamicPlaylistsResult;
    }

    /**
     * @return PagedImageVideoDynamicPlaylistList
     */
    public function getGetImageVideoDynamicPlaylistsResult()
    {
      return $this->GetImageVideoDynamicPlaylistsResult;
    }

    /**
     * @param PagedImageVideoDynamicPlaylistList $GetImageVideoDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetImageVideoDynamicPlaylistsResponse
     */
    public function setGetImageVideoDynamicPlaylistsResult($GetImageVideoDynamicPlaylistsResult)
    {
      $this->GetImageVideoDynamicPlaylistsResult = $GetImageVideoDynamicPlaylistsResult;
      return $this;
    }

}
