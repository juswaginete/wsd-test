<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class WebPageAssetUploadArguments extends ContentUploadArguments
{

    /**
     * @var string $RelativePath
     */
    protected $RelativePath = null;

    /**
     * @var int $WebPageAssetId
     */
    protected $WebPageAssetId = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return string
     */
    public function getRelativePath()
    {
      return $this->RelativePath;
    }

    /**
     * @param string $RelativePath
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageAssetUploadArguments
     */
    public function setRelativePath($RelativePath)
    {
      $this->RelativePath = $RelativePath;
      return $this;
    }

    /**
     * @return int
     */
    public function getWebPageAssetId()
    {
      return $this->WebPageAssetId;
    }

    /**
     * @param int $WebPageAssetId
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageAssetUploadArguments
     */
    public function setWebPageAssetId($WebPageAssetId)
    {
      $this->WebPageAssetId = $WebPageAssetId;
      return $this;
    }

}
