<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;
use WSD\BrightSignApi\JsonSerializeTrait;

class Content implements \JsonSerializable
{

    use JsonSerializeTrait;

    /**
     * @var ArrayOfDynamicPlaylistInfo $DynamicPlaylists
     */
    protected $DynamicPlaylists = null;

    /**
     * @var string $FileHash
     */
    protected $FileHash = null;

    /**
     * @var \DateTime $FileLastModifiedDate
     */
    protected $FileLastModifiedDate = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var int $FileSize
     */
    protected $FileSize = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $PhysicalPath
     */
    protected $PhysicalPath = null;

    /**
     * @var ArrayOfPresentationInfo $Presentations
     */
    protected $Presentations = null;

    /**
     * @var string $ProbeData
     */
    protected $ProbeData = null;

    /**
     * @var string $ThumbPath
     */
    protected $ThumbPath = null;

    /**
     * @var ContentType $Type
     */
    protected $Type = null;

    /**
     * @var \DateTime $UploadDate
     */
    protected $UploadDate = null;

    /**
     * @var string $VirtualPath
     */
    protected $VirtualPath = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfDynamicPlaylistInfo
     */
    public function getDynamicPlaylists()
    {
      return $this->DynamicPlaylists;
    }

    /**
     * @param ArrayOfDynamicPlaylistInfo $DynamicPlaylists
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setDynamicPlaylists($DynamicPlaylists)
    {
      $this->DynamicPlaylists = $DynamicPlaylists;
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setFileHash($FileHash)
    {
      $this->FileHash = $FileHash;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFileLastModifiedDate()
    {
      if ($this->FileLastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->FileLastModifiedDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $FileLastModifiedDate
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setFileLastModifiedDate(\DateTime $FileLastModifiedDate = null)
    {
      if ($FileLastModifiedDate == null) {
       $this->FileLastModifiedDate = null;
      } else {
        $this->FileLastModifiedDate = $FileLastModifiedDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setPresentations($Presentations)
    {
      $this->Presentations = $Presentations;
      return $this;
    }

    /**
     * @return string
     */
    public function getProbeData()
    {
      return $this->ProbeData;
    }

    /**
     * @param string $ProbeData
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setProbeData($ProbeData)
    {
      $this->ProbeData = $ProbeData;
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setThumbPath($ThumbPath)
    {
      $this->ThumbPath = $ThumbPath;
      return $this;
    }

    /**
     * @return ContentType
     */
    public function getType()
    {
      return $this->Type;
    }

    /**
     * @param ContentType $Type
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setType($Type)
    {
      $this->Type = $Type;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUploadDate()
    {
      if ($this->UploadDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->UploadDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $UploadDate
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setUploadDate(\DateTime $UploadDate = null)
    {
      if ($UploadDate == null) {
       $this->UploadDate = null;
      } else {
        $this->UploadDate = $UploadDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\Content
     */
    public function setVirtualPath($VirtualPath)
    {
      $this->VirtualPath = $VirtualPath;
      return $this;
    }

}
