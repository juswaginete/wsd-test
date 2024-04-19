<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class LiveTextFeedItem
{

    /**
     * @var string $Description
     */
    protected $Description = null;

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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeedItem
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeedItem
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeedItem
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
     * @return \WSD\BrightSignApi\Entity\Application\LiveTextFeedItem
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
