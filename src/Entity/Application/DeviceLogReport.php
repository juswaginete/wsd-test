<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class DeviceLogReport
{

    /**
     * @var \DateTime $EndDate
     */
    protected $EndDate = null;

    /**
     * @var string $FilePath
     */
    protected $FilePath = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var \DateTime $LastUpdate
     */
    protected $LastUpdate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var \DateTime $StartDate
     */
    protected $StartDate = null;

    /**
     * @var DeviceLogType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
      if ($this->EndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndDate
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setEndDate(\DateTime $EndDate = null)
    {
      if ($EndDate == null) {
       $this->EndDate = null;
      } else {
        $this->EndDate = $EndDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
      return $this->FilePath;
    }

    /**
     * @param string $FilePath
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setFilePath($FilePath)
    {
      $this->FilePath = $FilePath;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdate()
    {
      if ($this->LastUpdate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastUpdate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastUpdate
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setLastUpdate(\DateTime $LastUpdate = null)
    {
      if ($LastUpdate == null) {
       $this->LastUpdate = null;
      } else {
        $this->LastUpdate = $LastUpdate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
      if ($this->StartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDate
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setStartDate(\DateTime $StartDate = null)
    {
      if ($StartDate == null) {
       $this->StartDate = null;
      } else {
        $this->StartDate = $StartDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return DeviceLogType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DeviceLogType $Type
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogReport
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
