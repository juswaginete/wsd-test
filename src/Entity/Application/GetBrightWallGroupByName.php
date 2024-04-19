<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallGroupByName
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $loadBrightWalls
     */
    protected $loadBrightWalls = null;

    /**
     * @param string $name
     * @param boolean $loadBrightWalls
     */
    public function __construct($name, $loadBrightWalls)
    {
      $this->name = $name;
      $this->loadBrightWalls = $loadBrightWalls;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroupByName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadBrightWalls()
    {
      return $this->loadBrightWalls;
    }

    /**
     * @param boolean $loadBrightWalls
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallGroupByName
     */
    public function setLoadBrightWalls($loadBrightWalls)
    {
      $this->loadBrightWalls = $loadBrightWalls;
      return $this;
    }

}
