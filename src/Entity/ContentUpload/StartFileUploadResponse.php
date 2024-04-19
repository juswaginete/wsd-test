<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class StartFileUploadResponse
{

    /**
     * @var ContentUploadStatus $StartFileUploadResult
     */
    protected $StartFileUploadResult = null;

    /**
     * @param ContentUploadStatus $StartFileUploadResult
     */
    public function __construct($StartFileUploadResult)
    {
      $this->StartFileUploadResult = $StartFileUploadResult;
    }

    /**
     * @return ContentUploadStatus
     */
    public function getStartFileUploadResult()
    {
      return $this->StartFileUploadResult;
    }

    /**
     * @param ContentUploadStatus $StartFileUploadResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\StartFileUploadResponse
     */
    public function setStartFileUploadResult($StartFileUploadResult)
    {
      $this->StartFileUploadResult = $StartFileUploadResult;
      return $this;
    }

}
