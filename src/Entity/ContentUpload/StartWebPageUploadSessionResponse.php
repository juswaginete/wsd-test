<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class StartWebPageUploadSessionResponse
{

    /**
     * @var WebPageUploadStatus $StartWebPageUploadSessionResult
     */
    protected $StartWebPageUploadSessionResult = null;

    /**
     * @param WebPageUploadStatus $StartWebPageUploadSessionResult
     */
    public function __construct($StartWebPageUploadSessionResult)
    {
      $this->StartWebPageUploadSessionResult = $StartWebPageUploadSessionResult;
    }

    /**
     * @return WebPageUploadStatus
     */
    public function getStartWebPageUploadSessionResult()
    {
      return $this->StartWebPageUploadSessionResult;
    }

    /**
     * @param WebPageUploadStatus $StartWebPageUploadSessionResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\StartWebPageUploadSessionResponse
     */
    public function setStartWebPageUploadSessionResult($StartWebPageUploadSessionResult)
    {
      $this->StartWebPageUploadSessionResult = $StartWebPageUploadSessionResult;
      return $this;
    }

}
