<?php

namespace WSD\BrightSignApi\Entity\Application;

class RadioInputContent extends PresentationContent
{

    /**
     * @var RadioChannel $Channel
     */
    protected $Channel = null;

    /**
     * @var boolean $Overscan
     */
    protected $Overscan = null;

    /**
     * @var duration $PlaybackDuration
     */
    protected $PlaybackDuration = null;

    /**
     * @var RadioStateReentryAction $ReentryAction
     */
    protected $ReentryAction = null;

    /**
     * @var int $Volume
     */
    protected $Volume = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return RadioChannel
     */
    public function getChannel()
    {
      return $this->Channel;
    }

    /**
     * @param RadioChannel $Channel
     * @return \WSD\BrightSignApi\Entity\Application\RadioInputContent
     */
    public function setChannel($Channel)
    {
      $this->Channel = $Channel;
      return $this;
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
     * @return \WSD\BrightSignApi\Entity\Application\RadioInputContent
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
     * @return \WSD\BrightSignApi\Entity\Application\RadioInputContent
     */
    public function setPlaybackDuration($PlaybackDuration)
    {
      $this->PlaybackDuration = $PlaybackDuration;
      return $this;
    }

    /**
     * @return RadioStateReentryAction
     */
    public function getReentryAction()
    {
      return $this->ReentryAction;
    }

    /**
     * @param RadioStateReentryAction $ReentryAction
     * @return \WSD\BrightSignApi\Entity\Application\RadioInputContent
     */
    public function setReentryAction($ReentryAction)
    {
      $this->ReentryAction = $ReentryAction;
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
     * @return \WSD\BrightSignApi\Entity\Application\RadioInputContent
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

}
