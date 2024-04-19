<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateDynamicPlaylistResponse
{

    /**
     * @var DynamicPlaylist $CreateDynamicPlaylistResult
     */
    protected $CreateDynamicPlaylistResult = null;

    /**
     * @param DynamicPlaylist $CreateDynamicPlaylistResult
     */
    public function __construct($CreateDynamicPlaylistResult)
    {
      $this->CreateDynamicPlaylistResult = $CreateDynamicPlaylistResult;
    }

    /**
     * @return DynamicPlaylist
     */
    public function getCreateDynamicPlaylistResult()
    {
      return $this->CreateDynamicPlaylistResult;
    }

    /**
     * @param DynamicPlaylist $CreateDynamicPlaylistResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateDynamicPlaylistResponse
     */
    public function setCreateDynamicPlaylistResult($CreateDynamicPlaylistResult)
    {
      $this->CreateDynamicPlaylistResult = $CreateDynamicPlaylistResult;
      return $this;
    }

}
