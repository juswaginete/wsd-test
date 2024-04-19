<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckPresentationUsage
{

    /**
     * @var int $presentationId
     */
    protected $presentationId = null;

    /**
     * @param int $presentationId
     */
    public function __construct($presentationId)
    {
      $this->presentationId = $presentationId;
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
     * @return \WSD\BrightSignApi\Entity\Application\CheckPresentationUsage
     */
    public function setPresentationId($presentationId)
    {
      $this->presentationId = $presentationId;
      return $this;
    }

}
