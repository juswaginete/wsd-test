<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetBrightWallByName
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $loadScreens
     */
    protected $loadScreens = null;

    /**
     * @param string $name
     * @param boolean $loadScreens
     */
    public function __construct($name, $loadScreens)
    {
      $this->name = $name;
      $this->loadScreens = $loadScreens;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallByName
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetBrightWallByName
     */
    public function setLoadScreens($loadScreens)
    {
      $this->loadScreens = $loadScreens;
      return $this;
    }

}
