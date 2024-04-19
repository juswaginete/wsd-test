<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class GetWebPageUploadStatus
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @param string $sessionToken
     */
    public function __construct($sessionToken)
    {
      $this->sessionToken = $sessionToken;
    }

    /**
     * @return string
     */
    public function getSessionToken()
    {
      return $this->sessionToken;
    }

    /**
     * @param string $sessionToken
     * @return \WSD\BrightSignApi\Entity\ContentUpload\GetWebPageUploadStatus
     */
    public function setSessionToken($sessionToken)
    {
      $this->sessionToken = $sessionToken;
      return $this;
    }

}
