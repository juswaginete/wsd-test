<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class GetFileUploadStatusResponse
{

    /**
     * @var ContentUploadStatus $GetFileUploadStatusResult
     */
    protected $GetFileUploadStatusResult = null;

    /**
     * @param ContentUploadStatus $GetFileUploadStatusResult
     */
    public function __construct($GetFileUploadStatusResult)
    {
      $this->GetFileUploadStatusResult = $GetFileUploadStatusResult;
    }

    /**
     * @return ContentUploadStatus
     */
    public function getGetFileUploadStatusResult()
    {
      return $this->GetFileUploadStatusResult;
    }

    /**
     * @param ContentUploadStatus $GetFileUploadStatusResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\GetFileUploadStatusResponse
     */
    public function setGetFileUploadStatusResult($GetFileUploadStatusResult)
    {
      $this->GetFileUploadStatusResult = $GetFileUploadStatusResult;
      return $this;
    }

}
