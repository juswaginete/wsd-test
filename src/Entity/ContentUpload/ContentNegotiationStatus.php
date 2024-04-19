<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class ContentNegotiationStatus extends ContentUploadStatus
{

    /**
     * @var ArrayOfContentInfo $MatchingFiles
     */
    protected $MatchingFiles = null;

    /**
     * @param int $FileSize
     * @param UploadState $State
     */
    public function __construct($FileSize, $State)
    {
      parent::__construct($FileSize, $State);
    }

    /**
     * @return ArrayOfContentInfo
     */
    public function getMatchingFiles()
    {
      return $this->MatchingFiles;
    }

    /**
     * @param ArrayOfContentInfo $MatchingFiles
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ContentNegotiationStatus
     */
    public function setMatchingFiles($MatchingFiles)
    {
      $this->MatchingFiles = $MatchingFiles;
      return $this;
    }

}
