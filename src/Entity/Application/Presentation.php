<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class Presentation
{

    /**
     * @var string $AutorunVersion
     */
    protected $AutorunVersion = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var DeviceModel $DeviceModel
     */
    protected $DeviceModel = null;

    /**
     * @var ArrayOfGroupInfo $Groups
     */
    protected $Groups = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var PresentationLanguage $Language
     */
    protected $Language = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ScreenSettings $ScreenSettings
     */
    protected $ScreenSettings = null;

    /**
     * @var ArrayOfPresentationZone $Zones
     */
    protected $Zones = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setAutorunVersion($AutorunVersion)
    {
      $this->AutorunVersion = $AutorunVersion;
      return $this;
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
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
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
     * @return DeviceModel
     */
    public function getDeviceModel()
    {
      return $this->DeviceModel;
    }

    /**
     * @param DeviceModel $DeviceModel
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setDeviceModel($DeviceModel)
    {
      $this->DeviceModel = $DeviceModel;
      return $this;
    }

    /**
     * @return ArrayOfGroupInfo
     */
    public function getGroups()
    {
      return $this->Groups;
    }

    /**
     * @param ArrayOfGroupInfo $Groups
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setGroups($Groups)
    {
      $this->Groups = $Groups;
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
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return PresentationLanguage
     */
    public function getLanguage()
    {
      return $this->Language;
    }

    /**
     * @param PresentationLanguage $Language
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setLanguage($Language)
    {
      $this->Language = $Language;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ScreenSettings
     */
    public function getScreenSettings()
    {
      return $this->ScreenSettings;
    }

    /**
     * @param ScreenSettings $ScreenSettings
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setScreenSettings($ScreenSettings)
    {
      $this->ScreenSettings = $ScreenSettings;
      return $this;
    }

    /**
     * @return ArrayOfPresentationZone
     */
    public function getZones()
    {
      return $this->Zones;
    }

    /**
     * @param ArrayOfPresentationZone $Zones
     * @return \WSD\BrightSignApi\Entity\Application\Presentation
     */
    public function setZones($Zones)
    {
      $this->Zones = $Zones;
      return $this;
    }

}
