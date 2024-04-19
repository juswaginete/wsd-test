<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetPresentation
{

    /**
     * @var int $presentationId
     */
    protected $presentationId = null;

    /**
     * @var boolean $loadContent
     */
    protected $loadContent = null;

    /**
     * @param int $presentationId
     * @param boolean $loadContent
     */
    public function __construct($presentationId, $loadContent)
    {
      $this->presentationId = $presentationId;
      $this->loadContent = $loadContent;
    }

    /**
     * @return int
     */
    public function getPresentationId()
    {
      return $this->presentationId;
    }

    /**
     * @param int $presentationId
     * @return \WSD\BrightSignApi\Entity\Application\GetPresentation
     */
    public function setPresentationId($presentationId)
    {
      $this->presentationId = $presentationId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadContent()
    {
      return $this->loadContent;
    }

    /**
     * @param boolean $loadContent
     * @return \WSD\BrightSignApi\Entity\Application\GetPresentation
     */
    public function setLoadContent($loadContent)
    {
      $this->loadContent = $loadContent;
      return $this;
    }

}
