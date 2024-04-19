<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

use WSD\BrightSignApi\Api;

class ContentUploadStatus
{

    /**
     * @var int $ChunksTotal
     */
    protected $ChunksTotal = null;

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    /**
     * @var \DateTime $EndTime
     */
    protected $EndTime = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var int $FileSize
     */
    protected $FileSize = null;

    /**
     * @var \DateTime $LastActivityTime
     */
    protected $LastActivityTime = null;

    /**
     * @var string $SHA1Hash
     */
    protected $SHA1Hash = null;

    /**
     * @var string $SessionToken
     */
    protected $SessionToken = null;

    /**
     * @var \DateTime $StartTime
     */
    protected $StartTime = null;

    /**
     * @var UploadState $State
     */
    protected $State = null;

    /**
     * @var string $UploadToken
     */
    protected $UploadToken = null;

    /**
     * @param int $FileSize
     * @param UploadState $State
     */
    public function __construct($FileSize, $State)
    {
      $this->FileSize = $FileSize;
      $this->State = $State;
    }

    /**
     * @return int
     */
    public function getChunksTotal()
    {
      return $this->ChunksTotal;
    }

    /**
     * @param int $ChunksTotal
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setChunksTotal($ChunksTotal)
    {
      $this->ChunksTotal = $ChunksTotal;
      return $this;
    }

    /**
     * @return int
     */
    public function getContentId()
    {
      return $this->ContentId;
    }

    /**
     * @param int $ContentId
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime()
    {
      if ($this->EndTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EndTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EndTime
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setEndTime(\DateTime $EndTime = null)
    {
      if ($EndTime == null) {
       $this->EndTime = null;
      } else {
        $this->EndTime = $EndTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastActivityTime()
    {
      if ($this->LastActivityTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastActivityTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastActivityTime
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setLastActivityTime(\DateTime $LastActivityTime = null)
    {
      if ($LastActivityTime == null) {
       $this->LastActivityTime = null;
      } else {
        $this->LastActivityTime = $LastActivityTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setSessionToken($SessionToken)
    {
      $this->SessionToken = $SessionToken;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
      if ($this->StartTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartTime, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartTime
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setStartTime(\DateTime $StartTime = null)
    {
      if ($StartTime == null) {
       $this->StartTime = null;
      } else {
        $this->StartTime = $StartTime->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return UploadState
     */
    public function getState()
    {
      return $this->State;
    }

    /**
     * @param UploadState $State
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setState($State)
    {
      $this->State = $State;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUploadStatus
     */
    public function setUploadToken($UploadToken)
    {
      $this->UploadToken = $UploadToken;
      return $this;
    }

}
