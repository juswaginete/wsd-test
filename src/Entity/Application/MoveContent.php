<?php

namespace WSD\BrightSignApi\Entity\Application;

class MoveContent
{

    /**
     * @var ArrayOfint $contentIds
     */
    protected $contentIds = null;

    /**
     * @var string $newVirtualPath
     */
    protected $newVirtualPath = null;

    /**
     * @param ArrayOfint $contentIds
     * @param string $newVirtualPath
     */
    public function __construct($contentIds, $newVirtualPath)
    {
      $this->contentIds = $contentIds;
      $this->newVirtualPath = $newVirtualPath;
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
     * @return \WSD\BrightSignApi\Entity\Application\MoveContent
     */
    public function setContentIds($contentIds)
    {
      $this->contentIds = $contentIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewVirtualPath()
    {
      return $this->newVirtualPath;
    }

    /**
     * @param string $newVirtualPath
     * @return \WSD\BrightSignApi\Entity\Application\MoveContent
     */
    public function setNewVirtualPath($newVirtualPath)
    {
      $this->newVirtualPath = $newVirtualPath;
      return $this;
    }

}
