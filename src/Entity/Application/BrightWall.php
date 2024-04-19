<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class BrightWall
{

    /**
     * @var int $BrightWallGroupId
     */
    protected $BrightWallGroupId = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var DeviceHealthStatus $DevicesHealthStatus
     */
    protected $DevicesHealthStatus = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var ArrayOfBrightWallScreen $Screens
     */
    protected $Screens = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getBrightWallGroupId()
    {
      return $this->BrightWallGroupId;
    }

    /**
     * @param int $BrightWallGroupId
     * @return \WSD\BrightSignApi\Entity\Application\BrightWall
     */
    public function setBrightWallGroupId($BrightWallGroupId)
    {
      $this->BrightWallGroupId = $BrightWallGroupId;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWall
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
     * @return DeviceHealthStatus
     */
    public function getDevicesHealthStatus()
    {
      return $this->DevicesHealthStatus;
    }

    /**
     * @param DeviceHealthStatus $DevicesHealthStatus
     * @return \WSD\BrightSignApi\Entity\Application\BrightWall
     */
    public function setDevicesHealthStatus($DevicesHealthStatus)
    {
      $this->DevicesHealthStatus = $DevicesHealthStatus;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWall
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWall
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return ArrayOfBrightWallScreen
     */
    public function getScreens()
    {
      return $this->Screens;
    }

    /**
     * @param ArrayOfBrightWallScreen $Screens
     * @return \WSD\BrightSignApi\Entity\Application\BrightWall
     */
    public function setScreens($Screens)
    {
      $this->Screens = $Screens;
      return $this;
    }

}
