<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;
use WSD\BrightSignApi\JsonSerializeTrait;

class DynamicPlaylistContent implements \JsonSerializable
{

    use JsonSerializeTrait;

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    /**
     * @var duration $DisplayDuration
     */
    protected $DisplayDuration = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var \DateTime $ValidityEndDate
     */
    protected $ValidityEndDate = null;

    /**
     * @var \DateTime $ValidityStartDate
     */
    protected $ValidityStartDate = null;

    
    public function __construct()
    {
    
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistContent
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
      return $this;
    }

    /**
     * @return duration
     */
    public function getDisplayDuration()
    {
      return $this->DisplayDuration;
    }

    /**
     * @param duration $DisplayDuration
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistContent
     */
    public function setDisplayDuration($DisplayDuration)
    {
      $this->DisplayDuration = $DisplayDuration;
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistContent
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidityEndDate()
    {
      if ($this->ValidityEndDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidityEndDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidityEndDate
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistContent
     */
    public function setValidityEndDate(\DateTime $ValidityEndDate = null)
    {
      if ($ValidityEndDate == null) {
       $this->ValidityEndDate = null;
      } else {
        $this->ValidityEndDate = $ValidityEndDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getValidityStartDate()
    {
      if ($this->ValidityStartDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ValidityStartDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ValidityStartDate
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistContent
     */
    public function setValidityStartDate(\DateTime $ValidityStartDate = null)
    {
      if ($ValidityStartDate == null) {
       $this->ValidityStartDate = null;
      } else {
        $this->ValidityStartDate = $ValidityStartDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

}
