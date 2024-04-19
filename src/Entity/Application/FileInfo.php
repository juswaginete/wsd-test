<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class FileInfo
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $Hash
     */
    protected $Hash = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $Path
     */
    protected $Path = null;

    /**
     * @var int $Size
     */
    protected $Size = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\FileInfo
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
     * @return string
     */
    public function getHash()
    {
      return $this->Hash;
    }

    /**
     * @param string $Hash
     * @return \WSD\BrightSignApi\Entity\Application\FileInfo
     */
    public function setHash($Hash)
    {
      $this->Hash = $Hash;
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
     * @return \WSD\BrightSignApi\Entity\Application\FileInfo
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
     * @return \WSD\BrightSignApi\Entity\Application\FileInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
      return $this->Path;
    }

    /**
     * @param string $Path
     * @return \WSD\BrightSignApi\Entity\Application\FileInfo
     */
    public function setPath($Path)
    {
      $this->Path = $Path;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->Size;
    }

    /**
     * @param int $Size
     * @return \WSD\BrightSignApi\Entity\Application\FileInfo
     */
    public function setSize($Size)
    {
      $this->Size = $Size;
      return $this;
    }

}
