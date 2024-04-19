<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class AppendChunk
{

    /**
     * @var string $sessionToken
     */
    protected $sessionToken = null;

    /**
     * @var string $uploadToken
     */
    protected $uploadToken = null;

    /**
     * @var int $partNumber
     */
    protected $partNumber = null;

    /**
     * @var base64Binary $data
     */
    protected $data = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @param string $sessionToken
     * @param string $uploadToken
     * @param int $partNumber
     * @param base64Binary $data
     * @param int $offset
     */
    public function __construct($sessionToken, $uploadToken, $partNumber, $data, $offset)
    {
      $this->sessionToken = $sessionToken;
      $this->uploadToken = $uploadToken;
      $this->partNumber = $partNumber;
      $this->data = $data;
      $this->offset = $offset;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\AppendChunk
     */
    public function setSessionToken($sessionToken)
    {
      $this->sessionToken = $sessionToken;
      return $this;
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
     * @return \WSD\BrightSignApi\Entity\ContentUpload\AppendChunk
     */
    public function setUploadToken($uploadToken)
    {
      $this->uploadToken = $uploadToken;
      return $this;
    }

    /**
     * @return int
     */
    public function getPartNumber()
    {
      return $this->partNumber;
    }

    /**
     * @param int $partNumber
     * @return \WSD\BrightSignApi\Entity\ContentUpload\AppendChunk
     */
    public function setPartNumber($partNumber)
    {
      $this->partNumber = $partNumber;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getData()
    {
      return $this->data;
    }

    /**
     * @param base64Binary $data
     * @return \WSD\BrightSignApi\Entity\ContentUpload\AppendChunk
     */
    public function setData($data)
    {
      $this->data = $data;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \WSD\BrightSignApi\Entity\ContentUpload\AppendChunk
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
