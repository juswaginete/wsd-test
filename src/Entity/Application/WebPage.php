<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class WebPage
{

    /**
     * @var ArrayOfWebPageAsset $Assets
     */
    protected $Assets = null;

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

    /**
     * @var \DateTime $UploadDate
     */
    protected $UploadDate = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfWebPageAsset
     */
    public function getAssets()
    {
      return $this->Assets;
    }

    /**
     * @param ArrayOfWebPageAsset $Assets
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
     */
    public function setAssets($Assets)
    {
      $this->Assets = $Assets;
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
     */
    public function setPresentations($Presentations)
    {
      $this->Presentations = $Presentations;
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
     * @return \WSD\BrightSignApi\Entity\Application\WebPage
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

}
