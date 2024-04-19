<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdatePresentationResponse
{

    /**
     * @var boolean $UpdatePresentationResult
     */
    protected $UpdatePresentationResult = null;

    /**
     * @param boolean $UpdatePresentationResult
     */
    public function __construct($UpdatePresentationResult)
    {
      $this->UpdatePresentationResult = $UpdatePresentationResult;
    }

    /**
     * @return boolean
     */
    public function getUpdatePresentationResult()
    {
      return $this->UpdatePresentationResult;
    }

    /**
     * @param boolean $UpdatePresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdatePresentationResponse
     */
    public function setUpdatePresentationResult($UpdatePresentationResult)
    {
      $this->UpdatePresentationResult = $UpdatePresentationResult;
      return $this;
    }

}
