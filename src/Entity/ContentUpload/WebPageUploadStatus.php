<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class WebPageUploadStatus extends ContentUploadStatus
{

    /**
     * @var ArrayOfContentUploadStatus $Assets
     */
    protected $Assets = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @param int $FileSize
     * @param UploadState $State
     */
    public function __construct($FileSize, $State)
    {
      parent::__construct($FileSize, $State);
    }

    /**
     * @return ArrayOfContentUploadStatus
     */
    public function getAssets()
    {
      return $this->Assets;
    }

    /**
     * @param ArrayOfContentUploadStatus $Assets
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageUploadStatus
     */
    public function setAssets($Assets)
    {
      $this->Assets = $Assets;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageUploadStatus
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
