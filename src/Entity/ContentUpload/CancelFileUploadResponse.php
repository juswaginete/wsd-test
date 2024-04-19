<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class CancelFileUploadResponse
{

    /**
     * @var ContentUploadStatus $CancelFileUploadResult
     */
    protected $CancelFileUploadResult = null;

    /**
     * @param ContentUploadStatus $CancelFileUploadResult
     */
    public function __construct($CancelFileUploadResult)
    {
      $this->CancelFileUploadResult = $CancelFileUploadResult;
    }

    /**
     * @return ContentUploadStatus
     */
    public function getCancelFileUploadResult()
    {
      return $this->CancelFileUploadResult;
    }

    /**
     * @param ContentUploadStatus $CancelFileUploadResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\CancelFileUploadResponse
     */
    public function setCancelFileUploadResult($CancelFileUploadResult)
    {
      $this->CancelFileUploadResult = $CancelFileUploadResult;
      return $this;
    }

}
