<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeviceNetworkSettings
{

    /**
     * @var string $Broadcast
     */
    protected $Broadcast = null;

    /**
     * @var ArrayOfstring $ProxyBypass
     */
    protected $ProxyBypass = null;

    /**
     * @var string $ProxyServer
     */
    protected $ProxyServer = null;

    /**
     * @var string $TimeServer
     */
    protected $TimeServer = null;

    /**
     * @var DeviceWiredSettings $Wired
     */
    protected $Wired = null;

    /**
     * @var int $WiredConnectionPriority
     */
    protected $WiredConnectionPriority = null;

    /**
     * @var DeviceWirelessSettings $Wireless
     */
    protected $Wireless = null;

    /**
     * @var int $WirelessConnectionPriority
     */
    protected $WirelessConnectionPriority = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getBroadcast()
    {
      return $this->Broadcast;
    }

    /**
     * @param string $Broadcast
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setBroadcast($Broadcast)
    {
      $this->Broadcast = $Broadcast;
      return $this;
    }

    /**
     * @return ArrayOfstring
     */
    public function getProxyBypass()
    {
      return $this->ProxyBypass;
    }

    /**
     * @param ArrayOfstring $ProxyBypass
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setProxyBypass($ProxyBypass)
    {
      $this->ProxyBypass = $ProxyBypass;
      return $this;
    }

    /**
     * @return string
     */
    public function getProxyServer()
    {
      return $this->ProxyServer;
    }

    /**
     * @param string $ProxyServer
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setProxyServer($ProxyServer)
    {
      $this->ProxyServer = $ProxyServer;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeServer()
    {
      return $this->TimeServer;
    }

    /**
     * @param string $TimeServer
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setTimeServer($TimeServer)
    {
      $this->TimeServer = $TimeServer;
      return $this;
    }

    /**
     * @return DeviceWiredSettings
     */
    public function getWired()
    {
      return $this->Wired;
    }

    /**
     * @param DeviceWiredSettings $Wired
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setWired($Wired)
    {
      $this->Wired = $Wired;
      return $this;
    }

    /**
     * @return int
     */
    public function getWiredConnectionPriority()
    {
      return $this->WiredConnectionPriority;
    }

    /**
     * @param int $WiredConnectionPriority
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setWiredConnectionPriority($WiredConnectionPriority)
    {
      $this->WiredConnectionPriority = $WiredConnectionPriority;
      return $this;
    }

    /**
     * @return DeviceWirelessSettings
     */
    public function getWireless()
    {
      return $this->Wireless;
    }

    /**
     * @param DeviceWirelessSettings $Wireless
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setWireless($Wireless)
    {
      $this->Wireless = $Wireless;
      return $this;
    }

    /**
     * @return int
     */
    public function getWirelessConnectionPriority()
    {
      return $this->WirelessConnectionPriority;
    }

    /**
     * @param int $WirelessConnectionPriority
     * @return \WSD\BrightSignApi\Entity\Application\DeviceNetworkSettings
     */
    public function setWirelessConnectionPriority($WirelessConnectionPriority)
    {
      $this->WirelessConnectionPriority = $WirelessConnectionPriority;
      return $this;
    }

}
