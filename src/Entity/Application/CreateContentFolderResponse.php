<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateContentFolderResponse
{

    /**
     * @var ContentFolder $CreateContentFolderResult
     */
    protected $CreateContentFolderResult = null;

    /**
     * @param ContentFolder $CreateContentFolderResult
     */
    public function __construct($CreateContentFolderResult)
    {
      $this->CreateContentFolderResult = $CreateContentFolderResult;
    }

    /**
     * @return ContentFolder
     */
    public function getCreateContentFolderResult()
    {
      return $this->CreateContentFolderResult;
    }

    /**
     * @param ContentFolder $CreateContentFolderResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateContentFolderResponse
     */
    public function setCreateContentFolderResult($CreateContentFolderResult)
    {
      $this->CreateContentFolderResult = $CreateContentFolderResult;
      return $this;
    }

}
