<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedBrightWallPresentations
{

    /**
     * @var ArrayOfint $brightWallPresentationIds
     */
    protected $brightWallPresentationIds = null;

    /**
     * @param ArrayOfint $brightWallPresentationIds
     */
    public function __construct($brightWallPresentationIds)
    {
      $this->brightWallPresentationIds = $brightWallPresentationIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getBrightWallPresentationIds()
    {
      return $this->brightWallPresentationIds;
    }

    /**
     * @param ArrayOfint $brightWallPresentationIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedBrightWallPresentations
     */
    public function setBrightWallPresentationIds($brightWallPresentationIds)
    {
      $this->brightWallPresentationIds = $brightWallPresentationIds;
      return $this;
    }

}
