<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetGroupByName
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $loadDevices
     */
    protected $loadDevices = null;

    /**
     * @param string $name
     * @param boolean $loadDevices
     */
    public function __construct($name, $loadDevices)
    {
      $this->name = $name;
      $this->loadDevices = $loadDevices;
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
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupByName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadDevices()
    {
      return $this->loadDevices;
    }

    /**
     * @param boolean $loadDevices
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupByName
     */
    public function setLoadDevices($loadDevices)
    {
      $this->loadDevices = $loadDevices;
      return $this;
    }

}
