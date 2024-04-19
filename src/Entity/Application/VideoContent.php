<?php

namespace WSD\BrightSignApi\Entity\Application;

class VideoContent extends PresentationContent
{

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    /**
     * @var int $Volume
     */
    protected $Volume = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\VideoContent
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
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
     * @return \WSD\BrightSignApi\Entity\Application\VideoContent
     */
    public function setVolume($Volume)
    {
      $this->Volume = $Volume;
      return $this;
    }

}
