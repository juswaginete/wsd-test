<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckPresentationNameResponse
{

    /**
     * @var boolean $CheckPresentationNameResult
     */
    protected $CheckPresentationNameResult = null;

    /**
     * @param boolean $CheckPresentationNameResult
     */
    public function __construct($CheckPresentationNameResult)
    {
      $this->CheckPresentationNameResult = $CheckPresentationNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckPresentationNameResult()
    {
      return $this->CheckPresentationNameResult;
    }

    /**
     * @param boolean $CheckPresentationNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckPresentationNameResponse
     */
    public function setCheckPresentationNameResult($CheckPresentationNameResult)
    {
      $this->CheckPresentationNameResult = $CheckPresentationNameResult;
      return $this;
    }

}
