<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class Device
{

    /**
     * @var string $AutorunVersion
     */
    protected $AutorunVersion = null;

    /**
     * @var string $CardFreeSize
     */
    protected $CardFreeSize = null;

    /**
     * @var string $CardSize
     */
    protected $CardSize = null;

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
     * @var DeviceSubscription $CurrentSubscription
     */
    protected $CurrentSubscription = null;

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
     * @var DeviceFamily $Family
     */
    protected $Family = null;

    /**
     * @var string $FirmwareVersion
     */
    protected $FirmwareVersion = null;

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
     * @var DeviceHealthStatus $HealthStatus
     */
    protected $HealthStatus = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var \DateTime $LastContentCheckTime
     */
    protected $LastContentCheckTime = null;

    /**
     * @var \DateTime $LastContentDownloadEndTime
     */
    protected $LastContentDownloadEndTime = null;

    /**
     * @var \DateTime $LastContentDownloadStartTime
     */
    protected $LastContentDownloadStartTime = null;

    /**
     * @var \DateTime $LastErrorTime
     */
    protected $LastErrorTime = null;

    /**
     * @var \DateTime $LastHeartbeatTime
     */
    protected $LastHeartbeatTime = null;

    /**
     * @var \DateTime $LastSyncSpecProcessedTime
     */
    protected $LastSyncSpecProcessedTime = null;

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
     * @var PresentationInfo $Presentation
     */
    protected $Presentation = null;

    /**
     * @var RemoteSnapshotSettings $RemoteSnapshotSettings
     */
    protected $RemoteSnapshotSettings = null;

    /**
     * @var int $ReportedBrightWallId
     */
    protected $ReportedBrightWallId = null;

    /**
     * @var int $ReportedBrightWallScreenNumber
     */
    protected $ReportedBrightWallScreenNumber = null;

    /**
     * @var int $ReportedGroupId
     */
    protected $ReportedGroupId = null;

    /**
     * @var string $ReportedTimeZone
     */
    protected $ReportedTimeZone = null;

    /**
     * @var string $Serial
     */
    protected $Serial = null;

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
     * @return string
     */
    public function getAutorunVersion()
    {
      return $this->AutorunVersion;
    }

    /**
     * @param string $AutorunVersion
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setAutorunVersion($AutorunVersion)
    {
      $this->AutorunVersion = $AutorunVersion;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardFreeSize()
    {
      return $this->CardFreeSize;
    }

    /**
     * @param string $CardFreeSize
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setCardFreeSize($CardFreeSize)
    {
      $this->CardFreeSize = $CardFreeSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getCardSize()
    {
      return $this->CardSize;
    }

    /**
     * @param string $CardSize
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setCardSize($CardSize)
    {
      $this->CardSize = $CardSize;
      return $this;
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setContentDownloadsStartTime($ContentDownloadsStartTime)
    {
      $this->ContentDownloadsStartTime = $ContentDownloadsStartTime;
      return $this;
    }

    /**
     * @return DeviceSubscription
     */
    public function getCurrentSubscription()
    {
      return $this->CurrentSubscription;
    }

    /**
     * @param DeviceSubscription $CurrentSubscription
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setCurrentSubscription($CurrentSubscription)
    {
      $this->CurrentSubscription = $CurrentSubscription;
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setEnableDiagnosticWebServer($EnableDiagnosticWebServer)
    {
      $this->EnableDiagnosticWebServer = $EnableDiagnosticWebServer;
      return $this;
    }

    /**
     * @return DeviceFamily
     */
    public function getFamily()
    {
      return $this->Family;
    }

    /**
     * @param DeviceFamily $Family
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setFamily($Family)
    {
      $this->Family = $Family;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirmwareVersion()
    {
      return $this->FirmwareVersion;
    }

    /**
     * @param string $FirmwareVersion
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setFirmwareVersion($FirmwareVersion)
    {
      $this->FirmwareVersion = $FirmwareVersion;
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setHealthReportingStartTime($HealthReportingStartTime)
    {
      $this->HealthReportingStartTime = $HealthReportingStartTime;
      return $this;
    }

    /**
     * @return DeviceHealthStatus
     */
    public function getHealthStatus()
    {
      return $this->HealthStatus;
    }

    /**
     * @param DeviceHealthStatus $HealthStatus
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setHealthStatus($HealthStatus)
    {
      $this->HealthStatus = $HealthStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastContentCheckTime()
    {
      if ($this->LastContentCheckTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastContentCheckTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastContentCheckTime
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setLastContentCheckTime(\DateTime $LastContentCheckTime = null)
    {
      if ($LastContentCheckTime == null) {
       $this->LastContentCheckTime = null;
      } else {
        $this->LastContentCheckTime = $LastContentCheckTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastContentDownloadEndTime()
    {
      if ($this->LastContentDownloadEndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastContentDownloadEndTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastContentDownloadEndTime
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setLastContentDownloadEndTime(\DateTime $LastContentDownloadEndTime = null)
    {
      if ($LastContentDownloadEndTime == null) {
       $this->LastContentDownloadEndTime = null;
      } else {
        $this->LastContentDownloadEndTime = $LastContentDownloadEndTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastContentDownloadStartTime()
    {
      if ($this->LastContentDownloadStartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastContentDownloadStartTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastContentDownloadStartTime
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setLastContentDownloadStartTime(\DateTime $LastContentDownloadStartTime = null)
    {
      if ($LastContentDownloadStartTime == null) {
       $this->LastContentDownloadStartTime = null;
      } else {
        $this->LastContentDownloadStartTime = $LastContentDownloadStartTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastErrorTime()
    {
      if ($this->LastErrorTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastErrorTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastErrorTime
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setLastErrorTime(\DateTime $LastErrorTime = null)
    {
      if ($LastErrorTime == null) {
       $this->LastErrorTime = null;
      } else {
        $this->LastErrorTime = $LastErrorTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastHeartbeatTime()
    {
      if ($this->LastHeartbeatTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastHeartbeatTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastHeartbeatTime
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setLastHeartbeatTime(\DateTime $LastHeartbeatTime = null)
    {
      if ($LastHeartbeatTime == null) {
       $this->LastHeartbeatTime = null;
      } else {
        $this->LastHeartbeatTime = $LastHeartbeatTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastSyncSpecProcessedTime()
    {
      if ($this->LastSyncSpecProcessedTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastSyncSpecProcessedTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastSyncSpecProcessedTime
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setLastSyncSpecProcessedTime(\DateTime $LastSyncSpecProcessedTime = null)
    {
      if ($LastSyncSpecProcessedTime == null) {
       $this->LastSyncSpecProcessedTime = null;
      } else {
        $this->LastSyncSpecProcessedTime = $LastSyncSpecProcessedTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setNetworkSettings($NetworkSettings)
    {
      $this->NetworkSettings = $NetworkSettings;
      return $this;
    }

    /**
     * @return PresentationInfo
     */
    public function getPresentation()
    {
      return $this->Presentation;
    }

    /**
     * @param PresentationInfo $Presentation
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setPresentation($Presentation)
    {
      $this->Presentation = $Presentation;
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setRemoteSnapshotSettings($RemoteSnapshotSettings)
    {
      $this->RemoteSnapshotSettings = $RemoteSnapshotSettings;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportedBrightWallId()
    {
      return $this->ReportedBrightWallId;
    }

    /**
     * @param int $ReportedBrightWallId
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setReportedBrightWallId($ReportedBrightWallId)
    {
      $this->ReportedBrightWallId = $ReportedBrightWallId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportedBrightWallScreenNumber()
    {
      return $this->ReportedBrightWallScreenNumber;
    }

    /**
     * @param int $ReportedBrightWallScreenNumber
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setReportedBrightWallScreenNumber($ReportedBrightWallScreenNumber)
    {
      $this->ReportedBrightWallScreenNumber = $ReportedBrightWallScreenNumber;
      return $this;
    }

    /**
     * @return int
     */
    public function getReportedGroupId()
    {
      return $this->ReportedGroupId;
    }

    /**
     * @param int $ReportedGroupId
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setReportedGroupId($ReportedGroupId)
    {
      $this->ReportedGroupId = $ReportedGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getReportedTimeZone()
    {
      return $this->ReportedTimeZone;
    }

    /**
     * @param string $ReportedTimeZone
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setReportedTimeZone($ReportedTimeZone)
    {
      $this->ReportedTimeZone = $ReportedTimeZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getSerial()
    {
      return $this->Serial;
    }

    /**
     * @param string $Serial
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setSerial($Serial)
    {
      $this->Serial = $Serial;
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
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
     * @return \WSD\BrightSignApi\Entity\Application\Device
     */
    public function setTargetTimeZone($TargetTimeZone)
    {
      $this->TargetTimeZone = $TargetTimeZone;
      return $this;
    }

}
