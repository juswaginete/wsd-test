<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class CompleteWebPageUploadSessionResponse
{

    /**
     * @var WebPageUploadStatus $CompleteWebPageUploadSessionResult
     */
    protected $CompleteWebPageUploadSessionResult = null;

    /**
     * @param WebPageUploadStatus $CompleteWebPageUploadSessionResult
     */
    public function __construct($CompleteWebPageUploadSessionResult)
    {
      $this->CompleteWebPageUploadSessionResult = $CompleteWebPageUploadSessionResult;
    }

    /**
     * @return WebPageUploadStatus
     */
    public function getCompleteWebPageUploadSessionResult()
    {
      return $this->CompleteWebPageUploadSessionResult;
    }

    /**
     * @param WebPageUploadStatus $CompleteWebPageUploadSessionResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\CompleteWebPageUploadSessionResponse
     */
    public function setCompleteWebPageUploadSessionResult($CompleteWebPageUploadSessionResult)
    {
      $this->CompleteWebPageUploadSessionResult = $CompleteWebPageUploadSessionResult;
      return $this;
    }

}
