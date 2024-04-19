<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class AppendChunkResponse
{

    /**
     * @var boolean $AppendChunkResult
     */
    protected $AppendChunkResult = null;

    /**
     * @param boolean $AppendChunkResult
     */
    public function __construct($AppendChunkResult)
    {
      $this->AppendChunkResult = $AppendChunkResult;
    }

    /**
     * @return boolean
     */
    public function getAppendChunkResult()
    {
      return $this->AppendChunkResult;
    }

    /**
     * @param boolean $AppendChunkResult
     * @return \WSD\BrightSignApi\Entity\ContentUpload\AppendChunkResponse
     */
    public function setAppendChunkResult($AppendChunkResult)
    {
      $this->AppendChunkResult = $AppendChunkResult;
      return $this;
    }

}
