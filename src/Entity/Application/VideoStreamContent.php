<?php

namespace WSD\BrightSignApi\Entity\Application;

class VideoStreamContent extends PresentationContent
{

    /**
     * @var duration $PlaybackDuration
     */
    protected $PlaybackDuration = null;

    /**
     * @var string $URL
     */
    protected $URL = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \WSD\BrightSignApi\Entity\Application\VideoStreamContent
     */
    public function setPlaybackDuration($PlaybackDuration)
    {
      $this->PlaybackDuration = $PlaybackDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getURL()
    {
      return $this->URL;
    }

    /**
     * @param string $URL
     * @return \WSD\BrightSignApi\Entity\Application\VideoStreamContent
     */
    public function setURL($URL)
    {
      $this->URL = $URL;
      return $this;
    }

}
