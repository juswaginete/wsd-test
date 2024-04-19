<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckDynamicPlaylistUsage
{

    /**
     * @var int $dynamicPlaylistId
     */
    protected $dynamicPlaylistId = null;

    /**
     * @param int $dynamicPlaylistId
     */
    public function __construct($dynamicPlaylistId)
    {
      $this->dynamicPlaylistId = $dynamicPlaylistId;
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
     * @return \WSD\BrightSignApi\Entity\Application\CheckDynamicPlaylistUsage
     */
    public function setDynamicPlaylistId($dynamicPlaylistId)
    {
      $this->dynamicPlaylistId = $dynamicPlaylistId;
      return $this;
    }

}
