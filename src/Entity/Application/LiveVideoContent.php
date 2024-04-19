<?php

namespace WSD\BrightSignApi\Entity\Application;

class LiveVideoContent extends PresentationContent
{

    /**
     * @var boolean $Overscan
     */
    protected $Overscan = null;

    /**
     * @var duration $PlaybackDuration
     */
    protected $PlaybackDuration = null;

    /**
     * @var int $Volume
     */
    protected $Volume = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return boolean
     */
    public function getOverscan()
    {
      return $this->Overscan;
    }

    /**
     * @param boolean $Overscan
     * @return \WSD\BrightSignApi\Entity\Application\LiveVideoContent
     */
    public function setOverscan($Overscan)
    {
      $this->Overscan = $Overscan;
      return $this;
    }

    /**
     * @return duration
     */
    public function getPlaybackDuration()
    {
      return $this->PlaybackDuration;
    }

    /**
     * @param duration $PlaybackDuration
     * @return \WSD\BrightSignApi\Entity\Application\LiveVideoContent
     */
    public function setPlaybackDuration($PlaybackDuration)
    {
      $this->PlaybackDuration = $PlaybackDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getVolume()
    {
      return $this->Volume;
    }

    /**
     * @param int $Volume
     * @return \WSD\BrightSignApi\Entity\Application\LiveVideoContent
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

}
