<?php

namespace WSD\BrightSignApi\Entity\Application;

class MoveContentResponse
{

    /**
     * @var boolean $MoveContentResult
     */
    protected $MoveContentResult = null;

    /**
     * @param boolean $MoveContentResult
     */
    public function __construct($MoveContentResult)
    {
      $this->MoveContentResult = $MoveContentResult;
    }

    /**
     * @return boolean
     */
    public function getMoveContentResult()
    {
      return $this->MoveContentResult;
    }

    /**
     * @param boolean $MoveContentResult
     * @return \WSD\BrightSignApi\Entity\Application\MoveContentResponse
     */
    public function setMoveContentResult($MoveContentResult)
    {
      $this->MoveContentResult = $MoveContentResult;
      return $this;
    }

}
