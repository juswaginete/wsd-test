<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class LiveMediaFeedContent
{

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    /**
     * @var ArrayOfKeyValueOfstringstring $CustomFields
     */
    protected $CustomFields = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var duration $DisplayDuration
     */
    protected $DisplayDuration = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
      return $this;
    }

    /**
     * @return ArrayOfKeyValueOfstringstring
     */
    public function getCustomFields()
    {
      return $this->CustomFields;
    }

    /**
     * @param ArrayOfKeyValueOfstringstring $CustomFields
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
     */
    public function setCustomFields($CustomFields)
    {
      $this->CustomFields = $CustomFields;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
      return $this->Title;
    }

    /**
     * @param string $Title
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
     */
    public function setTitle($Title)
    {
      $this->Title = $Title;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveMediaFeedContent
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
