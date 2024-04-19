<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class ContentUpdateArguments extends ContentUploadArguments
{

    /**
     * @var int $ContentId
     */
    protected $ContentId = null;

    /**
     * @param int $ContentId
     */
    public function __construct($ContentId)
    {
      parent::__construct();
      $this->ContentId = $ContentId;
    }

    /**
     * @return int
     */
    public function getContentId()
    {
      return $this->ContentId;
    }

    /**
     * @param int $ContentId
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentUpdateArguments
     */
    public function setContentId($ContentId)
    {
      $this->ContentId = $ContentId;
      return $this;
    }

}
