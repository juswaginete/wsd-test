<?php

namespace WSD\BrightSignApi\Entity\Application;

class VirtualRadioChannel extends RadioChannel
{

    /**
     * @var string $Channel
     */
    protected $Channel = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->Channel;
    }

    /**
     * @param string $Channel
     * @return \WSD\BrightSignApi\Entity\Application\VirtualRadioChannel
     */
    public function setChannel($Channel)
    {
      $this->Channel = $Channel;
      return $this;
    }

}
