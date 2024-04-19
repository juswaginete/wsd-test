<?php

namespace WSD\BrightSignApi\Entity\Application;

class AddScheduledPresentationResponse
{

    /**
     * @var ScheduledPresentation $AddScheduledPresentationResult
     */
    protected $AddScheduledPresentationResult = null;

    /**
     * @param ScheduledPresentation $AddScheduledPresentationResult
     */
    public function __construct($AddScheduledPresentationResult)
    {
      $this->AddScheduledPresentationResult = $AddScheduledPresentationResult;
    }

    /**
     * @return ScheduledPresentation
     */
    public function getAddScheduledPresentationResult()
    {
      return $this->AddScheduledPresentationResult;
    }

    /**
     * @param ScheduledPresentation $AddScheduledPresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\AddScheduledPresentationResponse
     */
    public function setAddScheduledPresentationResult($AddScheduledPresentationResult)
    {
      $this->AddScheduledPresentationResult = $AddScheduledPresentationResult;
      return $this;
    }

}
