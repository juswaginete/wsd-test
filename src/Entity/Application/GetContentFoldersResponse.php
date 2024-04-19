<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetContentFoldersResponse
{

    /**
     * @var ArrayOfContentFolder $GetContentFoldersResult
     */
    protected $GetContentFoldersResult = null;

    /**
     * @param ArrayOfContentFolder $GetContentFoldersResult
     */
    public function __construct($GetContentFoldersResult)
    {
      $this->GetContentFoldersResult = $GetContentFoldersResult;
    }

    /**
     * @return ArrayOfContentFolder
     */
    public function getGetContentFoldersResult()
    {
      return $this->GetContentFoldersResult;
    }

    /**
     * @param ArrayOfContentFolder $GetContentFoldersResult
     * @return \WSD\BrightSignApi\Entity\Application\GetContentFoldersResponse
     */
    public function setGetContentFoldersResult($GetContentFoldersResult)
    {
      $this->GetContentFoldersResult = $GetContentFoldersResult;
      return $this;
    }

}
