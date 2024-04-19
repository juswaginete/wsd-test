<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceBySerial
{

    /**
     * @var string $serial
     */
    protected $serial = null;

    /**
     * @param string $serial
     */
    public function __construct($serial)
    {
      $this->serial = $serial;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
      return $this->serial;
    }

    /**
     * @param string $serial
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceBySerial
     */
    public function setSerial($serial)
    {
      $this->serial = $serial;
      return $this;
    }

}
