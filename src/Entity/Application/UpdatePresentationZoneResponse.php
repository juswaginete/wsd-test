<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdatePresentationZoneResponse
{

    /**
     * @var boolean $UpdatePresentationZoneResult
     */
    protected $UpdatePresentationZoneResult = null;

    /**
     * @param boolean $UpdatePresentationZoneResult
     */
    public function __construct($UpdatePresentationZoneResult)
    {
      $this->UpdatePresentationZoneResult = $UpdatePresentationZoneResult;
    }

    /**
     * @return boolean
     */
    public function getUpdatePresentationZoneResult()
    {
      return $this->UpdatePresentationZoneResult;
    }

    /**
     * @param boolean $UpdatePresentationZoneResult
     * @return \WSD\BrightSignApi\Entity\Application\UpdatePresentationZoneResponse
     */
    public function setUpdatePresentationZoneResult($UpdatePresentationZoneResult)
    {
      $this->UpdatePresentationZoneResult = $UpdatePresentationZoneResult;
      return $this;
    }

}
