<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetContent
{

    /**
     * @var int $contentId
     */
    protected $contentId = null;

    /**
     * @param int $contentId
     */
    public function __construct($contentId)
    {
      $this->contentId = $contentId;
    }

    /**
     * @return int
     */
    public function getContentId()
    {
      return $this->contentId;
    }

    /**
     * @param int $contentId
     * @return \WSD\BrightSignApi\Entity\Application\GetContent
     */
    public function setContentId($contentId)
    {
      $this->contentId = $contentId;
      return $this;
    }

}
