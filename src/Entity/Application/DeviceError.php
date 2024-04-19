<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class DeviceError
{

    /**
     * @var string $ErrorEvent
     */
    protected $ErrorEvent = null;

    /**
     * @var string $ErrorName
     */
    protected $ErrorName = null;

    /**
     * @var string $Reason
     */
    protected $Reason = null;

    /**
     * @var int $ResponseCode
     */
    protected $ResponseCode = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getErrorEvent()
    {
      return $this->ErrorEvent;
    }

    /**
     * @param string $ErrorEvent
     * @return \WSD\BrightSignApi\Entity\Application\DeviceError
     */
    public function setErrorEvent($ErrorEvent)
    {
      $this->ErrorEvent = $ErrorEvent;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorName()
    {
      return $this->ErrorName;
    }

    /**
     * @param string $ErrorName
     * @return \WSD\BrightSignApi\Entity\Application\DeviceError
     */
    public function setErrorName($ErrorName)
    {
      $this->ErrorName = $ErrorName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return \WSD\BrightSignApi\Entity\Application\DeviceError
     */
    public function setReason($Reason)
    {
      $this->Reason = $Reason;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
      return $this->ResponseCode;
    }

    /**
     * @param int $ResponseCode
     * @return \WSD\BrightSignApi\Entity\Application\DeviceError
     */
    public function setResponseCode($ResponseCode)
    {
      $this->ResponseCode = $ResponseCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \WSD\BrightSignApi\Entity\Application\DeviceError
     */
    public function setTimestamp(\DateTime $Timestamp = null)
    {
      if ($Timestamp == null) {
       $this->Timestamp = null;
      } else {
        $this->Timestamp = $Timestamp->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

}
