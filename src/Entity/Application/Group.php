<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class Group
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var ArrayOfDevice $Devices
     */
    protected $Devices = null;

    /**
     * @var int $DevicesCount
     */
    protected $DevicesCount = null;

    /**
     * @var ArrayOfDeviceHealthStatus $DevicesHealthStatus
     */
    protected $DevicesHealthStatus = null;

    /**
     * @var int $DynamicDataSizeLimit
     */
    protected $DynamicDataSizeLimit = null;

    /**
     * @var boolean $EnableSerialDebugging
     */
    protected $EnableSerialDebugging = null;

    /**
     * @var boolean $EnableStorageSpaceLimit
     */
    protected $EnableStorageSpaceLimit = null;

    /**
     * @var boolean $EnableSystemLogDebugging
     */
    protected $EnableSystemLogDebugging = null;

    /**
     * @var string $HD9XXFirmware
     */
    protected $HD9XXFirmware = null;

    /**
     * @var int $HD9XXFirmwareId
     */
    protected $HD9XXFirmwareId = null;

    /**
     * @var string $HDX10Firmware
     */
    protected $HDX10Firmware = null;

    /**
     * @var int $HDX10FirmwareId
     */
    protected $HDX10FirmwareId = null;

    /**
     * @var string $HDX20Firmware
     */
    protected $HDX20Firmware = null;

    /**
     * @var int $HDX20FirmwareId
     */
    protected $HDX20FirmwareId = null;

    /**
     * @var string $HDX22Firmware
     */
    protected $HDX22Firmware = null;

    /**
     * @var int $HDX22FirmwareId
     */
    protected $HDX22FirmwareId = null;

    /**
     * @var int $HtmlDataSizeLimit
     */
    protected $HtmlDataSizeLimit = null;

    /**
     * @var int $HtmlLocalStorageSizeLimit
     */
    protected $HtmlLocalStorageSizeLimit = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $MinAutorunVersion
     */
    protected $MinAutorunVersion = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfPresentationInfo $Presentations
     */
    protected $Presentations = null;

    /**
     * @var int $PublishedDataSizeLimit
     */
    protected $PublishedDataSizeLimit = null;

    /**
     * @var StorageSpaceLimitUnit $StorageSpaceLimitUnits
     */
    protected $StorageSpaceLimitUnits = null;

    /**
     * @var string $XDX30Firmware
     */
    protected $XDX30Firmware = null;

    /**
     * @var int $XDX30FirmwareId
     */
    protected $XDX30FirmwareId = null;

    /**
     * @var string $XDX32Firmware
     */
    protected $XDX32Firmware = null;

    /**
     * @var int $XDX32FirmwareId
     */
    protected $XDX32FirmwareId = null;

    /**
     * @var string $_x0034_KX42Firmware
     */
    protected $_x0034_KX42Firmware = null;

    /**
     * @var int $_x0034_KX42FirmwareId
     */
    protected $_x0034_KX42FirmwareId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setCreationDate(\DateTime $CreationDate = null)
    {
      if ($CreationDate == null) {
       $this->CreationDate = null;
      } else {
        $this->CreationDate = $CreationDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return ArrayOfDevice
     */
    public function getDevices()
    {
      return $this->Devices;
    }

    /**
     * @param ArrayOfDevice $Devices
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setDevices($Devices)
    {
      $this->Devices = $Devices;
      return $this;
    }

    /**
     * @return int
     */
    public function getDevicesCount()
    {
      return $this->DevicesCount;
    }

    /**
     * @param int $DevicesCount
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setDevicesCount($DevicesCount)
    {
      $this->DevicesCount = $DevicesCount;
      return $this;
    }

    /**
     * @return ArrayOfDeviceHealthStatus
     */
    public function getDevicesHealthStatus()
    {
      return $this->DevicesHealthStatus;
    }

    /**
     * @param ArrayOfDeviceHealthStatus $DevicesHealthStatus
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setDevicesHealthStatus($DevicesHealthStatus)
    {
      $this->DevicesHealthStatus = $DevicesHealthStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getDynamicDataSizeLimit()
    {
      return $this->DynamicDataSizeLimit;
    }

    /**
     * @param int $DynamicDataSizeLimit
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setDynamicDataSizeLimit($DynamicDataSizeLimit)
    {
      $this->DynamicDataSizeLimit = $DynamicDataSizeLimit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableSerialDebugging()
    {
      return $this->EnableSerialDebugging;
    }

    /**
     * @param boolean $EnableSerialDebugging
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setEnableSerialDebugging($EnableSerialDebugging)
    {
      $this->EnableSerialDebugging = $EnableSerialDebugging;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableStorageSpaceLimit()
    {
      return $this->EnableStorageSpaceLimit;
    }

    /**
     * @param boolean $EnableStorageSpaceLimit
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setEnableStorageSpaceLimit($EnableStorageSpaceLimit)
    {
      $this->EnableStorageSpaceLimit = $EnableStorageSpaceLimit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableSystemLogDebugging()
    {
      return $this->EnableSystemLogDebugging;
    }

    /**
     * @param boolean $EnableSystemLogDebugging
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setEnableSystemLogDebugging($EnableSystemLogDebugging)
    {
      $this->EnableSystemLogDebugging = $EnableSystemLogDebugging;
      return $this;
    }

    /**
     * @return string
     */
    public function getHD9XXFirmware()
    {
      return $this->HD9XXFirmware;
    }

    /**
     * @param string $HD9XXFirmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHD9XXFirmware($HD9XXFirmware)
    {
      $this->HD9XXFirmware = $HD9XXFirmware;
      return $this;
    }

    /**
     * @return int
     */
    public function getHD9XXFirmwareId()
    {
      return $this->HD9XXFirmwareId;
    }

    /**
     * @param int $HD9XXFirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHD9XXFirmwareId($HD9XXFirmwareId)
    {
      $this->HD9XXFirmwareId = $HD9XXFirmwareId;
      return $this;
    }

    /**
     * @return string
     */
    public function getHDX10Firmware()
    {
      return $this->HDX10Firmware;
    }

    /**
     * @param string $HDX10Firmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHDX10Firmware($HDX10Firmware)
    {
      $this->HDX10Firmware = $HDX10Firmware;
      return $this;
    }

    /**
     * @return int
     */
    public function getHDX10FirmwareId()
    {
      return $this->HDX10FirmwareId;
    }

    /**
     * @param int $HDX10FirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHDX10FirmwareId($HDX10FirmwareId)
    {
      $this->HDX10FirmwareId = $HDX10FirmwareId;
      return $this;
    }

    /**
     * @return string
     */
    public function getHDX20Firmware()
    {
      return $this->HDX20Firmware;
    }

    /**
     * @param string $HDX20Firmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHDX20Firmware($HDX20Firmware)
    {
      $this->HDX20Firmware = $HDX20Firmware;
      return $this;
    }

    /**
     * @return int
     */
    public function getHDX20FirmwareId()
    {
      return $this->HDX20FirmwareId;
    }

    /**
     * @param int $HDX20FirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHDX20FirmwareId($HDX20FirmwareId)
    {
      $this->HDX20FirmwareId = $HDX20FirmwareId;
      return $this;
    }

    /**
     * @return string
     */
    public function getHDX22Firmware()
    {
      return $this->HDX22Firmware;
    }

    /**
     * @param string $HDX22Firmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHDX22Firmware($HDX22Firmware)
    {
      $this->HDX22Firmware = $HDX22Firmware;
      return $this;
    }

    /**
     * @return int
     */
    public function getHDX22FirmwareId()
    {
      return $this->HDX22FirmwareId;
    }

    /**
     * @param int $HDX22FirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHDX22FirmwareId($HDX22FirmwareId)
    {
      $this->HDX22FirmwareId = $HDX22FirmwareId;
      return $this;
    }

    /**
     * @return int
     */
    public function getHtmlDataSizeLimit()
    {
      return $this->HtmlDataSizeLimit;
    }

    /**
     * @param int $HtmlDataSizeLimit
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHtmlDataSizeLimit($HtmlDataSizeLimit)
    {
      $this->HtmlDataSizeLimit = $HtmlDataSizeLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getHtmlLocalStorageSizeLimit()
    {
      return $this->HtmlLocalStorageSizeLimit;
    }

    /**
     * @param int $HtmlLocalStorageSizeLimit
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setHtmlLocalStorageSizeLimit($HtmlLocalStorageSizeLimit)
    {
      $this->HtmlLocalStorageSizeLimit = $HtmlLocalStorageSizeLimit;
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
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinAutorunVersion()
    {
      return $this->MinAutorunVersion;
    }

    /**
     * @param string $MinAutorunVersion
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setMinAutorunVersion($MinAutorunVersion)
    {
      $this->MinAutorunVersion = $MinAutorunVersion;
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
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfPresentationInfo
     */
    public function getPresentations()
    {
      return $this->Presentations;
    }

    /**
     * @param ArrayOfPresentationInfo $Presentations
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setPresentations($Presentations)
    {
      $this->Presentations = $Presentations;
      return $this;
    }

    /**
     * @return int
     */
    public function getPublishedDataSizeLimit()
    {
      return $this->PublishedDataSizeLimit;
    }

    /**
     * @param int $PublishedDataSizeLimit
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setPublishedDataSizeLimit($PublishedDataSizeLimit)
    {
      $this->PublishedDataSizeLimit = $PublishedDataSizeLimit;
      return $this;
    }

    /**
     * @return StorageSpaceLimitUnit
     */
    public function getStorageSpaceLimitUnits()
    {
      return $this->StorageSpaceLimitUnits;
    }

    /**
     * @param StorageSpaceLimitUnit $StorageSpaceLimitUnits
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setStorageSpaceLimitUnits($StorageSpaceLimitUnits)
    {
      $this->StorageSpaceLimitUnits = $StorageSpaceLimitUnits;
      return $this;
    }

    /**
     * @return string
     */
    public function getXDX30Firmware()
    {
      return $this->XDX30Firmware;
    }

    /**
     * @param string $XDX30Firmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setXDX30Firmware($XDX30Firmware)
    {
      $this->XDX30Firmware = $XDX30Firmware;
      return $this;
    }

    /**
     * @return int
     */
    public function getXDX30FirmwareId()
    {
      return $this->XDX30FirmwareId;
    }

    /**
     * @param int $XDX30FirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setXDX30FirmwareId($XDX30FirmwareId)
    {
      $this->XDX30FirmwareId = $XDX30FirmwareId;
      return $this;
    }

    /**
     * @return string
     */
    public function getXDX32Firmware()
    {
      return $this->XDX32Firmware;
    }

    /**
     * @param string $XDX32Firmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setXDX32Firmware($XDX32Firmware)
    {
      $this->XDX32Firmware = $XDX32Firmware;
      return $this;
    }

    /**
     * @return int
     */
    public function getXDX32FirmwareId()
    {
      return $this->XDX32FirmwareId;
    }

    /**
     * @param int $XDX32FirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function setXDX32FirmwareId($XDX32FirmwareId)
    {
      $this->XDX32FirmwareId = $XDX32FirmwareId;
      return $this;
    }

    /**
     * @return string
     */
    public function get_x0034_KX42Firmware()
    {
      return $this->_x0034_KX42Firmware;
    }

    /**
     * @param string $_x0034_KX42Firmware
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function set_x0034_KX42Firmware($_x0034_KX42Firmware)
    {
      $this->_x0034_KX42Firmware = $_x0034_KX42Firmware;
      return $this;
    }

    /**
     * @return int
     */
    public function get_x0034_KX42FirmwareId()
    {
      return $this->_x0034_KX42FirmwareId;
    }

    /**
     * @param int $_x0034_KX42FirmwareId
     * @return \WSD\BrightSignApi\Entity\Application\Group
     */
    public function set_x0034_KX42FirmwareId($_x0034_KX42FirmwareId)
    {
      $this->_x0034_KX42FirmwareId = $_x0034_KX42FirmwareId;
      return $this;
    }

}
