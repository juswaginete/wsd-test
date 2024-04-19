<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallPresentationNameResponse
{

    /**
     * @var boolean $CheckBrightWallPresentationNameResult
     */
    protected $CheckBrightWallPresentationNameResult = null;

    /**
     * @param boolean $CheckBrightWallPresentationNameResult
     */
    public function __construct($CheckBrightWallPresentationNameResult)
    {
      $this->CheckBrightWallPresentationNameResult = $CheckBrightWallPresentationNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallPresentationNameResult()
    {
      return $this->CheckBrightWallPresentationNameResult;
    }

    /**
     * @param boolean $CheckBrightWallPresentationNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallPresentationNameResponse
     */
    public function setCheckBrightWallPresentationNameResult($CheckBrightWallPresentationNameResult)
    {
      $this->CheckBrightWallPresentationNameResult = $CheckBrightWallPresentationNameResult;
      return $this;
    }

}
