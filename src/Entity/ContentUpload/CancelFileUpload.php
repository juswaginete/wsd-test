<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class CancelFileUpload
{

    /**
     * @var string $uploadToken
     */
    protected $uploadToken = null;

    /**
     * @param string $uploadToken
     */
    public function __construct($uploadToken)
    {
      $this->uploadToken = $uploadToken;
    }

    /**
     * @return string
     */
    public function getUploadToken()
    {
      return $this->uploadToken;
    }

    /**
     * @param string $uploadToken
     * @return \WSD\BrightSignApi\Entity\ContentUpload\CancelFileUpload
     */
    public function setUploadToken($uploadToken)
    {
      $this->uploadToken = $uploadToken;
      return $this;
    }

}
