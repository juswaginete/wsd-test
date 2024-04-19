<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedDynamicPlaylists
{

    /**
     * @var ArrayOfint $dynamicPlaylistIds
     */
    protected $dynamicPlaylistIds = null;

    /**
     * @param ArrayOfint $dynamicPlaylistIds
     */
    public function __construct($dynamicPlaylistIds)
    {
      $this->dynamicPlaylistIds = $dynamicPlaylistIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getDynamicPlaylistIds()
    {
      return $this->dynamicPlaylistIds;
    }

    /**
     * @param ArrayOfint $dynamicPlaylistIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedDynamicPlaylists
     */
    public function setDynamicPlaylistIds($dynamicPlaylistIds)
    {
      $this->dynamicPlaylistIds = $dynamicPlaylistIds;
      return $this;
    }

}
