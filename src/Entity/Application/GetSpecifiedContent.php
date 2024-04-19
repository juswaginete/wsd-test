<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedContent
{

    /**
     * @var ArrayOfint $contentIds
     */
    protected $contentIds = null;

    /**
     * @param ArrayOfint $contentIds
     */
    public function __construct($contentIds)
    {
      $this->contentIds = $contentIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getContentIds()
    {
      return $this->contentIds;
    }

    /**
     * @param ArrayOfint $contentIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedContent
     */
    public function setContentIds($contentIds)
    {
      $this->contentIds = $contentIds;
      return $this;
    }

}
