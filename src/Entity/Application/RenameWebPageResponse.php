<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameWebPageResponse
{

    /**
     * @var boolean $RenameWebPageResult
     */
    protected $RenameWebPageResult = null;

    /**
     * @param boolean $RenameWebPageResult
     */
    public function __construct($RenameWebPageResult)
    {
      $this->RenameWebPageResult = $RenameWebPageResult;
    }

    /**
     * @return boolean
     */
    public function getRenameWebPageResult()
    {
      return $this->RenameWebPageResult;
    }

    /**
     * @param boolean $RenameWebPageResult
     * @return \WSD\BrightSignApi\Entity\Application\RenameWebPageResponse
     */
    public function setRenameWebPageResult($RenameWebPageResult)
    {
      $this->RenameWebPageResult = $RenameWebPageResult;
      return $this;
    }

}
