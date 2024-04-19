<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetAudioDynamicPlaylistsResponse
{

    /**
     * @var PagedAudioDynamicPlaylistList $GetAudioDynamicPlaylistsResult
     */
    protected $GetAudioDynamicPlaylistsResult = null;

    /**
     * @param PagedAudioDynamicPlaylistList $GetAudioDynamicPlaylistsResult
     */
    public function __construct($GetAudioDynamicPlaylistsResult)
    {
      $this->GetAudioDynamicPlaylistsResult = $GetAudioDynamicPlaylistsResult;
    }

    /**
     * @return PagedAudioDynamicPlaylistList
     */
    public function getGetAudioDynamicPlaylistsResult()
    {
      return $this->GetAudioDynamicPlaylistsResult;
    }

    /**
     * @param PagedAudioDynamicPlaylistList $GetAudioDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetAudioDynamicPlaylistsResponse
     */
    public function setGetAudioDynamicPlaylistsResult($GetAudioDynamicPlaylistsResult)
    {
      $this->GetAudioDynamicPlaylistsResult = $GetAudioDynamicPlaylistsResult;
      return $this;
    }

}
