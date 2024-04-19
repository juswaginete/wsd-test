<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameDynamicPlaylist
{

    /**
     * @var int $dynamicPlaylistId
     */
    protected $dynamicPlaylistId = null;

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @param int $dynamicPlaylistId
     * @param string $newName
     */
    public function __construct($dynamicPlaylistId, $newName)
    {
      $this->dynamicPlaylistId = $dynamicPlaylistId;
      $this->newName = $newName;
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
     * @return \WSD\BrightSignApi\Entity\Application\RenameDynamicPlaylist
     */
    public function setDynamicPlaylistId($dynamicPlaylistId)
    {
      $this->dynamicPlaylistId = $dynamicPlaylistId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->newName;
    }

    /**
     * @param string $newName
     * @return \WSD\BrightSignApi\Entity\Application\RenameDynamicPlaylist
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

}
