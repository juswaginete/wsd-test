<?php

namespace WSD\BrightSignApi\Entity\Application;

class FindAudioDynamicPlaylistsResponse
{

    /**
     * @var PagedAudioDynamicPlaylistList $FindAudioDynamicPlaylistsResult
     */
    protected $FindAudioDynamicPlaylistsResult = null;

    /**
     * @param PagedAudioDynamicPlaylistList $FindAudioDynamicPlaylistsResult
     */
    public function __construct($FindAudioDynamicPlaylistsResult)
    {
      $this->FindAudioDynamicPlaylistsResult = $FindAudioDynamicPlaylistsResult;
    }

    /**
     * @return PagedAudioDynamicPlaylistList
     */
    public function getFindAudioDynamicPlaylistsResult()
    {
      return $this->FindAudioDynamicPlaylistsResult;
    }

    /**
     * @param PagedAudioDynamicPlaylistList $FindAudioDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\FindAudioDynamicPlaylistsResponse
     */
    public function setFindAudioDynamicPlaylistsResult($FindAudioDynamicPlaylistsResult)
    {
      $this->FindAudioDynamicPlaylistsResult = $FindAudioDynamicPlaylistsResult;
      return $this;
    }

}
