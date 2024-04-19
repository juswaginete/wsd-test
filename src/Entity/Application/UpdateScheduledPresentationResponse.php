<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateScheduledPresentationResponse
{

    /**
     * @var boolean $UpdateScheduledPresentationResult
     */
    protected $UpdateScheduledPresentationResult = null;

    /**
     * @param boolean $UpdateScheduledPresentationResult
     */
    public function __construct($UpdateScheduledPresentationResult)
    {
      $this->UpdateScheduledPresentationResult = $UpdateScheduledPresentationResult;
    }

    /**
     * @return boolean
     */
    public function getUpdateScheduledPresentationResult()
    {
      return $this->UpdateScheduledPresentationResult;
    }

    /**
     * @param boolean $UpdateScheduledPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdateScheduledPresentationResponse
     */
    public function setUpdateScheduledPresentationResult($UpdateScheduledPresentationResult)
    {
      $this->UpdateScheduledPresentationResult = $UpdateScheduledPresentationResult;
      return $this;
    }

}
