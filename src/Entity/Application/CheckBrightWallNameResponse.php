<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckBrightWallNameResponse
{

    /**
     * @var boolean $CheckBrightWallNameResult
     */
    protected $CheckBrightWallNameResult = null;

    /**
     * @param boolean $CheckBrightWallNameResult
     */
    public function __construct($CheckBrightWallNameResult)
    {
      $this->CheckBrightWallNameResult = $CheckBrightWallNameResult;
    }

    /**
     * @return boolean
     */
    public function getCheckBrightWallNameResult()
    {
      return $this->CheckBrightWallNameResult;
    }

    /**
     * @param boolean $CheckBrightWallNameResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckBrightWallNameResponse
     */
    public function setCheckBrightWallNameResult($CheckBrightWallNameResult)
    {
      $this->CheckBrightWallNameResult = $CheckBrightWallNameResult;
      return $this;
    }

}
