<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetGroupScheduleResponse
{

    /**
     * @var PagedScheduledPresentationList $GetGroupScheduleResult
     */
    protected $GetGroupScheduleResult = null;

    /**
     * @param PagedScheduledPresentationList $GetGroupScheduleResult
     */
    public function __construct($GetGroupScheduleResult)
    {
      $this->GetGroupScheduleResult = $GetGroupScheduleResult;
    }

    /**
     * @return PagedScheduledPresentationList
     */
    public function getGetGroupScheduleResult()
    {
      return $this->GetGroupScheduleResult;
    }

    /**
     * @param PagedScheduledPresentationList $GetGroupScheduleResult
     * @return \WSD\BrightSignApi\Entity\Application\GetGroupScheduleResponse
     */
    public function setGetGroupScheduleResult($GetGroupScheduleResult)
    {
      $this->GetGroupScheduleResult = $GetGroupScheduleResult;
      return $this;
    }

}
