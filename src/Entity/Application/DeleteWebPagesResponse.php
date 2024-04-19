<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteWebPagesResponse
{

    /**
     * @var boolean $DeleteWebPagesResult
     */
    protected $DeleteWebPagesResult = null;

    /**
     * @param boolean $DeleteWebPagesResult
     */
    public function __construct($DeleteWebPagesResult)
    {
      $this->DeleteWebPagesResult = $DeleteWebPagesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteWebPagesResult()
    {
      return $this->DeleteWebPagesResult;
    }

    /**
     * @param boolean $DeleteWebPagesResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteWebPagesResponse
     */
    public function setDeleteWebPagesResult($DeleteWebPagesResult)
    {
      $this->DeleteWebPagesResult = $DeleteWebPagesResult;
      return $this;
    }

}
