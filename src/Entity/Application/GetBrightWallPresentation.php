<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallPresentation
{

    /**
     * @var int $brightWallPresentationId
     */
    protected $brightWallPresentationId = null;

    /**
     * @var boolean $loadScreens
     */
    protected $loadScreens = null;

    /**
     * @param int $brightWallPresentationId
     * @param boolean $loadScreens
     */
    public function __construct($brightWallPresentationId, $loadScreens)
    {
      $this->brightWallPresentationId = $brightWallPresentationId;
      $this->loadScreens = $loadScreens;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallPresentation
     */
    public function setBrightWallPresentationId($brightWallPresentationId)
    {
      $this->brightWallPresentationId = $brightWallPresentationId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadScreens()
    {
      return $this->loadScreens;
    }

    /**
     * @param boolean $loadScreens
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallPresentation
     */
    public function setLoadScreens($loadScreens)
    {
      $this->loadScreens = $loadScreens;
      return $this;
    }

}
