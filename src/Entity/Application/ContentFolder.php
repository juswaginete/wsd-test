<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class ContentFolder
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $ThumbPath
     */
    protected $ThumbPath = null;

    /**
     * @var string $VirtualPath
     */
    protected $VirtualPath = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\ContentFolder
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
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \WSD\BrightSignApi\Entity\Application\ContentFolder
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
     * @return \WSD\BrightSignApi\Entity\Application\ContentFolder
     */
    public function setName($Name)
    {
      $this->Name = $Name;
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
     * @return \WSD\BrightSignApi\Entity\Application\ContentFolder
     */
    public function setThumbPath($ThumbPath)
    {
      $this->ThumbPath = $ThumbPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getVirtualPath()
    {
      return $this->VirtualPath;
    }

    /**
     * @param string $VirtualPath
     * @return \WSD\BrightSignApi\Entity\Application\ContentFolder
     */
    public function setVirtualPath($VirtualPath)
    {
      $this->VirtualPath = $VirtualPath;
      return $this;
    }

}
