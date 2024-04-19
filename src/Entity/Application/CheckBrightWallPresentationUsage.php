<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallPresentationUsage
{

    /**
     * @var int $brightWallPresentationId
     */
    protected $brightWallPresentationId = null;

    /**
     * @param int $brightWallPresentationId
     */
    public function __construct($brightWallPresentationId)
    {
      $this->brightWallPresentationId = $brightWallPresentationId;
    }

    /**
     * @return int
     */
    public function getBrightWallPresentationId()
    {
      return $this->brightWallPresentationId;
    }

    /**
     * @param int $brightWallPresentationId
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallPresentationUsage
     */
    public function setBrightWallPresentationId($brightWallPresentationId)
    {
      $this->brightWallPresentationId = $brightWallPresentationId;
      return $this;
    }

}
