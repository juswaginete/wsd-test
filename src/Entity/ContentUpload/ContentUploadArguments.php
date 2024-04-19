<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

use WSD\BrightSignApi\Api;

class ContentUploadArguments
{

    /**
     * @var int $ChunksCount
     */
    protected $ChunksCount = null;

    /**
     * @var ContentType $ContentType
     */
    protected $ContentType = null;

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
     * @var base64Binary $FileThumb
     */
    protected $FileThumb = null;

    /**
     * @var string $SHA1Hash
     */
    protected $SHA1Hash = null;

    /**
     * @var string $SessionToken
     */
    protected $SessionToken = null;

    /**
     * @var string $UploadToken
     */
    protected $UploadToken = null;

    /**
     * @var string $VirtualPath
     */
    protected $VirtualPath = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getChunksCount()
    {
      return $this->ChunksCount;
    }

    /**
     * @param int $ChunksCount
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setChunksCount($ChunksCount)
    {
      $this->ChunksCount = $ChunksCount;
      return $this;
    }

    /**
     * @return ContentType
     */
    public function getContentType()
    {
      return $this->ContentType;
    }

    /**
     * @param ContentType $ContentType
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setContentType($ContentType)
    {
      $this->ContentType = $ContentType;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFileThumb()
    {
      return $this->FileThumb;
    }

    /**
     * @param base64Binary $FileThumb
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setFileThumb($FileThumb)
    {
      $this->FileThumb = $FileThumb;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setSHA1Hash($SHA1Hash)
    {
      $this->SHA1Hash = $SHA1Hash;
      return $this;
    }

    /**
     * @return string
     */
    public function getSessionToken()
    {
      return $this->SessionToken;
    }

    /**
     * @param string $SessionToken
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setSessionToken($SessionToken)
    {
      $this->SessionToken = $SessionToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getUploadToken()
    {
      return $this->UploadToken;
    }

    /**
     * @param string $UploadToken
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setUploadToken($UploadToken)
    {
      $this->UploadToken = $UploadToken;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadArguments
     */
    public function setVirtualPath($VirtualPath)
    {
      $this->VirtualPath = $VirtualPath;
      return $this;
    }

}
