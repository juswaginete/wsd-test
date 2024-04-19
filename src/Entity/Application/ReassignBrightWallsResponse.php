<?php

namespace WSD\BrightSignApi\Entity\Application;

class ReassignBrightWallsResponse
{

    /**
     * @var boolean $ReassignBrightWallsResult
     */
    protected $ReassignBrightWallsResult = null;

    /**
     * @param boolean $ReassignBrightWallsResult
     */
    public function __construct($ReassignBrightWallsResult)
    {
      $this->ReassignBrightWallsResult = $ReassignBrightWallsResult;
    }

    /**
     * @return boolean
     */
    public function getReassignBrightWallsResult()
    {
      return $this->ReassignBrightWallsResult;
    }

    /**
     * @param boolean $ReassignBrightWallsResult
     * @return \WSD\BrightSignApi\Entity\Application\ReassignBrightWallsResponse
     */
    public function setReassignBrightWallsResult($ReassignBrightWallsResult)
    {
      $this->ReassignBrightWallsResult = $ReassignBrightWallsResult;
      return $this;
    }

}
