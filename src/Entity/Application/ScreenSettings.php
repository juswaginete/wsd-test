<?php

namespace WSD\BrightSignApi\Entity\Application;

class ScreenSettings
{

    /**
     * @var string $BackgroundColor
     */
    protected $BackgroundColor = null;

    /**
     * @var ConnectorType $Connector
     */
    protected $Connector = null;

    /**
     * @var ScreenOrientation $Orientation
     */
    protected $Orientation = null;

    /**
     * @var ScreenOverscan $Overscan
     */
    protected $Overscan = null;

    /**
     * @var VideoMode $VideoMode
     */
    protected $VideoMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
      return $this->BackgroundColor;
    }

    /**
     * @param string $BackgroundColor
     * @return \WSD\BrightSignApi\Entity\Application\ScreenSettings
     */
    public function setBackgroundColor($BackgroundColor)
    {
      $this->BackgroundColor = $BackgroundColor;
      return $this;
    }

    /**
     * @return ConnectorType
     */
    public function getConnector()
    {
      return $this->Connector;
    }

    /**
     * @param ConnectorType $Connector
     * @return \WSD\BrightSignApi\Entity\Application\ScreenSettings
     */
    public function setConnector($Connector)
    {
      $this->Connector = $Connector;
      return $this;
    }

    /**
     * @return ScreenOrientation
     */
    public function getOrientation()
    {
      return $this->Orientation;
    }

    /**
     * @param ScreenOrientation $Orientation
     * @return \WSD\BrightSignApi\Entity\Application\ScreenSettings
     */
    public function setOrientation($Orientation)
    {
      $this->Orientation = $Orientation;
      return $this;
    }

    /**
     * @return ScreenOverscan
     */
    public function getOverscan()
    {
      return $this->Overscan;
    }

    /**
     * @param ScreenOverscan $Overscan
     * @return \WSD\BrightSignApi\Entity\Application\ScreenSettings
     */
    public function setOverscan($Overscan)
    {
      $this->Overscan = $Overscan;
      return $this;
    }

    /**
     * @return VideoMode
     */
    public function getVideoMode()
    {
      return $this->VideoMode;
    }

    /**
     * @param VideoMode $VideoMode
     * @return \WSD\BrightSignApi\Entity\Application\ScreenSettings
     */
    public function setVideoMode($VideoMode)
    {
      $this->VideoMode = $VideoMode;
      return $this;
    }

}
