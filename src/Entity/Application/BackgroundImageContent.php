<?php

namespace WSD\BrightSignApi\Entity\Application;

class BackgroundImageContent extends PresentationContent
{

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\BackgroundImageContent
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
      return $this;
    }

}
