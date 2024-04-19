<?php

namespace WSD\BrightSignApi\Entity\Application;

class RemoveScheduledPresentationResponse
{

    /**
     * @var boolean $RemoveScheduledPresentationResult
     */
    protected $RemoveScheduledPresentationResult = null;

    /**
     * @param boolean $RemoveScheduledPresentationResult
     */
    public function __construct($RemoveScheduledPresentationResult)
    {
      $this->RemoveScheduledPresentationResult = $RemoveScheduledPresentationResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveScheduledPresentationResult()
    {
      return $this->RemoveScheduledPresentationResult;
    }

    /**
     * @param boolean $RemoveScheduledPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\RemoveScheduledPresentationResponse
     */
    public function setRemoveScheduledPresentationResult($RemoveScheduledPresentationResult)
    {
      $this->RemoveScheduledPresentationResult = $RemoveScheduledPresentationResult;
      return $this;
    }

}
