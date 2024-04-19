<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWall
{

    /**
     * @var int $brightWallId
     */
    protected $brightWallId = null;

    /**
     * @var boolean $loadScreens
     */
    protected $loadScreens = null;

    /**
     * @param int $brightWallId
     * @param boolean $loadScreens
     */
    public function __construct($brightWallId, $loadScreens)
    {
      $this->brightWallId = $brightWallId;
      $this->loadScreens = $loadScreens;
    }

    /**
     * @return int
     */
    public function getBrightWallId()
    {
      return $this->brightWallId;
    }

    /**
     * @param int $brightWallId
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWall
     */
    public function setBrightWallId($brightWallId)
    {
      $this->brightWallId = $brightWallId;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWall
     */
    public function setLoadScreens($loadScreens)
    {
      $this->loadScreens = $loadScreens;
      return $this;
    }

}
