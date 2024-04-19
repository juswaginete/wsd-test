<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreatePresentationResponse
{

    /**
     * @var Presentation $CreatePresentationResult
     */
    protected $CreatePresentationResult = null;

    /**
     * @param Presentation $CreatePresentationResult
     */
    public function __construct($CreatePresentationResult)
    {
      $this->CreatePresentationResult = $CreatePresentationResult;
    }

    /**
     * @return Presentation
     */
    public function getCreatePresentationResult()
    {
      return $this->CreatePresentationResult;
    }

    /**
     * @param Presentation $CreatePresentationResult
     * @return \WSD\BrightSignApi\Entity\Application\CreatePresentationResponse
     */
    public function setCreatePresentationResult($CreatePresentationResult)
    {
      $this->CreatePresentationResult = $CreatePresentationResult;
      return $this;
    }

}
