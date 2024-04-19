<?php

namespace WSD\BrightSignApi\Entity\Application;

class OverwriteScheduleResponse
{

    /**
     * @var boolean $OverwriteScheduleResult
     */
    protected $OverwriteScheduleResult = null;

    /**
     * @param boolean $OverwriteScheduleResult
     */
    public function __construct($OverwriteScheduleResult)
    {
      $this->OverwriteScheduleResult = $OverwriteScheduleResult;
    }

    /**
     * @return boolean
     */
    public function getOverwriteScheduleResult()
    {
      return $this->OverwriteScheduleResult;
    }

    /**
     * @param boolean $OverwriteScheduleResult
     * @return \WSD\BrightSignApi\Entity\Application\OverwriteScheduleResponse
     */
    public function setOverwriteScheduleResult($OverwriteScheduleResult)
    {
      $this->OverwriteScheduleResult = $OverwriteScheduleResult;
      return $this;
    }

}
