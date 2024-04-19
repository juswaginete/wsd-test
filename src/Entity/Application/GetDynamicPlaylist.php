<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDynamicPlaylist
{

    /**
     * @var int $dynamicPlaylistId
     */
    protected $dynamicPlaylistId = null;

    /**
     * @var boolean $loadContent
     */
    protected $loadContent = null;

    /**
     * @param int $dynamicPlaylistId
     * @param boolean $loadContent
     */
    public function __construct($dynamicPlaylistId, $loadContent)
    {
      $this->dynamicPlaylistId = $dynamicPlaylistId;
      $this->loadContent = $loadContent;
    }

    /**
     * @return int
     */
    public function getDynamicPlaylistId()
    {
      return $this->dynamicPlaylistId;
    }

    /**
     * @param int $dynamicPlaylistId
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylist
     */
    public function setDynamicPlaylistId($dynamicPlaylistId)
    {
      $this->dynamicPlaylistId = $dynamicPlaylistId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadContent()
    {
      return $this->loadContent;
    }

    /**
     * @param boolean $loadContent
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylist
     */
    public function setLoadContent($loadContent)
    {
      $this->loadContent = $loadContent;
      return $this;
    }

}
