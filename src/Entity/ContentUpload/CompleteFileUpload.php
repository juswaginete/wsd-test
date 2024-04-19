<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class CompleteFileUpload
{

    /**
     * @var ContentUploadArguments $args
     */
    protected $args = null;

    /**
     * @param ContentUploadArguments $args
     */
    public function __construct($args)
    {
      $this->args = $args;
    }

    /**
     * @return ContentUploadArguments
     */
    public function getArgs()
    {
      return $this->args;
    }

    /**
     * @param ContentUploadArguments $args
     * @return \WSD\BrightSignApi\Entity\ContentUpload\CompleteFileUpload
     */
    public function setArgs($args)
    {
      $this->args = $args;
      return $this;
    }

}
