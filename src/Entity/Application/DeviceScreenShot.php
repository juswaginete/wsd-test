<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class DeviceScreenShot
{

    /**
     * @var string $FilePath
     */
    protected $FilePath = null;

    /**
     * @var int $FileSize
     */
    protected $FileSize = null;

    /**
     * @var string $GroupName
     */
    protected $GroupName = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var \DateTime $LocalTimestamp
     */
    protected $LocalTimestamp = null;

    /**
     * @var string $PresentationName
     */
    protected $PresentationName = null;

    /**
     * @var string $ThumbPath
     */
    protected $ThumbPath = null;

    /**
     * @var \DateTime $UTCTimestamp
     */
    protected $UTCTimestamp = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    
    public function __construct()
    {
    
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setFilePath($FilePath)
    {
      $this->FilePath = $FilePath;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->FileSize;
    }

    /**
     * @param int $FileSize
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getGroupName()
    {
      return $this->GroupName;
    }

    /**
     * @param string $GroupName
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setGroupName($GroupName)
    {
      $this->GroupName = $GroupName;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLocalTimestamp()
    {
      if ($this->LocalTimestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LocalTimestamp, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LocalTimestamp
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setLocalTimestamp(\DateTime $LocalTimestamp = null)
    {
      if ($LocalTimestamp == null) {
       $this->LocalTimestamp = null;
      } else {
        $this->LocalTimestamp = $LocalTimestamp->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setPresentationName($PresentationName)
    {
      $this->PresentationName = $PresentationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getThumbPath()
    {
      return $this->ThumbPath;
    }

    /**
     * @param string $ThumbPath
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setThumbPath($ThumbPath)
    {
      $this->ThumbPath = $ThumbPath;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUTCTimestamp()
    {
      if ($this->UTCTimestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UTCTimestamp, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UTCTimestamp
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setUTCTimestamp(\DateTime $UTCTimestamp = null)
    {
      if ($UTCTimestamp == null) {
       $this->UTCTimestamp = null;
      } else {
        $this->UTCTimestamp = $UTCTimestamp->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \WSD\BrightSignApi\Entity\Application\DeviceScreenShot
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

}
