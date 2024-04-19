<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class CompleteFileUploadResponse
{

    /**
     * @var ContentUploadStatus $CompleteFileUploadResult
     */
    protected $CompleteFileUploadResult = null;

    /**
     * @param ContentUploadStatus $CompleteFileUploadResult
     */
    public function __construct($CompleteFileUploadResult)
    {
      $this->CompleteFileUploadResult = $CompleteFileUploadResult;
    }

    /**
     * @return ContentUploadStatus
     */
    public function getCompleteFileUploadResult()
    {
      return $this->CompleteFileUploadResult;
    }

    /**
     * @param ContentUploadStatus $CompleteFileUploadResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\CompleteFileUploadResponse
     */
    public function setCompleteFileUploadResult($CompleteFileUploadResult)
    {
      $this->CompleteFileUploadResult = $CompleteFileUploadResult;
      return $this;
    }

}
