<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetFolderContentResponse
{

    /**
     * @var PagedContentList $GetFolderContentResult
     */
    protected $GetFolderContentResult = null;

    /**
     * @param PagedContentList $GetFolderContentResult
     */
    public function __construct($GetFolderContentResult)
    {
      $this->GetFolderContentResult = $GetFolderContentResult;
    }

    /**
     * @return PagedContentList
     */
    public function getGetFolderContentResult()
    {
      return $this->GetFolderContentResult;
    }

    /**
     * @param PagedContentList $GetFolderContentResult
     * @return \WSD\BrightSignApi\Entity\Application\GetFolderContentResponse
     */
    public function setGetFolderContentResult($GetFolderContentResult)
    {
      $this->GetFolderContentResult = $GetFolderContentResult;
      return $this;
    }

}
