<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameWebPage
{

    /**
     * @var int $webPageId
     */
    protected $webPageId = null;

    /**
     * @var string $newName
     */
    protected $newName = null;

    /**
     * @param int $webPageId
     * @param string $newName
     */
    public function __construct($webPageId, $newName)
    {
      $this->webPageId = $webPageId;
      $this->newName = $newName;
    }

    /**
     * @return int
     */
    public function getWebPageId()
    {
      return $this->webPageId;
    }

    /**
     * @param int $webPageId
     * @return \WSD\BrightSignApi\Entity\Application\RenameWebPage
     */
    public function setWebPageId($webPageId)
    {
      $this->webPageId = $webPageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewName()
    {
      return $this->newName;
    }

    /**
     * @param string $newName
     * @return \WSD\BrightSignApi\Entity\Application\RenameWebPage
     */
    public function setNewName($newName)
    {
      $this->newName = $newName;
      return $this;
    }

}
