<?php

namespace WSD\BrightSignApi\Entity\Application;

class ImageContent extends PresentationContent
{

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    /**
     * @var duration $DisplayDuration
     */
    protected $DisplayDuration = null;

    /**
     * @var TransitionEffect $Transition
     */
    protected $Transition = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return int
     */
    public function getContentId()
    {
      return $this->ContentId;
    }

    /**
     * @param int $ContentId
     * @return \WSD\BrightSignApi\Entity\Application\ImageContent
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDisplayDuration()
    {
      return $this->DisplayDuration;
    }

    /**
     * @param duration $DisplayDuration
     * @return \WSD\BrightSignApi\Entity\Application\ImageContent
     */
    public function setDisplayDuration($DisplayDuration)
    {
      $this->DisplayDuration = $DisplayDuration;
      return $this;
    }

    /**
     * @return TransitionEffect
     */
    public function getTransition()
    {
      return $this->Transition;
    }

    /**
     * @param TransitionEffect $Transition
     * @return \WSD\BrightSignApi\Entity\Application\ImageContent
     */
    public function setTransition($Transition)
    {
      $this->Transition = $Transition;
      return $this;
    }

}
