<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class LiveTextFeed
{

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
     * @var ArrayOfLiveTextFeedItem $Items
     */
    protected $Items = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $PhysicalPath
     */
    protected $PhysicalPath = null;

    /**
     * @var ArrayOfPresentationInfo $Presentations
     */
    protected $Presentations = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return ArrayOfLiveTextFeedItem
     */
    public function getItems()
    {
      return $this->Items;
    }

    /**
     * @param ArrayOfLiveTextFeedItem $Items
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
     */
    public function setItems($Items)
    {
      $this->Items = $Items;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
     */
    public function setPhysicalPath($PhysicalPath)
    {
      $this->PhysicalPath = $PhysicalPath;
      return $this;
    }

    /**
     * @return ArrayOfPresentationInfo
     */
    public function getPresentations()
    {
      return $this->Presentations;
    }

    /**
     * @param ArrayOfPresentationInfo $Presentations
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeed
     */
    public function setPresentations($Presentations)
    {
      $this->Presentations = $Presentations;
      return $this;
    }

}
