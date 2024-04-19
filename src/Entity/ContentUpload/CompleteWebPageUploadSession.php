<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class CompleteWebPageUploadSession
{

    /**
     * @var WebPageUploadArguments $args
     */
    protected $args = null;

    /**
     * @param WebPageUploadArguments $args
     */
    public function __construct($args)
    {
      $this->args = $args;
    }

    /**
     * @return WebPageUploadArguments
     */
    public function getArgs()
    {
      return $this->args;
    }

    /**
     * @param WebPageUploadArguments $args
     * @return \WSD\BrightSignApi\Entity\ContentUpload\CompleteWebPageUploadSession
     */
    public function setArgs($args)
    {
      $this->args = $args;
      return $this;
    }

}
