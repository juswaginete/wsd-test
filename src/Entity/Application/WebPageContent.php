<?php

namespace WSD\BrightSignApi\Entity\Application;

class WebPageContent extends PresentationContent
{

    /**
     * @var duration $DisplayDuration
     */
    protected $DisplayDuration = null;

    /**
     * @var int $WebPageId
     */
    protected $WebPageId = null;

    
    public function __construct()
    {
      parent::__construct();
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPageContent
     */
    public function setDisplayDuration($DisplayDuration)
    {
      $this->DisplayDuration = $DisplayDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebPageId()
    {
      return $this->WebPageId;
    }

    /**
     * @param int $WebPageId
     * @return \WSD\BrightSignApi\Entity\Application\WebPageContent
     */
    public function setWebPageId($WebPageId)
    {
      $this->WebPageId = $WebPageId;
      return $this;
    }

}
