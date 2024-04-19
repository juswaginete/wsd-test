<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class StartWebPageUploadSession
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\StartWebPageUploadSession
     */
    public function setArgs($args)
    {
      $this->args = $args;
      return $this;
    }

}
