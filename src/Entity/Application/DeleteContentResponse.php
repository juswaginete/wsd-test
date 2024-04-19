<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteContentResponse
{

    /**
     * @var boolean $DeleteContentResult
     */
    protected $DeleteContentResult = null;

    /**
     * @param boolean $DeleteContentResult
     */
    public function __construct($DeleteContentResult)
    {
      $this->DeleteContentResult = $DeleteContentResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteContentResult()
    {
      return $this->DeleteContentResult;
    }

    /**
     * @param boolean $DeleteContentResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteContentResponse
     */
    public function setDeleteContentResult($DeleteContentResult)
    {
      $this->DeleteContentResult = $DeleteContentResult;
      return $this;
    }

}
