<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSpecifiedBrightWalls
{

    /**
     * @var ArrayOfint $brightWallIds
     */
    protected $brightWallIds = null;

    /**
     * @param ArrayOfint $brightWallIds
     */
    public function __construct($brightWallIds)
    {
      $this->brightWallIds = $brightWallIds;
    }

    /**
     * @return ArrayOfint
     */
    public function getBrightWallIds()
    {
      return $this->brightWallIds;
    }

    /**
     * @param ArrayOfint $brightWallIds
     * @return \WSD\BrightSignApi\Entity\Application\GetSpecifiedBrightWalls
     */
    public function setBrightWallIds($brightWallIds)
    {
      $this->brightWallIds = $brightWallIds;
      return $this;
    }

}
