<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class DeviceSubscription
{

    /**
     * @var \DateTime $ActivationDate
     */
    protected $ActivationDate = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var int $DeviceId
     */
    protected $DeviceId = null;

    /**
     * @var \DateTime $ExpirationDate
     */
    protected $ExpirationDate = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var DeviceSubscriptionStatus $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $SuspensionDate
     */
    protected $SuspensionDate = null;

    /**
     * @var DeviceSubscriptionType $Type
     */
    protected $Type = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getActivationDate()
    {
      if ($this->ActivationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ActivationDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ActivationDate
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
     */
    public function setActivationDate(\DateTime $ActivationDate = null)
    {
      if ($ActivationDate == null) {
       $this->ActivationDate = null;
      } else {
        $this->ActivationDate = $ActivationDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
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
     * @return int
     */
    public function getDeviceId()
    {
      return $this->DeviceId;
    }

    /**
     * @param int $DeviceId
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
     */
    public function setDeviceId($DeviceId)
    {
      $this->DeviceId = $DeviceId;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return DeviceSubscriptionStatus
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param DeviceSubscriptionStatus $Status
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSuspensionDate()
    {
      if ($this->SuspensionDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->SuspensionDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $SuspensionDate
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
     */
    public function setSuspensionDate(\DateTime $SuspensionDate = null)
    {
      if ($SuspensionDate == null) {
       $this->SuspensionDate = null;
      } else {
        $this->SuspensionDate = $SuspensionDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return DeviceSubscriptionType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param DeviceSubscriptionType $Type
     * @return \WSD\BrightSignApi\Entity\Application\DeviceSubscription
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

}
