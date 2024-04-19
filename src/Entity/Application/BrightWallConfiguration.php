<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class BrightWallConfiguration
{

    /**
     * @var int $BezelHeight
     */
    protected $BezelHeight = null;

    /**
     * @var MeasureUnit $BezelUnits
     */
    protected $BezelUnits = null;

    /**
     * @var int $BezelWidth
     */
    protected $BezelWidth = null;

    /**
     * @var ArrayOfBrightWallGroupInfo $BrightWallGroups
     */
    protected $BrightWallGroups = null;

    /**
     * @var ArrayOfBrightWallPresentationInfo $BrightWallPresentations
     */
    protected $BrightWallPresentations = null;

    /**
     * @var int $ColumnsCount
     */
    protected $ColumnsCount = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var DeviceModel $DeviceModel
     */
    protected $DeviceModel = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $PTPDomain
     */
    protected $PTPDomain = null;

    /**
     * @var int $RowsCount
     */
    protected $RowsCount = null;

    /**
     * @var int $ScreenHeight
     */
    protected $ScreenHeight = null;

    /**
     * @var ScreenOverscan $ScreenOverscan
     */
    protected $ScreenOverscan = null;

    /**
     * @var int $ScreenWidth
     */
    protected $ScreenWidth = null;

    /**
     * @var ConnectorType $VideoConnector
     */
    protected $VideoConnector = null;

    /**
     * @var VideoMode $VideoMode
     */
    protected $VideoMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBezelHeight()
    {
      return $this->BezelHeight;
    }

    /**
     * @param int $BezelHeight
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setBezelHeight($BezelHeight)
    {
      $this->BezelHeight = $BezelHeight;
      return $this;
    }

    /**
     * @return MeasureUnit
     */
    public function getBezelUnits()
    {
      return $this->BezelUnits;
    }

    /**
     * @param MeasureUnit $BezelUnits
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setBezelUnits($BezelUnits)
    {
      $this->BezelUnits = $BezelUnits;
      return $this;
    }

    /**
     * @return int
     */
    public function getBezelWidth()
    {
      return $this->BezelWidth;
    }

    /**
     * @param int $BezelWidth
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setBezelWidth($BezelWidth)
    {
      $this->BezelWidth = $BezelWidth;
      return $this;
    }

    /**
     * @return ArrayOfBrightWallGroupInfo
     */
    public function getBrightWallGroups()
    {
      return $this->BrightWallGroups;
    }

    /**
     * @param ArrayOfBrightWallGroupInfo $BrightWallGroups
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setBrightWallGroups($BrightWallGroups)
    {
      $this->BrightWallGroups = $BrightWallGroups;
      return $this;
    }

    /**
     * @return ArrayOfBrightWallPresentationInfo
     */
    public function getBrightWallPresentations()
    {
      return $this->BrightWallPresentations;
    }

    /**
     * @param ArrayOfBrightWallPresentationInfo $BrightWallPresentations
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setBrightWallPresentations($BrightWallPresentations)
    {
      $this->BrightWallPresentations = $BrightWallPresentations;
      return $this;
    }

    /**
     * @return int
     */
    public function getColumnsCount()
    {
      return $this->ColumnsCount;
    }

    /**
     * @param int $ColumnsCount
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setColumnsCount($ColumnsCount)
    {
      $this->ColumnsCount = $ColumnsCount;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setDeviceModel($DeviceModel)
    {
      $this->DeviceModel = $DeviceModel;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getPTPDomain()
    {
      return $this->PTPDomain;
    }

    /**
     * @param int $PTPDomain
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setPTPDomain($PTPDomain)
    {
      $this->PTPDomain = $PTPDomain;
      return $this;
    }

    /**
     * @return int
     */
    public function getRowsCount()
    {
      return $this->RowsCount;
    }

    /**
     * @param int $RowsCount
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setRowsCount($RowsCount)
    {
      $this->RowsCount = $RowsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getScreenHeight()
    {
      return $this->ScreenHeight;
    }

    /**
     * @param int $ScreenHeight
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setScreenHeight($ScreenHeight)
    {
      $this->ScreenHeight = $ScreenHeight;
      return $this;
    }

    /**
     * @return ScreenOverscan
     */
    public function getScreenOverscan()
    {
      return $this->ScreenOverscan;
    }

    /**
     * @param ScreenOverscan $ScreenOverscan
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setScreenOverscan($ScreenOverscan)
    {
      $this->ScreenOverscan = $ScreenOverscan;
      return $this;
    }

    /**
     * @return int
     */
    public function getScreenWidth()
    {
      return $this->ScreenWidth;
    }

    /**
     * @param int $ScreenWidth
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setScreenWidth($ScreenWidth)
    {
      $this->ScreenWidth = $ScreenWidth;
      return $this;
    }

    /**
     * @return ConnectorType
     */
    public function getVideoConnector()
    {
      return $this->VideoConnector;
    }

    /**
     * @param ConnectorType $VideoConnector
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setVideoConnector($VideoConnector)
    {
      $this->VideoConnector = $VideoConnector;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallConfiguration
     */
    public function setVideoMode($VideoMode)
    {
      $this->VideoMode = $VideoMode;
      return $this;
    }

}
