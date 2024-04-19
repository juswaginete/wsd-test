<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeviceSettings
{

    /**
     * @var boolean $ConcatUnitNameAndSerial
     */
    protected $ConcatUnitNameAndSerial = null;

    /**
     * @var DeviceConnectionsPeriod $ContentCheckPeriod
     */
    protected $ContentCheckPeriod = null;

    /**
     * @var duration $ContentDownloadsEndTime
     */
    protected $ContentDownloadsEndTime = null;

    /**
     * @var duration $ContentDownloadsStartTime
     */
    protected $ContentDownloadsStartTime = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $DiagnosticWebServerPassword
     */
    protected $DiagnosticWebServerPassword = null;

    /**
     * @var boolean $EnableDiagnosticWebServer
     */
    protected $EnableDiagnosticWebServer = null;

    /**
     * @var boolean $EnableEthernetTest
     */
    protected $EnableEthernetTest = null;

    /**
     * @var boolean $EnableInternetTest
     */
    protected $EnableInternetTest = null;

    /**
     * @var boolean $EnableLocalWebServer
     */
    protected $EnableLocalWebServer = null;

    /**
     * @var boolean $EnableLocalWebServerUpdateNotifications
     */
    protected $EnableLocalWebServerUpdateNotifications = null;

    /**
     * @var boolean $EnableNetworkDiagnostics
     */
    protected $EnableNetworkDiagnostics = null;

    /**
     * @var boolean $EnableWirelessTest
     */
    protected $EnableWirelessTest = null;

    /**
     * @var duration $HealthReportingEndTime
     */
    protected $HealthReportingEndTime = null;

    /**
     * @var DeviceConnectionsPeriod $HealthReportingPeriod
     */
    protected $HealthReportingPeriod = null;

    /**
     * @var duration $HealthReportingStartTime
     */
    protected $HealthReportingStartTime = null;

    /**
     * @var string $Hostname
     */
    protected $Hostname = null;

    /**
     * @var string $LocalWebServerPassword
     */
    protected $LocalWebServerPassword = null;

    /**
     * @var string $LocalWebServerUserName
     */
    protected $LocalWebServerUserName = null;

    /**
     * @var DeviceLogsSettings $LogsSettings
     */
    protected $LogsSettings = null;

    /**
     * @var DeviceModel $Model
     */
    protected $Model = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var DeviceNetworkSettings $NetworkSettings
     */
    protected $NetworkSettings = null;

    /**
     * @var RemoteSnapshotSettings $RemoteSnapshotSettings
     */
    protected $RemoteSnapshotSettings = null;

    /**
     * @var string $ScreenColor
     */
    protected $ScreenColor = null;

    /**
     * @var int $TargetBrightWallId
     */
    protected $TargetBrightWallId = null;

    /**
     * @var int $TargetBrightWallScreenNumber
     */
    protected $TargetBrightWallScreenNumber = null;

    /**
     * @var int $TargetGroupId
     */
    protected $TargetGroupId = null;

    /**
     * @var string $TargetTimeZone
     */
    protected $TargetTimeZone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getConcatUnitNameAndSerial()
    {
      return $this->ConcatUnitNameAndSerial;
    }

    /**
     * @param boolean $ConcatUnitNameAndSerial
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setConcatUnitNameAndSerial($ConcatUnitNameAndSerial)
    {
      $this->ConcatUnitNameAndSerial = $ConcatUnitNameAndSerial;
      return $this;
    }

    /**
     * @return DeviceConnectionsPeriod
     */
    public function getContentCheckPeriod()
    {
      return $this->ContentCheckPeriod;
    }

    /**
     * @param DeviceConnectionsPeriod $ContentCheckPeriod
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setContentCheckPeriod($ContentCheckPeriod)
    {
      $this->ContentCheckPeriod = $ContentCheckPeriod;
      return $this;
    }

    /**
     * @return duration
     */
    public function getContentDownloadsEndTime()
    {
      return $this->ContentDownloadsEndTime;
    }

    /**
     * @param duration $ContentDownloadsEndTime
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setContentDownloadsEndTime($ContentDownloadsEndTime)
    {
      $this->ContentDownloadsEndTime = $ContentDownloadsEndTime;
      return $this;
    }

    /**
     * @return duration
     */
    public function getContentDownloadsStartTime()
    {
      return $this->ContentDownloadsStartTime;
    }

    /**
     * @param duration $ContentDownloadsStartTime
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setContentDownloadsStartTime($ContentDownloadsStartTime)
    {
      $this->ContentDownloadsStartTime = $ContentDownloadsStartTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiagnosticWebServerPassword()
    {
      return $this->DiagnosticWebServerPassword;
    }

    /**
     * @param string $DiagnosticWebServerPassword
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setDiagnosticWebServerPassword($DiagnosticWebServerPassword)
    {
      $this->DiagnosticWebServerPassword = $DiagnosticWebServerPassword;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableDiagnosticWebServer()
    {
      return $this->EnableDiagnosticWebServer;
    }

    /**
     * @param boolean $EnableDiagnosticWebServer
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableDiagnosticWebServer($EnableDiagnosticWebServer)
    {
      $this->EnableDiagnosticWebServer = $EnableDiagnosticWebServer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableEthernetTest()
    {
      return $this->EnableEthernetTest;
    }

    /**
     * @param boolean $EnableEthernetTest
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableEthernetTest($EnableEthernetTest)
    {
      $this->EnableEthernetTest = $EnableEthernetTest;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableInternetTest()
    {
      return $this->EnableInternetTest;
    }

    /**
     * @param boolean $EnableInternetTest
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableInternetTest($EnableInternetTest)
    {
      $this->EnableInternetTest = $EnableInternetTest;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableLocalWebServer()
    {
      return $this->EnableLocalWebServer;
    }

    /**
     * @param boolean $EnableLocalWebServer
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableLocalWebServer($EnableLocalWebServer)
    {
      $this->EnableLocalWebServer = $EnableLocalWebServer;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableLocalWebServerUpdateNotifications()
    {
      return $this->EnableLocalWebServerUpdateNotifications;
    }

    /**
     * @param boolean $EnableLocalWebServerUpdateNotifications
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableLocalWebServerUpdateNotifications($EnableLocalWebServerUpdateNotifications)
    {
      $this->EnableLocalWebServerUpdateNotifications = $EnableLocalWebServerUpdateNotifications;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableNetworkDiagnostics()
    {
      return $this->EnableNetworkDiagnostics;
    }

    /**
     * @param boolean $EnableNetworkDiagnostics
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableNetworkDiagnostics($EnableNetworkDiagnostics)
    {
      $this->EnableNetworkDiagnostics = $EnableNetworkDiagnostics;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableWirelessTest()
    {
      return $this->EnableWirelessTest;
    }

    /**
     * @param boolean $EnableWirelessTest
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setEnableWirelessTest($EnableWirelessTest)
    {
      $this->EnableWirelessTest = $EnableWirelessTest;
      return $this;
    }

    /**
     * @return duration
     */
    public function getHealthReportingEndTime()
    {
      return $this->HealthReportingEndTime;
    }

    /**
     * @param duration $HealthReportingEndTime
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setHealthReportingEndTime($HealthReportingEndTime)
    {
      $this->HealthReportingEndTime = $HealthReportingEndTime;
      return $this;
    }

    /**
     * @return DeviceConnectionsPeriod
     */
    public function getHealthReportingPeriod()
    {
      return $this->HealthReportingPeriod;
    }

    /**
     * @param DeviceConnectionsPeriod $HealthReportingPeriod
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setHealthReportingPeriod($HealthReportingPeriod)
    {
      $this->HealthReportingPeriod = $HealthReportingPeriod;
      return $this;
    }

    /**
     * @return duration
     */
    public function getHealthReportingStartTime()
    {
      return $this->HealthReportingStartTime;
    }

    /**
     * @param duration $HealthReportingStartTime
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setHealthReportingStartTime($HealthReportingStartTime)
    {
      $this->HealthReportingStartTime = $HealthReportingStartTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
      return $this->Hostname;
    }

    /**
     * @param string $Hostname
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setHostname($Hostname)
    {
      $this->Hostname = $Hostname;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalWebServerPassword()
    {
      return $this->LocalWebServerPassword;
    }

    /**
     * @param string $LocalWebServerPassword
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setLocalWebServerPassword($LocalWebServerPassword)
    {
      $this->LocalWebServerPassword = $LocalWebServerPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocalWebServerUserName()
    {
      return $this->LocalWebServerUserName;
    }

    /**
     * @param string $LocalWebServerUserName
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setLocalWebServerUserName($LocalWebServerUserName)
    {
      $this->LocalWebServerUserName = $LocalWebServerUserName;
      return $this;
    }

    /**
     * @return DeviceLogsSettings
     */
    public function getLogsSettings()
    {
      return $this->LogsSettings;
    }

    /**
     * @param DeviceLogsSettings $LogsSettings
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setLogsSettings($LogsSettings)
    {
      $this->LogsSettings = $LogsSettings;
      return $this;
    }

    /**
     * @return DeviceModel
     */
    public function getModel()
    {
      return $this->Model;
    }

    /**
     * @param DeviceModel $Model
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setModel($Model)
    {
      $this->Model = $Model;
      return $this;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return DeviceNetworkSettings
     */
    public function getNetworkSettings()
    {
      return $this->NetworkSettings;
    }

    /**
     * @param DeviceNetworkSettings $NetworkSettings
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setNetworkSettings($NetworkSettings)
    {
      $this->NetworkSettings = $NetworkSettings;
      return $this;
    }

    /**
     * @return RemoteSnapshotSettings
     */
    public function getRemoteSnapshotSettings()
    {
      return $this->RemoteSnapshotSettings;
    }

    /**
     * @param RemoteSnapshotSettings $RemoteSnapshotSettings
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setRemoteSnapshotSettings($RemoteSnapshotSettings)
    {
      $this->RemoteSnapshotSettings = $RemoteSnapshotSettings;
      return $this;
    }

    /**
     * @return string
     */
    public function getScreenColor()
    {
      return $this->ScreenColor;
    }

    /**
     * @param string $ScreenColor
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setScreenColor($ScreenColor)
    {
      $this->ScreenColor = $ScreenColor;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetBrightWallId()
    {
      return $this->TargetBrightWallId;
    }

    /**
     * @param int $TargetBrightWallId
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setTargetBrightWallId($TargetBrightWallId)
    {
      $this->TargetBrightWallId = $TargetBrightWallId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetBrightWallScreenNumber()
    {
      return $this->TargetBrightWallScreenNumber;
    }

    /**
     * @param int $TargetBrightWallScreenNumber
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setTargetBrightWallScreenNumber($TargetBrightWallScreenNumber)
    {
      $this->TargetBrightWallScreenNumber = $TargetBrightWallScreenNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getTargetGroupId()
    {
      return $this->TargetGroupId;
    }

    /**
     * @param int $TargetGroupId
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setTargetGroupId($TargetGroupId)
    {
      $this->TargetGroupId = $TargetGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetTimeZone()
    {
      return $this->TargetTimeZone;
    }

    /**
     * @param string $TargetTimeZone
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSettings
     */
    public function setTargetTimeZone($TargetTimeZone)
    {
      $this->TargetTimeZone = $TargetTimeZone;
      return $this;
    }

}
