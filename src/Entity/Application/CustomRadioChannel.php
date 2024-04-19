<?php

namespace WSD\BrightSignApi\Entity\Application;

class CustomRadioChannel extends RadioChannel
{

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $VirtualChannel
     */
    protected $VirtualChannel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \WSD\BrightSignApi\Entity\Application\CustomRadioChannel
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getVirtualChannel()
    {
      return $this->VirtualChannel;
    }

    /**
     * @param string $VirtualChannel
     * @return \WSD\BrightSignApi\Entity\Application\CustomRadioChannel
     */
    public function setVirtualChannel($VirtualChannel)
    {
      $this->VirtualChannel = $VirtualChannel;
      return $this;
    }

}
