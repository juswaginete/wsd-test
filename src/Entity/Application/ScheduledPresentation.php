<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class ScheduledPresentation
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var DayOfWeek $DaysOfWeek
     */
    protected $DaysOfWeek = null;

    /**
     * @var duration $Duration
     */
    protected $Duration = null;

    /**
     * @var \DateTime $EventDate
     */
    protected $EventDate = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsRecurrent
     */
    protected $IsRecurrent = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var int $PresentationId
     */
    protected $PresentationId = null;

    /**
     * @var string $PresentationName
     */
    protected $PresentationName = null;

    /**
     * @var \DateTime $RecurrenceEndDate
     */
    protected $RecurrenceEndDate = null;

    /**
     * @var \DateTime $RecurrenceStartDate
     */
    protected $RecurrenceStartDate = null;

    /**
     * @var duration $StartTime
     */
    protected $StartTime = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
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
     * @return DayOfWeek
     */
    public function getDaysOfWeek()
    {
      return $this->DaysOfWeek;
    }

    /**
     * @param DayOfWeek $DaysOfWeek
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setDaysOfWeek($DaysOfWeek)
    {
      $this->DaysOfWeek = $DaysOfWeek;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDuration()
    {
      return $this->Duration;
    }

    /**
     * @param duration $Duration
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setDuration($Duration)
    {
      $this->Duration = $Duration;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEventDate()
    {
      if ($this->EventDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EventDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EventDate
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setEventDate(\DateTime $EventDate = null)
    {
      if ($EventDate == null) {
       $this->EventDate = null;
      } else {
        $this->EventDate = $EventDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getExpirationDate()
    {
      if ($this->ExpirationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ExpirationDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ExpirationDate
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setExpirationDate(\DateTime $ExpirationDate = null)
    {
      if ($ExpirationDate == null) {
       $this->ExpirationDate = null;
      } else {
        $this->ExpirationDate = $ExpirationDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRecurrent()
    {
      return $this->IsRecurrent;
    }

    /**
     * @param boolean $IsRecurrent
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setIsRecurrent($IsRecurrent)
    {
      $this->IsRecurrent = $IsRecurrent;
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
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
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
     * @return int
     */
    public function getPresentationId()
    {
      return $this->PresentationId;
    }

    /**
     * @param int $PresentationId
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setPresentationId($PresentationId)
    {
      $this->PresentationId = $PresentationId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPresentationName()
    {
      return $this->PresentationName;
    }

    /**
     * @param string $PresentationName
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setPresentationName($PresentationName)
    {
      $this->PresentationName = $PresentationName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecurrenceEndDate()
    {
      if ($this->RecurrenceEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RecurrenceEndDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RecurrenceEndDate
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setRecurrenceEndDate(\DateTime $RecurrenceEndDate = null)
    {
      if ($RecurrenceEndDate == null) {
       $this->RecurrenceEndDate = null;
      } else {
        $this->RecurrenceEndDate = $RecurrenceEndDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getRecurrenceStartDate()
    {
      if ($this->RecurrenceStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->RecurrenceStartDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $RecurrenceStartDate
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setRecurrenceStartDate(\DateTime $RecurrenceStartDate = null)
    {
      if ($RecurrenceStartDate == null) {
       $this->RecurrenceStartDate = null;
      } else {
        $this->RecurrenceStartDate = $RecurrenceStartDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return duration
     */
    public function getStartTime()
    {
      return $this->StartTime;
    }

    /**
     * @param duration $StartTime
     * @return \WSD\BrightSignApi\Entity\Application\ScheduledPresentation
     */
    public function setStartTime($StartTime)
    {
      $this->StartTime = $StartTime;
      return $this;
    }

}
