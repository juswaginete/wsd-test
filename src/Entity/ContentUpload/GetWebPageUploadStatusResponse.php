<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class GetWebPageUploadStatusResponse
{

    /**
     * @var WebPageUploadStatus $GetWebPageUploadStatusResult
     */
    protected $GetWebPageUploadStatusResult = null;

    /**
     * @param WebPageUploadStatus $GetWebPageUploadStatusResult
     */
    public function __construct($GetWebPageUploadStatusResult)
    {
      $this->GetWebPageUploadStatusResult = $GetWebPageUploadStatusResult;
    }

    /**
     * @return WebPageUploadStatus
     */
    public function getGetWebPageUploadStatusResult()
    {
      return $this->GetWebPageUploadStatusResult;
    }

    /**
     * @param WebPageUploadStatus $GetWebPageUploadStatusResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\GetWebPageUploadStatusResponse
     */
    public function setGetWebPageUploadStatusResult($GetWebPageUploadStatusResult)
    {
      $this->GetWebPageUploadStatusResult = $GetWebPageUploadStatusResult;
      return $this;
    }

}
