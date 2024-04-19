<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class WebPageUploadArguments extends ContentUploadArguments
{

    /**
     * @var ArrayOfWebPageAssetUploadArguments $Assets
     */
    protected $Assets = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ArrayOfWebPageAssetUploadArguments
     */
    public function getAssets()
    {
      return $this->Assets;
    }

    /**
     * @param ArrayOfWebPageAssetUploadArguments $Assets
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageUploadArguments
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageUploadArguments
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
