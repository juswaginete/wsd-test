<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

use WSD\BrightSignApi\Api;

class ContentInfo
{

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
     * @var string $SHA1Hash
     */
    protected $SHA1Hash = null;

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

    /**
     * @param int $FileSize
     * @param int $Id
     * @param ContentType $Type
     * @param \DateTime $UploadDate
     */
    public function __construct($FileSize, $Id, $Type, \DateTime $UploadDate)
    {
      $this->FileSize = $FileSize;
      $this->Id = $Id;
      $this->Type = $Type;
      $this->UploadDate = $UploadDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getSHA1Hash()
    {
      return $this->SHA1Hash;
    }

    /**
     * @param string $SHA1Hash
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
     */
    public function setSHA1Hash($SHA1Hash)
    {
      $this->SHA1Hash = $SHA1Hash;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
     */
    public function setUploadDate(\DateTime $UploadDate)
    {
      $this->UploadDate = $UploadDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentInfo
     */
    public function setVirtualPath($VirtualPath)
    {
      $this->VirtualPath = $VirtualPath;
      return $this;
    }

}
