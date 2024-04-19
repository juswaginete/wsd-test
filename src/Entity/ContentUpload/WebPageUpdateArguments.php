<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class WebPageUpdateArguments extends WebPageUploadArguments
{

    /**
     * @var int $WebPageId
     */
    protected $WebPageId = null;

    /**
     * @param int $WebPageId
     */
    public function __construct($WebPageId)
    {
      parent::__construct();
      $this->WebPageId = $WebPageId;
    }

    /**
     * @return int
     */
    public function getWebPageId()
    {
      return $this->WebPageId;
    }

    /**
     * @param int $WebPageId
     * @return \WSD\BrightSignApi\Entity\ContentUpload\WebPageUpdateArguments
     */
    public function setWebPageId($WebPageId)
    {
      $this->WebPageId = $WebPageId;
      return $this;
    }

}
