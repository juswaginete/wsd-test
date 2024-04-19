<?php

namespace WSD\BrightSignApi\Entity\Application;

class BrightWallScreen
{

    /**
     * @var ArrayOfPresentationContent $Content
     */
    protected $Content = null;

    /**
     * @var Device $Device
     */
    protected $Device = null;

    /**
     * @var int $Number
     */
    protected $Number = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfPresentationContent
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfPresentationContent $Content
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallScreen
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return Device
     */
    public function getDevice()
    {
      return $this->Device;
    }

    /**
     * @param Device $Device
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallScreen
     */
    public function setDevice($Device)
    {
      $this->Device = $Device;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
      return $this->Number;
    }

    /**
     * @param int $Number
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallScreen
     */
    public function setNumber($Number)
    {
      $this->Number = $Number;
      return $this;
    }

}
