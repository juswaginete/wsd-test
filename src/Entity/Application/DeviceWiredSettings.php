<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeviceWiredSettings
{

    /**
     * @var boolean $ContentDownloadEnabled
     */
    protected $ContentDownloadEnabled = null;

    /**
     * @var string $DNS1
     */
    protected $DNS1 = null;

    /**
     * @var string $DNS2
     */
    protected $DNS2 = null;

    /**
     * @var string $DNS3
     */
    protected $DNS3 = null;

    /**
     * @var string $DefaultGateway
     */
    protected $DefaultGateway = null;

    /**
     * @var boolean $HealthReportingEnabled
     */
    protected $HealthReportingEnabled = null;

    /**
     * @var string $IpAddress
     */
    protected $IpAddress = null;

    /**
     * @var boolean $LogsUploadEnabled
     */
    protected $LogsUploadEnabled = null;

    /**
     * @var boolean $MediaFeedsDownloadEnabled
     */
    protected $MediaFeedsDownloadEnabled = null;

    /**
     * @var int $RateLimitDuringInitialDownloads
     */
    protected $RateLimitDuringInitialDownloads = null;

    /**
     * @var int $RateLimitInsideContentDownloadWindow
     */
    protected $RateLimitInsideContentDownloadWindow = null;

    /**
     * @var int $RateLimitOutsideContentDownloadWindow
     */
    protected $RateLimitOutsideContentDownloadWindow = null;

    /**
     * @var string $SubnetMask
     */
    protected $SubnetMask = null;

    /**
     * @var boolean $TextFeedsDownloadEnabled
     */
    protected $TextFeedsDownloadEnabled = null;

    /**
     * @var boolean $UseDHCP
     */
    protected $UseDHCP = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getContentDownloadEnabled()
    {
      return $this->ContentDownloadEnabled;
    }

    /**
     * @param boolean $ContentDownloadEnabled
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setContentDownloadEnabled($ContentDownloadEnabled)
    {
      $this->ContentDownloadEnabled = $ContentDownloadEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getDNS1()
    {
      return $this->DNS1;
    }

    /**
     * @param string $DNS1
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setDNS1($DNS1)
    {
      $this->DNS1 = $DNS1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDNS2()
    {
      return $this->DNS2;
    }

    /**
     * @param string $DNS2
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setDNS2($DNS2)
    {
      $this->DNS2 = $DNS2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDNS3()
    {
      return $this->DNS3;
    }

    /**
     * @param string $DNS3
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setDNS3($DNS3)
    {
      $this->DNS3 = $DNS3;
      return $this;
    }

    /**
     * @return string
     */
    public function getDefaultGateway()
    {
      return $this->DefaultGateway;
    }

    /**
     * @param string $DefaultGateway
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setDefaultGateway($DefaultGateway)
    {
      $this->DefaultGateway = $DefaultGateway;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHealthReportingEnabled()
    {
      return $this->HealthReportingEnabled;
    }

    /**
     * @param boolean $HealthReportingEnabled
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setHealthReportingEnabled($HealthReportingEnabled)
    {
      $this->HealthReportingEnabled = $HealthReportingEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
      return $this->IpAddress;
    }

    /**
     * @param string $IpAddress
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setIpAddress($IpAddress)
    {
      $this->IpAddress = $IpAddress;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLogsUploadEnabled()
    {
      return $this->LogsUploadEnabled;
    }

    /**
     * @param boolean $LogsUploadEnabled
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setLogsUploadEnabled($LogsUploadEnabled)
    {
      $this->LogsUploadEnabled = $LogsUploadEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMediaFeedsDownloadEnabled()
    {
      return $this->MediaFeedsDownloadEnabled;
    }

    /**
     * @param boolean $MediaFeedsDownloadEnabled
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setMediaFeedsDownloadEnabled($MediaFeedsDownloadEnabled)
    {
      $this->MediaFeedsDownloadEnabled = $MediaFeedsDownloadEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateLimitDuringInitialDownloads()
    {
      return $this->RateLimitDuringInitialDownloads;
    }

    /**
     * @param int $RateLimitDuringInitialDownloads
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setRateLimitDuringInitialDownloads($RateLimitDuringInitialDownloads)
    {
      $this->RateLimitDuringInitialDownloads = $RateLimitDuringInitialDownloads;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateLimitInsideContentDownloadWindow()
    {
      return $this->RateLimitInsideContentDownloadWindow;
    }

    /**
     * @param int $RateLimitInsideContentDownloadWindow
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setRateLimitInsideContentDownloadWindow($RateLimitInsideContentDownloadWindow)
    {
      $this->RateLimitInsideContentDownloadWindow = $RateLimitInsideContentDownloadWindow;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateLimitOutsideContentDownloadWindow()
    {
      return $this->RateLimitOutsideContentDownloadWindow;
    }

    /**
     * @param int $RateLimitOutsideContentDownloadWindow
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setRateLimitOutsideContentDownloadWindow($RateLimitOutsideContentDownloadWindow)
    {
      $this->RateLimitOutsideContentDownloadWindow = $RateLimitOutsideContentDownloadWindow;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubnetMask()
    {
      return $this->SubnetMask;
    }

    /**
     * @param string $SubnetMask
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setSubnetMask($SubnetMask)
    {
      $this->SubnetMask = $SubnetMask;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTextFeedsDownloadEnabled()
    {
      return $this->TextFeedsDownloadEnabled;
    }

    /**
     * @param boolean $TextFeedsDownloadEnabled
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setTextFeedsDownloadEnabled($TextFeedsDownloadEnabled)
    {
      $this->TextFeedsDownloadEnabled = $TextFeedsDownloadEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseDHCP()
    {
      return $this->UseDHCP;
    }

    /**
     * @param boolean $UseDHCP
     * @return \WSD\BrightSignApi\Entity\Application\DeviceWiredSettings
     */
    public function setUseDHCP($UseDHCP)
    {
      $this->UseDHCP = $UseDHCP;
      return $this;
    }

}
