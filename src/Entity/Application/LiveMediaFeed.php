<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class LiveMediaFeed
{

    /**
     * @var ArrayOfLiveMediaFeedContent $Content
     */
    protected $Content = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $FileHash
     */
    protected $FileHash = null;

    /**
     * @var int $FileSize
     */
    protected $FileSize = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $PhysicalPath
     */
    protected $PhysicalPath = null;

    /**
     * @var duration $TTL
     */
    protected $TTL = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLiveMediaFeedContent
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfLiveMediaFeedContent $Content
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
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
    public function getFileHash()
    {
      return $this->FileHash;
    }

    /**
     * @param string $FileHash
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
     */
    public function setFileHash($FileHash)
    {
      $this->FileHash = $FileHash;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhysicalPath()
    {
      return $this->PhysicalPath;
    }

    /**
     * @param string $PhysicalPath
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
     */
    public function setPhysicalPath($PhysicalPath)
    {
      $this->PhysicalPath = $PhysicalPath;
      return $this;
    }

    /**
     * @return duration
     */
    public function getTTL()
    {
      return $this->TTL;
    }

    /**
     * @param duration $TTL
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeed
     */
    public function setTTL($TTL)
    {
      $this->TTL = $TTL;
      return $this;
    }

}
