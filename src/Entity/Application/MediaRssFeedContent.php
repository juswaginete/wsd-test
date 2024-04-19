<?php

namespace WSD\BrightSignApi\Entity\Application;

class MediaRssFeedContent extends PresentationContent
{

    /**
     * @var int $DynamicPlaylistId
     */
    protected $DynamicPlaylistId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getDynamicPlaylistId()
    {
      return $this->DynamicPlaylistId;
    }

    /**
     * @param int $DynamicPlaylistId
     * @return \WSD\BrightSignApi\Entity\Application\MediaRssFeedContent
     */
    public function setDynamicPlaylistId($DynamicPlaylistId)
    {
      $this->DynamicPlaylistId = $DynamicPlaylistId;
      return $this;
    }

}
