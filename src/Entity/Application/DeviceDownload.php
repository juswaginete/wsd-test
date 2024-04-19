<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class DeviceDownload
{

    /**
     * @var string $FileHash
     */
    protected $FileHash = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var int $Progress
     */
    protected $Progress = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $Timestamp
     */
    protected $Timestamp = null;

    
    public function __construct()
    {
    
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceDownload
     */
    public function setFileHash($FileHash)
    {
      $this->FileHash = $FileHash;
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
     * @return \WSD\BrightSignApi\Entity\Application\DeviceDownload
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return int
     */
    public function getProgress()
    {
      return $this->Progress;
    }

    /**
     * @param int $Progress
     * @return \WSD\BrightSignApi\Entity\Application\DeviceDownload
     */
    public function setProgress($Progress)
    {
      $this->Progress = $Progress;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \WSD\BrightSignApi\Entity\Application\DeviceDownload
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->Timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Timestamp, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Timestamp
     * @return \WSD\BrightSignApi\Entity\Application\DeviceDownload
     */
    public function setTimestamp(\DateTime $Timestamp = null)
    {
      if ($Timestamp == null) {
       $this->Timestamp = null;
      } else {
        $this->Timestamp = $Timestamp->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

}
