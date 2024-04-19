<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;
use WSD\BrightSignApi\JsonSerializeTrait;

class DynamicPlaylist implements \JsonSerializable
{

    use JsonSerializeTrait;

    /**
     * @var ArrayOfDynamicPlaylistContent $Content
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
     * @var ArrayOfPresentationInfo $Presentations
     */
    protected $Presentations = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDynamicPlaylistContent
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfDynamicPlaylistContent $Content
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylist
     */
    public function setPresentations($Presentations)
    {
      $this->Presentations = $Presentations;
      return $this;
    }
}
