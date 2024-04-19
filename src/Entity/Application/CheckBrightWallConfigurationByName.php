<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallConfigurationByName
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
      $this->name = $name;
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
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallConfigurationByName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

}
